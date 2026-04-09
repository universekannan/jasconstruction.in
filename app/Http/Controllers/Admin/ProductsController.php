<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
use Jenssegers\Agent\Agent;
use App\FCM;

class ProductsController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function projects($id) {

      $projects = DB::table( 'project' )->where( 'project_status_id', $id )->orderBy( 'id', 'Asc' )->get();

        return view( 'admin/projects/index', compact( 'projects' ) );
    }

    public function dropproject( $id ) {
        $dropproduct = DB::table( 'project' )->where( 'id', $id )->delete();
        return redirect()->back()->with('success', 'product deleted Successfully ... !');
    }

    public function details( $status, $id ) {

        $orders = DB::table( 'order_details' )->select( 'order_details.*', 'orders.net_total')
        ->Join( 'orders', 'orders.id', '=', 'order_details.order_id' )
        ->where( 'order_details.order_id', $id )
        ->where( 'order_details.status', $status )
        ->orderBy( 'order_details.id', 'Asc' )->get();
        return view( 'admin/products/details', compact( 'orders' ) );
    }

    public function addproject() {
        $seller_id = auth()->user()->id;
        $project = DB::table( 'project' )->orderBy( 'id', 'desc' )->get();
       
        $seller = DB::table( 'users' )->where( 'id', $seller_id )->where( 'status', 1 )->orderBy( 'id', 'desc' )->get();

        return view( 'admin/projects/addproject', compact( 'project', 'seller') );
    }

   public function saveproject(Request $request)
{
    // INSERT PROJECT
    DB::table('project')->insert([
        'project_status_id' => $request->project_status_id,
        'project_name' => $request->project_name,
        'project_owner' => $request->project_owner,
        'project_sqft' => $request->project_sqft,
        'project_description' => $request->project_description,
        'project_address' => $request->project_address,
    ]);

    $id = DB::getPdo()->lastInsertId();

    $photo = '';

    // ✅ HANDLE CROPPED IMAGE
    if ($request->image_base64) {

        $image = $request->image_base64;

        $image = preg_replace('/^data:image\/\w+;base64,/', '', $image);
        $image = str_replace(' ', '+', $image);

        $photo = $id . '.png';

        $path = public_path('upload/projectsave/');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        file_put_contents($path . $photo, base64_decode($image));
    }

    // SAVE IMAGE NAME
    if ($photo != '') {
        DB::table('project')->where('id', $id)->update([
            'photo' => $photo
        ]);
    }

    return redirect('admin/projects/1')->with('success', 'Project Added Successfully');
}

    public function editproject( $id ) {
     
	  $projects = DB::table('project')->where( 'id', $id )->first();
	  $project_status = DB::table('project_status')->get();
      $sql = "select * from project_image where project_id=$id";
      $projectimage = DB::select( DB::raw( $sql ) );
     //print_r($projects);die;
      return view( 'admin/projects/editproject', compact( 'projects','project_status','projectimage') );
    }


    public function saveprojectimage( Request $request ) {

        $project_id = $request->project_id;
        $project_name = $request->project_name;
        $output = preg_replace( '!\s+!', ' ', $project_name );
        $project_url =  strtolower( str_replace( ' ', '_', $output ) );

        $photo = '';
        if ( $request->photo != null ) {
            $photo = $project_url . '-' . $project_id . '.' . $request->file( 'photo' )->extension();
            $filepath = public_path( 'upload' . DIRECTORY_SEPARATOR . 'project' . DIRECTORY_SEPARATOR );
            move_uploaded_file( $_FILES[ 'photo' ][ 'tmp_name' ], $filepath . $photo );

             $addimg = DB::table( 'project_image' )->where( 'id', $project_id )->insert( [
                'photo'      => $photo,
                'project_id' => $project_id,

            ] );
        }

    return redirect()->back()->with( 'success', 'Projcets ADD Successfully ... !' );

    }

    public function updateproject(Request $request)
{
    $project_id = $request->project_id;

    // UPDATE TEXT DATA
    DB::table('project')->where('id', $project_id)->update([

        'project_status_id' => $request->project_status_id,
        'project_name' => $request->project_name,
        'project_owner' => $request->project_owner,
        'project_sqft' => $request->project_sqft,
        'project_description' => $request->project_description,
        'project_amount' => $request->project_amount,
        'project_address' => $request->project_address,

    ]);


    /* -------------------------
       SAVE CROPPED IMAGE
    -------------------------*/

    if ($request->image_base64) {

        $image = $request->image_base64;

        $image = preg_replace('/^data:image\/\w+;base64,/', '', $image);

        $image = str_replace(' ', '+', $image);

        $photo = $project_id . '.png';

        $path = public_path('upload/projectsave/');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        file_put_contents($path . $photo, base64_decode($image));

        DB::table('project')
        ->where('id', $project_id)
        ->update([
            'photo' => $photo
        ]);
    }


    return redirect('admin/projects/'.$request->project_status_id)
    ->with('success', 'Project Updated Successfully');

}

    public function pendingorder() {
        $pendingorder = DB::table( 'productorder' )->select( 'productorder.*', 'products.product_name')
        ->Join( 'products', 'products.id', '=', 'productorder.product_id' )
        ->where( 'productorder.status', 'Active' )
        ->orderBy( 'productorder.id', 'Asc' )->get();
        return view( 'admin/users/pendingorder', compact( 'pendingorder') );
    }

    public function completedorder() {
        $completedorder = DB::table( 'productorder' )->select( 'productorder.*', 'products.product_name')
        ->Join( 'products', 'products.id', '=', 'productorder.product_id' )
        ->where( 'productorder.status', 'Inactive' )
        ->orderBy( 'productorder.id', 'Asc' )->get();
        return view( 'admin/users/completedorder', compact( 'completedorder') );
    }
    
        public function deleteimage( $id ) {
        $dropproject = DB::table( 'project_image' )->where( 'id', $id )->delete();
        return redirect()->back()->with('success', 'Image deleted Successfully ... !');
    }
    
}

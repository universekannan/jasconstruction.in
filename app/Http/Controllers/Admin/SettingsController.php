<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
use Jenssegers\Agent\Agent;
use App\FCM;

class SettingsController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

public function web_setting(){
    $setting = DB::table('settings')->get()->keyBy('name');
    return view("admin.settings.website_settings", compact('setting'));
}

public function setting_update(Request $request)
{
    $inputs = $request->except(['_token', 'cropped_favicon']);

    foreach ($inputs as $key => $value) {

        if ($key === 'favicon' && $request->filled('cropped_favicon')) {
            $base64Image = $request->input('cropped_favicon');
            
            $imageData = base64_decode(preg_replace('/^data:image\/\w+;base64,/', '', $base64Image));
            
            $filename = 'favicon_' . time() . '.png';
            $destinationPath = public_path('upload/settings');
            
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            
            $existing = DB::table('settings')->where('name', 'favicon')->first();
            if ($existing && !empty($existing->value)) {
                $oldFile = public_path($existing->value);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }
            
            file_put_contents($destinationPath . '/' . $filename, $imageData);
            $value = 'upload/settings/' . $filename;
        }
        elseif (in_array($key, ['favicon', 'logo', 'home_image', 'about_us_image','slider1_image','slider2_image','slider3_image']) && $request->hasFile($key)) {

            $file = $request->file($key);
            $filename = $key . '_' . time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('upload/settings');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $existing = DB::table('settings')->where('name', $key)->first();
            if ($existing && !empty($existing->value)) {
                $oldFile = public_path($existing->value);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            $file->move($destinationPath, $filename);
            $value = 'upload/settings/' . $filename;
        }

        DB::table('settings')->updateOrInsert(
            ['name' => $key],
            ['value' => $value]
        );
    }

    return redirect()->back()->with('success', 'Settings Updated Successfully');
}

}
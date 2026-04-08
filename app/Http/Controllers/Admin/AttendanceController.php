<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class AttendanceController extends Controller
{

  public function __construct()
  {
    $this->middleware( 'auth' );
  }

  private function check_access( $BP ) {
    if ( $BP == 'man_attendance' && Auth::user()->man_attendance == 0 ) {
      echo '<h1>Access Denied</h1>';
      die;
    }
  }


  public function index()
  {
    $class_id = '';
    $period_id = 0;
    $school_id = auth()->user()->school_id;
    $sql = 'select a.id,a.class_name,a.division_id,b.division_name from class_list a,division_list b where a.division_id=b.id and a.school_id';
    $class = DB::select( DB::raw( $sql ) );
    return view( 'attendance/attendance', compact( 'class', 'class_id', 'period_id' ) );

  }

        public function addAttendance(Request $request)
        {
            $user_id = $request->user_id;
            $date = date('Y-m-d');
            $time_now = date('H:i:s');
            $login_id = $request->user_id;
        
            $attendance = DB::table('attendance')
                ->where('user_id', $user_id)
                ->where('date', $date)
                ->first();
        
            $folder = $attendance ? 'time_out' : 'time_in';
            $photo_path = null;
        
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $photo_path = 'attendance_' . uniqid() . '.' . $file->getClientOriginalExtension();
        
                $directory = public_path("uploads/attendances/{$folder}");
                if (!file_exists($directory)) {
                    mkdir($directory, 0755, true);
                }
        
                $file->move($directory, $photo_path);
            }
        
            if (!$attendance) {
                DB::table('attendance')->insert([
                    'user_id' => $user_id,
                    'date' => $date,
                    'time_in' => $time_now,
                    'status' => 'Time In',
                    'login_id' => $login_id,
                    'photo_time_in' => $photo_path ? "uploads/attendances/{$folder}/{$photo_path}" : null,
                ]);
                
                $message = 'Time In recorded successfully';
            } else {
                DB::table('attendance')
                    ->where('id', $attendance->id)
                    ->update([
                        'time_out' => $time_now,
                        'status' => 'Time Out',
                        'photo_time_out' => $photo_path ? "uploads/attendances/{$folder}/{$photo_path}" : null,
                    ]);
                    
                $message = 'Time Out recorded successfully';
            }
        
            return response()->json([
                'success' => true,
                'message' => $message,
                'status' => $attendance ? 'Time Out' : 'Time In',
                'time' => $time_now
            ]);
        }


  public function viewattendance( $class_id, $period_id ) {
    $school_id = auth()->user()->school_id;
    $id = auth()->user()->school_id;
     $getclass = DB::table( 'class_list' )->select( 'class_list.*', 'division_list.division_name' )
    ->Join( 'division_list', 'division_list.id', '=', 'class_list.division_id' )->orderBy( 'id', 'desc' )->get(); 
    $att_date = date( 'Y-m-d' );
    $sql = "select a.id,a.class_name,a.division_id,b.division_name from class_list a,division_list b where a.division_id=b.id and a.school_id=$school_id";
    $class = DB::select( DB::raw( $sql ) );
    $sql = "select * from student where school_id=$school_id and class_id=$class_id";
    $students = DB::select( DB::raw( $sql ) );
    $students = json_decode( json_encode( $students ), true );
    foreach ( $students as $key => $s ) {
      $student_id = $s[ 'id' ];
      $present = 1;
      $sql2 = "select present from attendance where student_id=$student_id and att_date='$att_date' and period_id=$period_id";
      $result = DB::select( DB::raw( $sql2 ) );
      if ( count( $result ) > 0 ) {
        $present = $result[ 0 ]->present;
      }
      $students[ $key ][ 'present' ] = $present;
    }
    return view( 'attendance/attendance', compact( 'students', 'class', 'class_id', 'period_id', 'getclass' ) );
  }

  public function studentattendance(){
    $school_id = auth()->user()->school_id;
    $staff_id = auth()->user()->id;
    if(auth()->user()->user_types_id == 3){
      $sql = "select * from period order by period_name";
      $period = DB::select(DB::raw($sql));
      $weekday = array();
      $weekday[1] = "Monday";
      $weekday[2] = "Tuesday";
      $weekday[3] = "Wednesday";
      $weekday[4] = "Thursday";
      $weekday[5] = "Friday";
      $weekday[6] = "Saturday";
      $timetable = array();
      for($i=1;$i<7;$i++){
        $day = $weekday[$i];
        $timetable[$i]["weekday"] = $day;
        $timetable[$i]["weekday_id"] = $i;
        $j=0;
        foreach($period as $p){
          $period_id = $p->id;
          $timetable[$i]["data"][$j]["period_id"] = $p->id;
          $timetable[$i]["data"][$j]["period_name"] = $p->period_name;
          $timetable[$i]["data"][$j]["start_time"] = $p->start_time;
          $timetable[$i]["data"][$j]["end_time"] = $p->end_time;
          $timetable[$i]["data"][$j]["subject"] = "";
          $timetable[$i]["data"][$j]["class_name"] = "";
          $timetable[$i]["data"][$j]["division_name"] = "";
          $timetable[$i]["data"][$j]["class_id"] = 0;
          $sql = "select a.*,b.subject_name,c.class_name,d.division_name from timetable a,subject b,class_list c,division_list d where a.subject_id=b.id and a.class_id=c.id and a.division_id=d.id and a.school_id=$school_id and a.staff_id=$staff_id and a.weekday=$i and period_id=$period_id";
          $result = DB::select(DB::raw($sql));
          foreach($result as $res){
            $timetable[$i]["data"][$j]["subject"] = $res->subject_name;
            $timetable[$i]["data"][$j]["class_name"] = $timetable[$i]["data"][$j]["class_name"]. " " .$res->class_name.$res->division_name;
            $timetable[$i]["data"][$j]["division_name"] = "";
            $timetable[$i]["data"][$j]["class_id"] = $res->class_id;
          }
          $j++;
        }
      }
    }
    #echo "<pre>";print_r($timetable);echo "</pre>";die;
    return view('attendance/studentattendance',compact('period','weekday','timetable'));
  }

  public function saveattendance( Request $request ) {
    $school_id = auth()->user()->school_id;
    $academic_year_id = 1;
    $sql = "select id from academic_year where status = 'Open'";
    $result = DB::select( DB::raw( $sql ) );
    if ( count( $result ) > 0 ) {
      $academic_year_id = $result[ 0 ]->id;
    }
    $class_id = $request->class_id;
    $period_id = $request->period_id;
    $user_id = auth()->user()->id;
    $student_id = $request->student_id;
    $present = $request->present;
    $att_date = date( 'Y-m-d' );
    $sql = "delete from attendance where school_id=$school_id and class_id=$class_id and period_id=$period_id and att_date='$att_date'";
    DB::delete( DB::raw( $sql ) );
    $students = array();
    $i = 0;
    foreach ( $student_id as $key => $sid ) {
      $name = 'present_'.$sid;
      $pre = $request[ $name ];
      $pre = $pre == 'on' ? 1 : 0;
      $sql = "insert into attendance (school_id,academic_year_id,class_id,student_id,att_date,present,user_id,period_id) values($school_id,$academic_year_id,$class_id,$sid,'$att_date',$pre,$user_id,$period_id)";
      echo $sid.'<br>';
      DB::insert( DB::raw( $sql ) );
      if($pre == 0){
        $sql = "select a.token,b.full_name from device_token a,student b where a.student_id=b.id and a.student_id=$sid";
        $result = DB::select( DB::raw($sql));
        if(count($result)>0){
          $students[$i]["full_name"] = $result[0]->full_name;
          $students[$i]["token"] = $result[0]->token;
          $i++;
        }
      }
    }
    foreach ($students as $student) {
      $pushStatus = self::sendPushNotification($student["token"],$student["full_name"]);
    }
       return redirect( '/viewattendance/'.$class_id.'/'.$period_id )->with( 'success', 'Attendance  Saved Successfully' );
  }

  function sendPushNotification($registration_id,$full_name) {
    $SERVER_API_KEY = 'AAAAmOu-dS8:APA91bFLaJzeHHETEdQgyxwmO1m_X2yJ6c3BxYQUBrfSAFDiLsPExakl_cn-wOyZA09jBi5vNhzuw8nOALl3qZBqRgwZNziSWDj2NzJx_85Acz1PhUFM4mGcBYuuzEYFRg69hsLaH6vg';
    $data=array(
     "to"=>$registration_id,
     "notification"=>array(
       "title" => 'Adline School',
       "body" => $full_name." ".'is absent.',  
     )
   );
    $dataString = json_encode($data);
    $headers = [
     'Authorization: key=' . $SERVER_API_KEY,
     'Content-Type: application/json',
   ];
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
   $response = curl_exec($ch);
 }




 //////// ATENDANCE STAFF //////////

  public function attendancein( Request $request ) 
  {
    DB::table( 'attendance' )->insert( [
        'status'           =>   'Time In',
        'time_in'          =>   date( 'h:iA' ),
        'date'             =>   date( 'Y-m-d' ),
        'user_id'          =>   $request->log_id,
        'login_id'          =>   auth()->user()->id,
    ] );
    return redirect()->back()->with( 'success', 'Attendance Time In Successfully' );
  }

  public function userattendancein( Request $request ) 
  {
    DB::table( 'attendance' )->insert( [
        'status'           =>   'Time In',
        'time_in'          =>   $request->time_in,
        'date'             =>   $request->date,
        'user_id'          =>   $request->user_id,
    ] );
    return redirect()->back()->with( 'success', 'Attendance Time In Successfully' );
  }

  public function add_od( Request $request ) 
  {
    DB::table( 'staff_od' )->insert( [
      
        'open_ime'         =>   $request->open_ime,
        'close_time'       =>   $request->close_time,
        'date'             =>   $request->date,
        'user_id'          =>   $request->user_id,
        'login_id'         =>   auth()->user()->id,  
        'message'          =>   $request->message,
        'created_at'       => now(),
        'updated_at'       => now(),
    ] );
    return redirect()->back()->with( 'success', 'Add OD Successfully' );
  }

  public function apprulayer( Request $request ) 
  {
    DB::table( 'attendance' )->where( 'id', $request->row_id )->update( [
        'message'          => 'AppruLeaves',
    ] );
  $sql="update users set leavescound=leavescound-1 where id=$request->row_id";
      DB::update($sql);
    return redirect()->back()->with( 'success', 'Add Task Successfully ... !' );
  }

  public function attendanceins( Request $request ) 
  {
  $loginid =Auth::user()->id;
    DB::table( 'attendance' )->insert( [
        'date'             => $request->date,
        'time_in'          => '09:00PM',
        'status'           => 'Time In',
        'message'          => 'LeavesApply',
        'user_id'          => $loginid,
    ] );
  $leavescound = '1';
    $sql = "update users set leavescound = leavescound - $leavescound where id = '$loginid'";
    DB::update( DB::raw( $sql ) );

    }

  public function deleteattendance ( $id ) 
  {

    $deletedistricts = DB::table( 'attendance' )->where( 'id', $id )->delete();
    return redirect( '/attendances')->with( 'success', 'attendance Deleted Successfully' );
  }


  public function deleteapplayer( $id, $user_id ) 
  {
  $leavescound = '1';
    $sql = "DELETE FROM attendance WHERE id = '$id'";
    DB::update( DB::raw( $sql ) );
    $sql = "update users set leavescound = leavescound + $leavescound where id = '$user_id'";
    DB::update( DB::raw( $sql ) );
    return redirect()->back()->with( 'success', 'Leaves Apply Successfully ... !' );
  }


  public function attendanceout( Request $request ) 
  {
    $time_in = $request->time_in;
    $time_out = date( 'h:iA' );
    $datediff = strtotime( $time_out )  - strtotime( $time_in );
    $days = $datediff / ( 60 * 60 );
    $Hours = $days - 1;
    $Hours = number_format( ( float )$Hours, 2, '.', '' );

    DB::table( 'attendance' )->where( 'id', $request->att_id )->update( [
        'status'           =>   'Time Out',
        'date'             =>   date( 'Y-m-d' ),
        'time_out'         =>   date( 'h:iA' ),
        'hours'            => 	$Hours,
        'user_id'          =>   $request->log_id
    ] );
    return redirect()->back()->with( 'success', 'Attendance Time Out Successfully' );
  }

  public function userattendanceout( Request $request ) 
  {
  $hours ="";
    $time_in = $request->time_in;
    $time_out = $request->timeout;
    $datediff = strtotime( $time_out )  - strtotime( $time_in );
    $days = $datediff / ( 60 * 60 );
    $Hours = $days - 1;
    $Hours = number_format( ( float )$Hours, 2, '.', '' );

    DB::table( 'attendance' )->where( 'id', $request->att_id )->update( [
        'status'           =>   'Time Out',
        'date'             =>   date( 'Y-m-d' ),
        'time_out'         =>   $request->time_out,
        'hours'            => 	$hours,
        'user_id'          =>   $request->user_id,
    ] );
    return redirect()->back()->with( 'success', 'Attendance Time Out Successfully' );
  }

  

  public function attendances()
  {
        $date = date("Y-m-d");
        $presentstaffs = DB::table('attendance')->select('attendance.*','users.full_name')
      ->Join('users', 'users.id', '=', 'attendance.user_id')
      ->where('attendance.date',$date)
      ->orderBy('attendance.id','Asc')->get();
      $presentstaffs = json_decode( json_encode( $presentstaffs ), true );
      $hours = "";
      foreach ($presentstaffs as $key => $value) {
        if(!empty($value['hours'])){
          $hours =  $value['hours'];
        } else { 		
          $time_in = $value['time_in'];
          $time_out = date('h:iA');
          $datediff = strtotime($time_out)  - strtotime($time_in);

            $days = $datediff / (60 * 60);
          $hours = $days - 1; 
          $hours = number_format((float)$hours, 2, '.', '');
            }
            $presentstaffs[ $key ][ 'hours' ] = $hours;
        }
        $presentstaffs = json_decode( json_encode( $presentstaffs ) );
        
        $absentstaffs = DB::table('users')
            ->join('user_types', 'users.user_types_id', '=', 'user_types.id')
            ->where('users.status', 1) 
            ->select('users.*', 'user_types.user_types_name')
            ->get();
        
    $users = DB::table( 'users' )->where( 'status', '1' )->get();

    return view( 'admin/attendance/attendance', compact( 'presentstaffs','absentstaffs','users') );

  }

  public function attendancelist ( Request $request ) 
  {
    $from = $request->from;
    $to = $request->to;
    $attendances = DB::table( 'attendance' )->select( 'attendance.*', 'users.full_name', 'attendance.id as attendance_id' )
    ->Join( 'users', 'users.id', '=', 'attendance.user_id' )
    ->where( 'attendance.date', '>=', $from )->where( 'attendance.date', '<=', $to )
    ->orderBy( 'attendance.id', 'Asc' )->get();

    $user = DB::table( 'users' )->where( 'status', '1' )->get();

    return view( 'attendance/staff_attendance', compact( 'attendances','user' ) );
  }

  public function userattendances ( $id ) 
  {
    $from = date('Y-m-01');
    $to = date('Y-m-d');
    $attendances = DB::table( 'attendance' )->select( 'attendance.*', 'users.full_name', 'attendance.id as attendance_id' )
    ->Join( 'users', 'users.id', '=', 'attendance.user_id' )
    ->where( 'attendance.user_id', $id )
    ->where( 'attendance.date', '>=', $from )->where( 'attendance.date', '<=', $to )
    ->orderBy( 'attendance.date', 'Asc' )->get();

    return view( 'admin/attendance/userattendance', compact( 'attendances' ) );
  }


  public function userattendanceslist ($id,  Request $request ) 
  {
    $from = $request->from;
    $to = $request->to;
    $attendances = DB::table( 'attendance' )->select( 'attendance.*', 'users.full_name', 'attendance.id as attendance_id' )
    ->Join( 'users', 'users.id', '=', 'attendance.user_id' )
    ->where( 'attendance.user_id', $id )
    ->where( 'attendance.date', '>=', $from )->where( 'attendance.date', '<=', $to )
    ->orderBy( 'attendance.id', 'Asc' )->get();

    return view( 'admin/attendance/userattendance', compact( 'attendances' ) );
  }

  public function usersalery( $user_id ) 
  {
    $first_day_of_last_month = date( 'Y-m-01', strtotime( 'first day of last month' ) );
    $last_day_of_last_month = date( 'Y-m-31', strtotime( 'first day of last month' ) );

    $user = DB::table( 'users' )->where( 'id', $user_id )->get();
    $salary = '10000';

    $usersalery = DB::table( 'stafs_salery' )->where( 'user_id', $user_id )->get();
    $attendancecount = DB::table( 'attendance' )->where( 'user_id', $user_id )
    ->where( 'attendance.date', '>=', $first_day_of_last_month )
    ->where( 'attendance.date', '<=', $last_day_of_last_month )
    ->count();
    $workingday = DB::table( 'attendance' )
    ->where( 'date', '>=', $first_day_of_last_month )
    ->where( 'date', '<=', $last_day_of_last_month )
    ->groupBy( 'user_id' )->count();

    $usersalerys = $salary / $attendancecount * $workingday;
    $roundedsalery = round( $usersalerys, 0 );

    return view( 'attendance/user_salery', compact( 'usersalery', 'attendancecount', 'roundedsalery', 'workingday', 'user_id' ) );
  }

  public function addsalery( Request $request ) 
  {

    $sql = "select * from users where id = $request->user_id";
    $student = DB::select( DB::raw( $sql ) );
    $student = $student[ 0 ];
    $wallet = $student->wallet;

    DB::table( 'stafs_salery' )->insert( [
        'user_id'              =>   $request->user_id,
        'working_days'         =>   $request->working_days,
        'work_days'            =>   $request->work_days,
        'salery'               =>   $request->salery,
        'paid_date'            =>   $request->paid_date,
        'salary_month'         =>   $request->salary_month,
        'old_wallet'           =>   $wallet,
        'login_id'             =>   Auth::user()->id,
        
    ] );

    $userwallet = $wallet + $request->salery;
    DB::table( 'users' )->where( 'id', $request->user_id )->update( [
        'wallet'             =>   $userwallet,
    ] );

    return redirect()->back()->with( 'success', 'User Type Updated Successfully ... !' );
  }

public function viewsalary($month)
{
    $user = auth()->user();

    if ($user->user_types_id == '1' || $user->user_types_id == '2') {
        $sql = "SELECT a.*, b.full_name 
                FROM stafs_salery a 
                JOIN users b ON a.user_id = b.id 
                WHERE a.salary_month = ?";
        $salary = DB::select($sql, [$month]);
    } else {
        $sql = "SELECT a.*, b.full_name 
                FROM stafs_salery a 
                JOIN users b ON a.user_id = b.id 
                WHERE a.salary_month = ? AND a.user_id = ?";
        $salary = DB::select($sql, [$month, $user->id]);
    }

    $months = DB::select("SELECT DISTINCT salary_month FROM stafs_salery");

    $working_days = 0;
    $result = DB::select("
        SELECT COUNT(user_id) AS working_days 
        FROM attendance 
        WHERE date LIKE ? AND user_id = ?", ["$month%", $user->id]);

    if (!empty($result)) {
        $working_days = $result[0]->working_days;
    }

    return view('admin.attendance.salary', compact('salary', 'months', 'month', 'working_days'));
}

  public function userattendancesbyId ( $id, $from, $to ) {
    $attendances = DB::table( 'attendance' )->select( 'attendance.*', 'users.full_name', 'users.id as usersid', 'attendance.id as attendance_id' )
    ->Join( 'users', 'users.id', '=', 'attendance.user_id' )
    ->where( 'attendance.user_id', $id )
  ->where( 'attendance.date', '>=', $from )->where( 'attendance.date', '<=', $to )
    ->orderBy( 'attendance.id', 'Asc' )->get();

  $salary_month = date('Y-m', strtotime($from));
    $user = DB::table( 'users' )->where( 'id', $id )->first();		
    $working_days = DB::table( 'stafs_salery' )->where( 'salary_month', $salary_month )->where( 'user_id', $id )->first();


    return view( 'admin/attendance/user_attendance_report', compact( 'attendances','user','working_days') );
  }


  public function processsalary(Request $request ) {

        $mon = date('Y-m', strtotime(date('Y-m')." -1 month"));
		$present=0;
        $working_days = $request->total_days;

      $sql = "select user_id,count(user_id) as present from attendance where date like '$mon%' group by user_id";
      $result = DB::select( DB::raw( $sql ) );
      $sql="delete from stafs_salery where salary_month = '$mon'";
      DB::delete($sql);
      foreach($result as $res){
        $present = $res->present;
              if($present < $working_days) $present++;
        $user_id = $res->user_id;
        $sql2="select salery from users where id=$user_id";
        $result2 = DB::select( DB::raw( $sql2 ) );
        $salary = 0;
        if(count($result2)>0){
          $salary=$result2[0]->salery;
        }
        $pay=round($salary * $present / $working_days);
	   // Insert salary details
			DB::table('stafs_salery')->insert([
				'user_id' => $user_id,
				'working_days' => $working_days,
				'present' => $present,
				'salary' => $pay,
				'salary_month' => $mon,
			]);

			// Update wallet
			DB::table('users')
				->where('id', $user_id)
				->increment('wallet', $pay);
				
			DB::table('users')
				->where('id', $user_id)
				->increment('leavescound', 1);
      }
      return redirect()->back()->with( 'success', 'Salary processed Successfully' );
    }


  public function staff_attendance()
{
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d");
    $hour = date("H");

    // Determine session
    $session = ($hour >= 7 && $hour < 12) ? 'morning' : 'afternoon';

    $staffs = DB::table('users as u')
        ->leftJoin('attendance as a', function($join) use ($date) {
            $join->on('u.id', '=', 'a.user_id')
                 ->where('a.date', '=', $date);
        })
        ->where('u.status', 1)
        ->whereNotIn('u.user_types_id', [1])
        ->select('u.id', 'u.full_name', 'a.time_in', 'a.time_out')
        ->when($session == 'morning', function($query) {
            return $query->orderByRaw('CASE WHEN a.time_in IS NULL THEN 0 ELSE 1 END ASC');
        })
        ->when($session == 'afternoon', function($query) {
            return $query->orderByRaw('CASE WHEN a.time_in IS NOT NULL AND a.time_out IS NULL THEN 0 ELSE 1 END ASC');
        })
        ->orderBy('u.full_name', 'asc')
        ->get();

    return view('attendance.view_staff_attendance', compact('staffs', 'date', 'session'));
}
  
  public function late_staff()
  {
    $Late_staff = DB::table('staff_late_time')->select('staff_late_time.*','users.full_name')
      ->Join('users', 'users.id', '=', 'staff_late_time.user_id')
      ->orderBy('staff_late_time.id','Asc')->get();

    return view('attendance/late_staff', compact('Late_staff'));
  }


  public function usersalary($from, $to)
  {
      $month = date('Y-m', strtotime($from));

      $users = DB::table('users')
          ->where('status', 1)
          ->get();

      $salaryData = [];

      $workingDaysRow = DB::table('stafs_salery')
          ->where('salary_month', $month)
          ->first();

      $working_days = $workingDaysRow->working_days ?? 0;

      foreach ($users as $u) {

          $present = DB::table('attendance')
              ->where('user_id', $u->id)
              ->whereBetween('date', [$from, $to])
              ->count();

          $salary = DB::table('stafs_salery')
              ->where('user_id', $u->id)
              ->where('salary_month', $month)
              ->first();

          $totalSalary = $salary->salary ?? 0;
          $paidAmount  = $salary->paid_amount ?? 0;
          $balance     = $totalSalary - $paidAmount;

          $salaryData[] = (object)[
              'id' => $salary->id ?? null,
              'user_id' => $u->id,
              'name' => $u->full_name,
              'phone' => $u->mobile_number ?? '',
              'present' => $present,
              'salary' => $totalSalary,
              'paid_amount' => $paidAmount,
              'balance' => $balance,
              'salary_month' => $month
          ];
      }

      return view('admin.attendance.usersalary', compact(
          'salaryData',
          'users',
          'from',
          'to',
          'working_days'   
      ));
  }

  public function userAttendanceFilter(Request $request)
  {
      $userId = $request->user_id;
      $from   = $request->from;
      $to     = $request->to;

      $attendance = DB::table('attendance')
          ->where('user_id', $userId)
          ->whereBetween('date', [$from, $to])
          ->orderBy('date', 'ASC')
          ->get();

      $user = DB::table('users')->where('id', $userId)->first();

      return view('admin.attendance.user_daily_attendance', compact(
          'attendance',
          'user',
          'from',
          'to'
      ));
  }

  public function paysalary(Request $request){
		$amount = 1 * $request->paid_amount;
		DB::table('salary_payments')->insert([
			'project_id'           =>   0,
			'old_balance'          =>   $request->old_balance,
			'paid_amound'          =>   $amount,
			'new_balance'          =>   $request->new_balance,
			'payment_method'       =>   $request->payment_method,
			'paid_date'            =>   $request->paid_date,
			'expense_type'         =>   1,
			'credit_or_debit'      =>   'OutPayment',
			'reason'               =>   "",
			'log_id'               =>   Auth::user()->id,
			'employee_id'          =>   $request->employee_id,
		]);
		$month=$request->month;
		$id=$request->id;
		$amount = $request->paid_amount;

		$user = DB::table('users')->where('id', $request->employee_id)->first();

		$newWallet = $user->wallet - $amount;

		DB::table('users')->where('id', $request->employee_id)->update([
			'wallet' => $newWallet
		]);

		$sql="update stafs_salery set paid_amount = paid_amount + $amount where id = $id";
		DB::update($sql);
		return redirect()->back()->with('success', 'Salary paid successfully');
	}

}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Artisan;
use Log;
use Auth;
use Session;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
 public function __construct()
  {
    $this->middleware( 'auth' );
  }
 

    public function index(){

   

        $disk = Storage::disk(config('laravel-backup.backup.destination.disks'));
        $files = $disk->files("MiMart");
        $backups = [];
        foreach ($files as $k => $f) {
         if (substr($f, -4) == '.zip' && $disk->exists($f)) {
           $backups[] = [
             'file_path' => $f,
             'file_name' => str_replace(config('laravel-backup.backup.name') . '/', '', $f),
             'file_size' => $disk->size($f),
             'last_modified' => $disk->lastModified($f),
           ];
         }
       }
       $backups = array_reverse($backups);
       return view("admin.backup.backups")->with(compact('backups'));
     }

     public static function humanFileSize($size,$unit="") {
      if( (!$unit && $size >= 1<<30) || $unit == "GB")
       return number_format($size/(1<<30),2)."GB";
     if( (!$unit && $size >= 1<<20) || $unit == "MB")
       return number_format($size/(1<<20),2)."MB";
     if( (!$unit && $size >= 1<<10) || $unit == "KB")
       return number_format($size/(1<<10),2)."KB";
     return number_format($size)." bytes";
    }

    public function create()
    {
      try {
       /* only database backup*/
       Artisan::call('backup:run --only-db');
       /* all backup */
       /* Artisan::call('backup:run'); */
       $output = Artisan::output();
       $cookie_name = "backup";
       $cookie_value = "1";
       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
       //Log::info("Backpack\BackupManager -- new backup started \r\n" . $output);
       session()->flash('success', 'Successfully created backup!');
       return redirect( '/admin/backup')->with( 'success', 'Backup Created Successfully' );
     } catch (Exception $e) {
       session()->flash('danger', $e->getMessage());
       return redirect()->back();
     }
    }

    public function download($file_name) {
      $file = config('laravel-backup.backup.name') .'/MiMart/'. $file_name;
      $disk = Storage::disk(config('laravel-backup.backup.destination.disks'));

      if ($disk->exists($file)) {
        $fs = Storage::disk(config('laravel-backup.backup.destination.disks'))->getDriver();
        $stream = $fs->readStream($file);

        return \Response::stream(function () use ($stream) {
          fpassthru($stream);
        }, 200, [
          "Content-Type" => $fs->getMimetype($file),
          "Content-Length" => $fs->getSize($file),
          "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
        ]);
      } else {
        abort(404, "Backup file doesn't exist.");
      }
    }

    public function delete($file_name){
      $disk = Storage::disk(config('laravel-backup.backup.destination.disks'));
      if ($disk->exists(config('laravel-backup.backup.name') . '/MiMart/' . $file_name)) {
       $disk->delete(config('laravel-backup.backup.name') . '/MiMart/' . $file_name);
       session()->flash('delete', 'Successfully deleted backup!');
       return redirect()->back();
     } else {
       abort(404, "Backup file doesn't exist.");
     }
    }
}

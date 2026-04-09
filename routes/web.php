<?php
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('', [App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('home', [App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('projects', [App\Http\Controllers\MainController::class, 'projects'])->name('projects');
Route::get('about_us', [App\Http\Controllers\MainController::class, 'about_us'])->name('about_us');
Route::get('gallery', [App\Http\Controllers\MainController::class, 'gallery'])->name('gallery');
Route::get('testimonial', [App\Http\Controllers\MainController::class, 'testimonial'])->name('testimonial');
Route::get('contactus', [App\Http\Controllers\MainController::class, 'contactus'])->name('contactus');
ROUTE::post('contactdetails', [App\Http\Controllers\MainController::class, 'contactdetails'])->name('contactdetails');
Route::get('project/{id}', [App\Http\Controllers\MainController::class, 'project'])->name('project');
Route::get('projects/{id}', [App\Http\Controllers\MainController::class, 'projects'])->name('projects');



//admin

Route::get('admin', [App\Http\Controllers\MainController::class, 'admin'])->name('admin');

Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('admin/changepassword',[App\Http\Controllers\Admin\UsersController::class, 'changepassword'])->name('changepassword');
Route::get('admin/profile', [App\Http\Controllers\Admin\UsersController::class, 'profile'])->name('profile');
Route::post('/updateprofile', [App\Http\Controllers\Admin\UsersController::class, 'updateprofile'])->name('updateprofile');




Route::get('admin/website-settings',[App\Http\Controllers\Admin\SettingsController::class, 'web_setting'])->name('web_setting');
Route::post('admin/setting_update',[App\Http\Controllers\Admin\SettingsController::class, 'setting_update'])->name('setting_update');









Route::get('admin/contact',[App\Http\Controllers\Admin\UsersController::class, 'contact'])->name('contact');

Route::get('admin/addproject', [App\Http\Controllers\Admin\ProductsController::class, 'addproject'])->name('addproject');

Route::get('admin/projects/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'projects'])->name('projects');
Route::get('admin/project/viewproducts', [App\Http\Controllers\Admin\ProductsController::class, 'project'])->name('project');
Route::post('saveproject', [App\Http\Controllers\Admin\ProductsController::class, 'saveproject'])->name('saveproject');
Route::post('saveprojectimage', [App\Http\Controllers\Admin\ProductsController::class, 'saveprojectimage'])->name('saveprojectimage');


Route::get('admin/editproject/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'editproject'])->name('editproject');

ROUTE::post('updateproject', [App\Http\Controllers\Admin\ProductsController::class, 'updateproject'])->name('updateproject');



Route::get('/dropproject/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'dropproject'])->name('dropproject');

Route::get('admin/pendingorder', [App\Http\Controllers\Admin\ProductsController::class, 'pendingorder'])->name('pendingorder');
Route::get('admin/completedorder', [App\Http\Controllers\Admin\ProductsController::class, 'completedorder'])->name('completedorder');
ROUTE::get('deleteimage/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'deleteimage'])->name('deleteimage');


ROUTE::post('addcategory', [App\Http\Controllers\Admin\CategoryController::class, 'AddCategory'])->name('addcategory');
ROUTE::post('editcategory', [App\Http\Controllers\Admin\CategoryController::class, 'EditCategory'])->name('editcategory');
ROUTE::post('updatecategory', [App\Http\Controllers\Admin\CategoryController::class, 'updatecategory'])->name('updatecategory');



Route::get('admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'category'])->name('category');

ROUTE::get('/dashboard', [App\Http\Controllers\Admin\BackupController::class, 'index'])->name('dashboard');


ROUTE::get('/admin/backup', [App\Http\Controllers\Admin\BackupController::class, 'index'])->name('backup');
ROUTE::get('/admin/backup/create', [App\Http\Controllers\Admin\BackupController::class, 'create'])->name('create');
ROUTE::get('/admin/backup/download/{file_name}', [App\Http\Controllers\Admin\BackupController::class, 'download'])->name('download');
ROUTE::get('/admin/backup/delete/{file_name}', [App\Http\Controllers\Admin\BackupController::class, 'delete'])->name('delete');


Route::get('logout', [App\Http\Controllers\Admin\UsersController::class, 'logout'])->name('logout');


Route::get('/admin/banners',[App\Http\Controllers\Admin\BannersController::class, 'banners'])->name('banners');
Route::post('addbanner',[App\Http\Controllers\Admin\BannersController::class, 'addbanner'])->name('addbanner');
Route::post('/updatebanners',[App\Http\Controllers\Admin\BannersController::class, 'updatebanners'])->name('updatebanners');
Route::get('deletebanner/{id}',[App\Http\Controllers\Admin\BannersController::class, 'deletebanner'])->name('deletebanner');
Route::get('/deletebanners/{id}',[App\Http\Controllers\Admin\BannersController::class, 'deletebanners'])->name('deletebanners');









Route::post('/updatedetails',[App\Http\Controllers\MainController::class, 'updatedetails'])->name('updatedetails');





Route::get('slider', [App\Http\Controllers\MainController::class, 'slider'])->name('slider');
Route::get('admin/category/{id}', [App\Http\Controllers\MainController::class, 'categoryproducts'])->name('categoryproduct');
Route::post('saveorder', [App\Http\Controllers\MainController::class, 'saveorder'])->name('saveorder');


Route::get('admin/usertype', [App\Http\Controllers\Admin\UsersController::class, 'usertype'])->name('usertype');
Route::post('/updateuser_type', [App\Http\Controllers\Admin\UsersController::class, 'updateuser_type'])->name('updateuser_type');
Route::post('/editusertypepermission', [App\Http\Controllers\Admin\UsersController::class, 'editusertypepermission'])->name('editusertypepermission');
Route::post('/adduser_type', [App\Http\Controllers\Admin\UsersController::class, 'adduser_type'])->name('adduser_type');
Route::post('/adduser', [App\Http\Controllers\Admin\UsersController::class, 'adduser'])->name('adduser');
Route::post('/updateuser', [App\Http\Controllers\Admin\UsersController::class, 'updateuser'])->name('updateuser');
Route::post('/update_permission', [App\Http\Controllers\Admin\UsersController::class, 'update_permission'])->name('update_permission');

ROUTE::get('admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'user'])->name('user');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('users', [App\Http\Controllers\Admin\UsersController::class, 'index']);

    Route::get('users/edit/{id}', [App\Http\Controllers\Admin\UsersController::class, 'edit']);
    Route::post('users/update/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update']);
    Route::post('admin/users/update', [App\Http\Controllers\Admin\UsersController::class, 'update']);
    Route::get('users/delete/{id}', [App\Http\Controllers\Admin\UsersController::class, 'delete']);
  


});


////////// ATTENDANCE ////////////////////////

Route::get('admin/attendances', [App\Http\Controllers\Admin\AttendanceController::class, 'attendances'])->name('attendances');
Route::post('/attendancelist', [App\Http\Controllers\Admin\AttendanceController::class, 'attendancelist'])->name('attendancelist');

Route::get('/staff_attendance', [App\Http\Controllers\Admin\AttendanceController::class, 'staff_attendance'])->name('staff_attendance');
Route::get('admin/usersalary/{from}/{to}', [App\Http\Controllers\Admin\AttendanceController::class, 'usersalary']);
Route::get('admin/usersalary/filter', [App\Http\Controllers\Admin\AttendanceController::class, 'userAttendanceFilter']);


Route::post('/attendanceins', [App\Http\Controllers\Admin\AttendanceController::class, 'attendanceins'])->name('attendanceins');
Route::get('/apprulayer', [App\Http\Controllers\Admin\AttendanceController::class, 'apprulayer'])->name('apprulayer');
Route::post('/attendancein', [App\Http\Controllers\Admin\AttendanceController::class, 'attendancein'])->name('attendancein');
Route::post('/userattendancein', [App\Http\Controllers\Admin\AttendanceController::class, 'userattendancein'])->name('userattendancein');
Route::post('/attendanceout', [App\Http\Controllers\Admin\AttendanceController::class, 'attendanceout'])->name('attendanceout');
Route::post('/userattendanceout', [App\Http\Controllers\Admin\AttendanceController::class, 'userattendanceout'])->name('userattendanceout');
Route::post('/processsalary', [App\Http\Controllers\Admin\AttendanceController::class, 'processsalary'])->name('processsalary');
Route::get('admin/viewsalary/{from}/{to}', [App\Http\Controllers\Admin\AttendanceController::class, 'viewsalary'])->name('viewsalary');
Route::get('admin/viewsalary/{year}', [App\Http\Controllers\Admin\AttendanceController::class, 'viewsalary'])->name('viewsalary');

Route::get('/leaves', [App\Http\Controllers\Admin\AttendanceController::class, 'leaves'])->name('leaves');
Route::get('/deleteapplayer/{id}/{user_id}', [App\Http\Controllers\Admin\AttendanceController::class, 'deleteapplayer'])->name('deleteapplayer');
Route::get('admin/userattendances/{id}/{from}/{to}', [App\Http\Controllers\Admin\AttendanceController::class, 'userattendancesbyId'])->name('userattendances');
Route::get('admin/userattendances/{id}', [App\Http\Controllers\Admin\AttendanceController::class, 'userattendances'])->name('userattendances');
Route::post('admin/userattendanceslist/{id}', [App\Http\Controllers\Admin\AttendanceController::class, 'userattendanceslist'])->name('userattendanceslist');

Route::get('/deleteattendance/{id}', [App\Http\Controllers\Admin\AttendanceController::class, 'deleteattendance'])->name('deleteattendance');
Route::post('/paysalary', [App\Http\Controllers\Admin\AttendanceController::class, 'paysalary'])->name('paysalary');

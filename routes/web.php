<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\FileDoctorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/m', function () {
    return view('table-data');
});

//Hospitals Route
Route::get('hospital',[HospitalController::class,'index'])->name('show');
Route::post('hospital/add',[HospitalController::class,'store'])->name('hospital_add');
Route::post('hospital/edit',[HospitalController::class,'update'])->name('hospital_edit');
Route::post('hospital/delete',[HospitalController::class,'destroy'])->name('hospital_delete');
Route::post('hospital/delete/all',[HospitalController::class,'hospital_delete_checked'])->name('delete_all');
Route::post('hospital/edit_status',[HospitalController::class,'edit_status'])->name('edit_status');
Route::post('hospital/edit_status_online',[HospitalController::class,'edit_status_online'])->name('edit_status_online');
Route::get('profile/{id}',[HospitalController::class,'index_profile'])->name('hospital_profile');
Route::post('hospital/import',[HospitalController::class,'importHospital'])->name('hospital_import');
Route::post('services/import',[HospitalController::class,'importServices'])->name('services_import');




//Services Route
Route::post('service_add',[ServiceController::class,'store'])->name('service_add');
Route::post('service_delete',[ServiceController::class,'destroy'])->name('service_delete');
Route::post('service_edit',[ServiceController::class,'update'])->name('service_edit');



//Attachments Route
Route::post('/save_attachment',[AttachmentController::class,'store'])->name('save_attachment');
Route::post('/delete_attachment',[AttachmentController::class,'destroy'])->name('delete_attachment');


//Contract Route
Route::post('/save_contract',[ContractController::class,'store'])->name('save_contract');
Route::post('/delete_contract',[ContractController::class,'destroy'])->name('delete_contract');



//DoctorList Route
Route::post('/save_list',[FileDoctorController::class,'store'])->name('save_list');
Route::post('/delete_list',[FileDoctorController::class,'destroy'])->name('delete_list');
Route::get('/View_file/{id}/{name}',[FileDoctorController::class,'open_file']);


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('index');
Route::get('/{page}', 'AdminController@index');



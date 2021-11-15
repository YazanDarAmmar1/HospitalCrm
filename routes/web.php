<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\FileDoctorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\PackageTypeController;
use App\Http\Controllers\AllCardController;
use App\Http\Controllers\CardProfile;

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


//Categories Route
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::post('/category_add',[CategoryController::class,'store'])->name('category_add');
Route::post('/category_delete',[CategoryController::class,'destroy'])->name('category_delete');
Route::post('/category_edit',[CategoryController::class,'update'])->name('category_edit');
Route::post('/category_import',[CategoryController::class,'importCategory'])->name('category_import');


//CardType Route
Route::get('card/type',[CardTypeController::class,'index'])->name('show_cardType');
Route::post('card/type/add',[CardTypeController::class,'store'])->name('show_cardType_add');
Route::post('card/type/update',[CardTypeController::class,'update'])->name('show_cardType_update');
Route::post('card/type/delete',[CardTypeController::class,'destroy'])->name('show_cardType_delete');

//PackageType Route
Route::get('card/Package',[PackageTypeController::class,'index'])->name('show_PackageType');
Route::post('card/Package/add',[PackageTypeController::class,'store'])->name('show_PackageType_add');
Route::post('card/Package/edit',[PackageTypeController::class,'update'])->name('show_PackageType_edit');
Route::post('card/Package/delete',[PackageTypeController::class,'destroy'])->name('show_PackageType_delete');


//AddCard Route
Route::get('add_cards',[CardController::class,'index'])->name('add_cards');
Route::post('add_cards_user',[CardController::class,'store'])->name('add_cards_user');

//AllCard Route
Route::get('show_cards',[AllCardController::class,'index'])->name('show_cards');
Route::post('delete/card',[AllCardController::class,'destroy'])->name('delete_card');
Route::post('status/card/update',[AllCardController::class,'update'])->name('update_status');
Route::post('card/import/customer',[AllCardController::class,'importCustomer'])->name('card_customer_import');


//ProfileCard Route
Route::get('/profile/{id}',[CardProfile::class,'index'])->name('profile_show');
Route::post('/profile/edit',[CardProfile::class,'update'])->name('profile_update');
Route::get('/profile/invoice/{id}',[CardProfile::class,'invoice_index'])->name('profile_invoice_show');
Route::get('/profile/invoice/all/{id}',[CardProfile::class,'all_invoice_index'])->name('profile_invoice_show_all');
Route::get('/export-pdf', [CardProfile::class, 'exportPdf'])->name('pdf');
Route::get('/single/card/{id}{id2}', [CardProfile::class, 'printToPDF'])->name('single_card');
Route::get('/single/card/invoices/{id}', [CardProfile::class, 'printToPDF_invoices'])->name('single_invoice_pdf');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});

//Localization
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/', function()
    {
        return View::make('home');
    });
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('index');
Route::get('/{page}', 'AdminController@index');



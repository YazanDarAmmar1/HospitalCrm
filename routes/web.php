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
use App\Http\Controllers\HospitalDirectoryController;
use App\Http\Controllers\ApplyCardController;
use App\Http\Controllers\SearchCardController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\ProviderController;

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

// livewire
Route::get('/index_m',function (){
    return view('index-mobile_main');
});



//Hospitals Route
Route::get('hospital/{id}',[HospitalController::class,'index'])->name('show');
Route::post('hospital/add',[HospitalController::class,'store'])->name('hospital_add');
Route::post('hospital/edit',[HospitalController::class,'update'])->name('hospital_edit');
Route::post('hospital/delete',[HospitalController::class,'destroy'])->name('hospital_delete');
Route::post('hospital/delete/all',[HospitalController::class,'hospital_delete_checked'])->name('delete_all');
Route::post('hospital/edit_status',[HospitalController::class,'edit_status'])->name('edit_status');
Route::post('hospital/edit_status_online',[HospitalController::class,'edit_status_online'])->name('edit_status_online');
Route::get('profile_hospital/{id}',[HospitalController::class,'index_profile'])->name('hospital_profile');
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
Route::get('package/{id}',[CardController::class,'getproducts']);
Route::post('add_cards_user_more',[CardController::class,'store_more'])->name('add_cards_user_more');
Route::post('add_cards_user_more_plus',[CardController::class,'store_more_plus'])->name('add_cards_user_more_plus');

//AllCard Route
Route::get('show_cards',[AllCardController::class,'index'])->name('show_cards');
Route::get('show_cards_plus',[AllCardController::class,'index_plus'])->name('show_cards_plus');
Route::get('show_cards_draft/{status?}',[AllCardController::class,'index_draft'])->name('show_cards_draft');
Route::post('delete/card',[AllCardController::class,'destroy'])->name('delete_card');
Route::post('delete/card/plus',[AllCardController::class,'destroy_plus'])->name('delete_card_plus');
Route::post('status/card/update',[AllCardController::class,'update'])->name('update_status');
Route::post('card/import/customer',[AllCardController::class,'importCustomer'])->name('card_customer_import');


//ProfileCard Route
Route::get('/profile/{id}',[CardProfile::class,'index'])->name('profile_show');
Route::get('/profile_plus/{id}',[CardProfile::class,'index_plus'])->name('profile_show_plus');
Route::post('/profile/edit',[CardProfile::class,'update'])->name('profile_update');
Route::post('/profile/edit/plus',[CardProfile::class,'update_plus'])->name('profile_update_plus');
Route::get('/profile/invoice/{id}',[CardProfile::class,'invoice_index'])->name('profile_invoice_show');
Route::get('/profile/invoice/all/{id}',[CardProfile::class,'all_invoice_index'])->name('profile_invoice_show_all');
Route::get('/profile/invoice/plus/{id}',[CardProfile::class,'all_invoice_index_plus'])->name('profile_invoice_show_all_plus');
Route::get('/profile/invoice/{id}',[CardProfile::class,'invoice_index_print'])->name('invoice_index_print');
Route::get('/profile/plus/{id}',[CardProfile::class,'invoice_index_print_plus'])->name('invoice_index_print_plus');
Route::get('/export-pdf', [CardProfile::class, 'exportPdf'])->name('pdf');
Route::get('/single/card/{id}{id2}', [CardProfile::class, 'printToPDF'])->name('single_card');
Route::get('/single/card/plus/{id}{id2}', [CardProfile::class, 'printToPDF_plus'])->name('single_card_plus');
Route::get('/single/card/invoices/{id}', [CardProfile::class, 'printToPDF_invoices'])->name('single_invoice_pdf');

//ajax update
Route::get('profile/package_prices/{id}/{id2}',[CardProfile::class,'package_prices'])->name('package.prices.profile');
Route::get('profile/package_prices_plus/{id}/{id2}',[CardProfile::class,'package_prices_plus'])->name('package.prices.profile.plus');
Route::get('profile/package_name/{id}/{id2}',[CardProfile::class,'package_name'])->name('package.prices.name');
Route::get('profile/package_name_plus/{id}/{id2}',[CardProfile::class,'package_name_plus'])->name('package.prices.name.plus');
Route::get('profile/balance/{id}/{id2}',[CardProfile::class,'balance'])->name('package.prices.balance');
Route::get('profile/balance_plus/{id}/{id2}',[CardProfile::class,'balance_plus'])->name('package.prices.balance');
Route::get('profile/delivery/{id}/{id2}/{id3}',[CardProfile::class,'delivery'])->name('package.prices.delivery');
Route::get('profile/delivery_plus/{id}/{id2}/{id3}',[CardProfile::class,'delivery_plus'])->name('package.prices.delivery.plus');
Route::get('profile/editPackagePrice/{id}/{id2}',[CardProfile::class,'editPackagePrice'])->name('package.prices.editPackagePrice');
Route::get('profile/editPackagePrice_plus/{id}/{id2}',[CardProfile::class,'editPackagePricePlus'])->name('package.prices.editPackagePrice.plus');

//Report Data
Route::get('card_report',[reportController::class,'index'])->name('report.card');
Route::get('agent_customer',[reportController::class,'agentcustomer'])->name('report.agent_customer');
Route::post('card_report',[reportController::class,'reportCard'])->name('report.card.search');

//Home Slider
Route::get('/home_slider',[\App\Http\Controllers\HomeController::class,'home_slider'])->name('home.slider');
Route::post('/home_slider_add',[\App\Http\Controllers\HomeController::class,'slider_store'])->name('home.slider.store');
Route::post('/home_slider_delete',[\App\Http\Controllers\HomeController::class,'destroy'])->name('home.slider.delete');

//Providers
Route::get('category/provider',[ProviderController::class,'index'])->name('category.provider');
Route::post('category/provider/add',[ProviderController::class,'store'])->name('category.provider.add');
Route::post('category/provider/edit',[ProviderController::class,'update'])->name('category.provider.edit');
Route::post('category/provider/delete',[ProviderController::class,'destroy'])->name('category.provider.delete');

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
    })->name('home_page');
    // Hospital Directory
    Route::get('hospital/directory',[HospitalDirectoryController::class,'index'])->name('hospital.directory');
    Route::get('hospital/directory/plus',[HospitalDirectoryController::class,'index_plus'])->name('hospital.directory.plus');
    Route::get('hospital/category/{id}',[HospitalDirectoryController::class,'hospital_category'])->name('hospital.category.show');
    Route::post('hospital/directory/search',[HospitalDirectoryController::class,'hospital_search'])->name('hospital.directory.search');
    //search ajax
    Route::get('/typeahead_autocomplete/action', [HospitalDirectoryController::class, 'action'])->name('typeahead_autocomplete.action');
    //Hospital Profile
    Route::get('hospital/directory/profile/{id}',[HospitalDirectoryController::class,'hospital_profile'])->name('hospital.directory.profile');
    // Apply Card
    Route::get('public/apply/{id?}',[ApplyCardController::class,'index'])->name('apply.view')->where('id', '[0-9]+');
    Route::post('public/apply/add',[ApplyCardController::class,'store'])->name('apply.add');
    // Search Card
    Route::get('public/search/card',[SearchCardController::class,'index'])->name('search.card');
    Route::post('public/search/card/cpr',[SearchCardController::class,'search'])->name('search.card.cpr');
    Route::get('/about-us',function (){
        return view('aboutus');
    })->name('about-us');
    Route::get('/contact-us',function (){
        return view('contact-us');
    })->name('contact-us');
    Route::get('/services',function (){
        return view('services');
    })->name('services.home');
    // Read All Notification  Card
        Route::get('read_all_notification',[ApplyCardController::class,'readAllNotification'])->name('read.all.notification');
        // index - mobile
    Route::get('home_mobile',function (){
        return view('index-mobile');
    });

    Route::get('home_mobile_plus',function (){
        return view('index-mobile-plus');
    })->name('index-mobile-plus');

});


Auth::routes();
Route::get('/dashboard/login', 'HomeController@index')->name('index');
Route::get('/{page}', 'AdminController@index');




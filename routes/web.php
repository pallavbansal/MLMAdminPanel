<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\MonitoringProviderController;
use App\Http\Controllers\SystemPanelController;

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
    return view('welcome');
});

// Route::get('/admin/AllRegisteredUsers', function () {
//     return view('admin.AllRegisteredUsers');
// });

Route::get('/admin/AllOrders', function () {
    return view('admin.AllOrders');
});

Route::get('/admin/Register', function () {
    return view('admin.RegisterFirstLevelAccount');
});



Route::get('/admin/UploadProducts', function () {
    return view('admin.UploadProducts');
});

Route::get('/admin/UploadEquipements', function () {
    return view('admin.UploadEquipements');
});

Route::get('/admin/UploadMonitoringProvider','App\Http\Controllers\CompanyController@show');
Route::get('/admin/DeleteMonitoringProvider/{id}','App\Http\Controllers\CompanyController@destroy');
Route::post('/admin/CreateMonitoringProvider','App\Http\Controllers\CompanyController@store');

Route::get('/admin/UploadPackageType','App\Http\Controllers\PackageController@show');
Route::get('/admin/DeletePackageType/{id}','App\Http\Controllers\PackageController@destroy');
Route::post('/admin/CreatePackageType','App\Http\Controllers\PackageController@store');

Route::get('/admin/UploadSystemPanel','App\Http\Controllers\SystemPanelController@show');
Route::get('/admin/DeleteSystemPanel/{id}','App\Http\Controllers\SystemPanelController@destroy');
Route::post('/admin/CreateSystemPanel','App\Http\Controllers\SystemPanelController@store');

Route::get('/admin/UploadEquipements','App\Http\Controllers\EquipmentController@show');
Route::get('/admin/DeleteEquipements/{id}','App\Http\Controllers\EquipmentController@destroy');
Route::post('/admin/CreateEquipements','App\Http\Controllers\EquipmentController@store');

Route::get('/admin/Cat1Orders','App\Http\Controllers\Cat1OrderController@show');

Route::get('/admin/AllRegisteredUsers','App\Http\Controllers\RegisteredUserController@show');

Route::get('/admin/UploadCategories','App\Http\Controllers\CategoryController@show');
Route::get('/admin/DeleteCategories/{id}','App\Http\Controllers\CategoryController@destroy');
Route::post('/admin/CreateCategory','App\Http\Controllers\CategoryController@store');

Route::get('/admin/ParentCategories','App\Http\Controllers\ParentCategoryController@show');
Route::get('/admin/DeleteParentCategory/{id}','App\Http\Controllers\ParentCategoryController@destroy');
Route::post('/admin/CreateParentCategory','App\Http\Controllers\ParentCategoryController@store');

Route::get('/admin/UploadProducts','App\Http\Controllers\ProductController@show');
Route::get('/admin/DeleteProduct/{id}','App\Http\Controllers\ProductController@destroy');
Route::post('/admin/CreateProduct','App\Http\Controllers\ProductController@store');

// Route::get('/admin/AllRegisteredUsers', function () {
//     return view('admin.AllRegisteredUsers');
// });
// Route::get('/admin/UploadPackageType', function () {
//     return view('admin.UploadPackageType');
// });

// Route::get('/admin/UploadSystemPanel', function () {
//     return view('admin.UploadSystemPanel');
// });

Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});
Route::post('CreateCategory',[CategoryController::class,'UploadCategories'])->name('CreateCategory');
Route::post('CreateProduct',[ProductController::class,'UploadProducts'])->name('CreateProduct');
Route::post('CreateEquipements',[EquipmentController::class,'UploadEquipements'])->name('CreateEquipements');
Route::post('CreatePackageType',[PackageController::class,'UploadPackageType'])->name('CreatePackageType');
Route::post('CreateMonitoringProvider',[MonitoringProviderController::class,'UploadMonitoringProvider'])->name('CreateMonitoringProvider');
Route::post('CreateSystemPanel',[SystemPanelController::class,'UploadSystemPanel'])->name('CreateSystemPanel');
Route::post('CreateParentCategory',[CategoryController::class,'ParentCategories'])->name('CreateParentCategory');
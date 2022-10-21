<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\CityController;
use App\Http\Controllers\Backend\Setup\StateController;
use App\Http\Controllers\Backend\Setup\AddressController;



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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('register');

Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

// User management all routes

Route::prefix('users')->group(function(){

    Route::get('/view',[UserController::class,'Show'])->name('user.index');
    Route::get('/new',[UserController::class,'Create'])->name('user.add');
    Route::post('/store',[UserController::class,'Store'])->name('user.store');
    Route::get('/edit/{id}',[UserController::class,'Edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'Update'])->name('user.update');
    Route::get('/delete/{id}',[UserController::class,'Delete'])->name('user.delete');

});

// Profile management all routes

Route::prefix('profile')->group(function(){

    Route::get('/',[ProfileController::class,'index'])->name('profile.index');
    Route::get('/edit',[ProfileController::class,'Create'])->name('profile.edit');
    Route::post('/store',[ProfileController::class,'Store'])->name('profile.store');
    //Route::get('/edit/{id}',[ProfileController::class,'Edit'])->name('profile.edit');
    Route::post('/update/{id}',[ProfileController::class,'Update'])->name('profile.update');
    Route::get('/delete/{id}',[ProfileController::class,'Delete'])->name('profile.delete');



});


// Setup management all routes

Route::prefix('setup')->group(function(){

    // Address Controller
    
    Route::get('cities', [CityController::class, 'index'])->name('cities.index');
    Route::get('states', [StateController::class, 'index'])->name('states.index');

    Route::get('address/view',[AddressController::class,'index'])->name('address.index');
    Route::get('address/new',[AddressController::class,'add'])->name('address.add');
    Route::post('address/store',[AddressController::class,'store'])->name('address.store');
    Route::get('address/edit/{id}',[AddressController::class,'edit'])->name('address.edit');
    Route::post('address/update/{id}',[AddressController::class,'update'])->name('address.update');
    Route::get('address/delete/{id}',[AddressController::class,'delete'])->name('address.delete');

    // University Controller
    
    Route::get('university/view',[UniversityController::class,'index'])->name('university.index');
    // Route::get('university/new',[UniversityController::class,'Create'])->name('university.add');
    // Route::post('university/store',[UniversityController::class,'Store'])->name('university.store');
    // Route::get('university/edit/{id}',[UniversityController::class,'Edit'])->name('university.edit');
    // Route::post('university/update/{id}',[UniversityController::class,'Update'])->name('university.update');
    // Route::get('university/delete/{id}',[UniversityController::class,'Delete'])->name('university.delete');

});


Route::get('/applicant', function () {
    return view('sac.applicants');
});

//Route::resource('applicant', 'ApplicantController');
// Route::resource('apptype', 'AppTypeController');
// Route::resource('country', 'CountryController');
// Route::resource('state', 'StateController');
// Route::resource('province', 'ProvinceController');
// Route::resource('address', 'AddressController');
// Route::resource('university', 'UniversityController');
// Route::resource('faculty', 'FacultyController');
// Route::resource('depatrment', 'DepatrmentController');
// Route::resource('major', 'MajorController');
// Route::resource('certificate', 'CertificateController');

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('admin.index');

require __DIR__.'/auth.php';
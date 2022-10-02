<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

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
    return view('welcome')->name('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');


Route::get('/applicant', function () {
    return view('sac.applicants');
});

//Route::resource('applicant', 'ApplicantController');
Route::resource('apptype', 'AppTypeController');
Route::resource('country', 'CountryController');
Route::resource('state', 'StateController');
Route::resource('province', 'ProvinceController');
Route::resource('address', 'AddressController');
Route::resource('university', 'UniversityController');
Route::resource('faculty', 'FacultyController');
Route::resource('depatrment', 'DepatrmentController');
Route::resource('major', 'MajorController');
Route::resource('certificate', 'CertificateController');

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('admin.index');

require __DIR__.'/auth.php';
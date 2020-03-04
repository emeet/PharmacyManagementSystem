<?php

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

Auth::routes();
Route::get('/home','HomeController@index')->name('home');

// Route::get('/admin', 'HomeController@index')->name('admin');
// Route::get('/pharmacist/personal','PageController@personal');
// Route::get('/index', 'PageController@index');



// Admin Route list
Route::group(['middleware' => ['admin']], function(){
        Route::post('/pharmacistRegister', 'PharmacistRegisterController@registers')->name('pharmacistRegister');
        Route::resource('manage', 'ManageController');
        Route::get('enter', 'PageController@pharmacist');
});
// Pharmacist Route list
Route::group(['middleware' => ['pharmacist']], function(){
    Route::resource('personal', 'PersonalController');
    Route::resource('medicine', 'MedicineController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('stock', 'StockController');
});


// Route::get('/admin', function() {
//     return view('/admin.home');
// });
// Route::get('/pharmacy', function(){
//     return view('/pharmacist.dashboard');
// });
// Route::get('/customer', function(){
//     return view('/customer.dashboard');
// });
// Route::post('/register', function(){
//     return view('/auth.pharmacistRegister');
// });

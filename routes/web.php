<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function() {
    //For All With Permissions
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    //For Admin
    Route::get('/roles', 'App\Http\Controllers\DashboardController@roles')->name('roles');
    Route::get('/generate-roles', 'App\Http\Controllers\DashboardController@rolesPDF')->name('generate.roles');
    Route::get('/roles/view/{id}', 'App\Http\Controllers\DashboardController@view');
    Route::get('/change-password', 'App\Http\Controllers\DashboardController@changePass')->name('settings');
    Route::put('/change-password', 'App\Http\Controllers\DashboardController@update');
    Route::get('/coupon', 'App\Http\Controllers\CouponController@coupon')->name('coupon');
    Route::get('/add-coupon', 'App\Http\Controllers\CouponController@addCoupon');
    Route::post('/add-coupon-process', 'App\Http\Controllers\CouponController@addCouponProcess');
    Route::get('/edit-coupon/{id}', 'App\Http\Controllers\CouponController@editCoupon');
    Route::post('/edit-coupon-process/{id}', 'App\Http\Controllers\CouponController@updateCoupon');
    Route::get('/delete-coupon/{id}', 'App\Http\Controllers\CouponController@delete');
    Route::get('/top-up', 'App\Http\Controllers\TopUpController@index')->name('topup');
    Route::get('/add/top-up/{id}', 'App\Http\Controllers\TopUpController@addTopUp');
    Route::post('/add/top-up/process/{id}', 'App\Http\Controllers\TopUpController@store');
    Route::post('/create/top-up/{user_id}', 'App\Http\Controllers\TopUpController@storeTopUp');
    Route::get('/transaction', 'App\Http\Controllers\TransactionController@tampilTransaksi')->name('tampil.transaksi');
    Route::get('/transaction-pdf', 'App\Http\Controllers\TransactionController@transaksiAllPDF');
    Route::get('/view-transaction/{id}', 'App\Http\Controllers\TransactionController@viewTransaksi');
    Route::get('/view-transaction-pdf/{id}', 'App\Http\Controllers\TransactionController@viewTransaksiPDF');


    //For Pelayan
    Route::get('/hasil-menu', 'App\Http\Controllers\MenuController@menulist')->name('menu');
    Route::get('/menu/add', 'App\Http\Controllers\MenuController@menuUtama');
    Route::post('/menu/addprocess', 'App\Http\Controllers\MenuController@store');
    Route::get('/edit/{id}', 'App\Http\Controllers\MenuController@edit')->name('edit');
    Route::post('/update/{id}', 'App\Http\Controllers\MenuController@update')->name('update');
    Route::get('/delete/{id}', 'App\Http\Controllers\MenuController@delete')->name('delete');
    Route::get('/feedback', 'App\Http\Controllers\FeedbackController@index');
    Route::get('/feedback/view/{id}', 'App\Http\Controllers\FeedbackController@view');
    Route::get('/publish-menu', 'App\Http\Controllers\DayController@publishMenu');
    Route::get('/publish-menu/{id}', 'App\Http\Controllers\DayController@publish');
    Route::get('/settings', 'App\Http\Controllers\MyProfileController@editPelayan')->name('setting.pelayan');
    Route::put('/settings', 'App\Http\Controllers\MyProfileController@update');

    //For User
    Route::get('/list-menu', 'App\Http\Controllers\MenuController@listMenu');
    Route::get('/payments/{id}', 'App\Http\Controllers\TransactionController@payments');
    Route::post('/payments/{id}', 'App\Http\Controllers\TransactionController@storePayments');
    Route::get('/review', 'App\Http\Controllers\FeedbackController@review');
    Route::get('/transactions', 'App\Http\Controllers\TransactionController@index')->name('transaction');
    Route::get('/ulasan/{id}', 'App\Http\Controllers\FeedbackController@getFeedback');
    Route::post('/ulasan-process/{id}', 'App\Http\Controllers\FeedbackController@addFedback');
    Route::get('/claim-coupons', 'App\Http\Controllers\ClaimCouponController@index')->name('coupon_user');
    Route::get('/claim-coupon/{id}', 'App\Http\Controllers\ClaimCouponController@claim');
    Route::get('/about-us', 'App\Http\Controllers\DashboardController@aboutus');
    Route::get('/contact-us', 'App\Http\Controllers\ContactController@index');
    Route::post('/send-message', 'App\Http\Controllers\ContactController@sendEmail')->name('contact.send');
    Route::get('/myprofile', 'App\Http\Controllers\MyProfileController@index')->name('myprofile');
    Route::get('/settings/edit', 'App\Http\Controllers\MyProfileController@edit')->name('settings.edit');
    Route::put('/settings/edit', 'App\Http\Controllers\MyProfileController@update');
    Route::get('/ubah-pesanan/{id}', 'App\Http\Controllers\TransactionController@ubahPesanan');
    Route::post('/ubah-pesanan/{id}', 'App\Http\Controllers\TransactionController@updatePesanan');

});
Route::post('/logout', 'App\Http\Controllers\DashboardController@logout');
require __DIR__.'/auth.php';

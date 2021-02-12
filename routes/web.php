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

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('changelang');

Route::namespace('Front')->group(function () {
    Route::get('/', 'HomepageController@index')->name('front.homepage');
    Route::get('/about', 'AboutpageController@index')->name('front.aboutpage');
    Route::get('/web-development', 'WebDevelopmentController@index')->name('front.web-developmentpage');
    Route::get('/mobile-development', 'MobileDevelopmentController@index')->name('front.mobile-developmentpage');
    Route::get('/digital-marketing', 'DigitalMarketingController@index')->name('front.digital-marketingtpage');
    Route::get('/contact', 'ContactpageController@index')->name('front.contactpage');
    Route::post('/contact/store', 'ContactpageController@store')->name('front.contactpage.store');
});

Route::namespace('Admin')->prefix('dashboard')->group(function () {
    Route::get('/sl-login', 'AuthController@login')->name('admin.login');
    Route::post('/do-login', 'AuthController@doLogin')->name('admin.doLogin');
    
    Route::middleware('adminAuth:admin')->group(function () {
        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
        Route::get('/', 'HomeController@index')->name('admin.homepage');
    });
});

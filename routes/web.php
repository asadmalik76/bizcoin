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

Route::get('/', 'IndexController@index');
Route::get('/login', function () {
    return view('frontend.auth.login');
});
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Done";
    });
Route::get('/signup', function () {
    return view('frontend.auth.register');
});

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contactus');

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/dashboard','UserController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/profile','UserController@profile')->name('profile')->middleware('auth');
Route::post('/profile','UserController@updateprofile')->name('updateprofile')->middleware('auth');
Auth::routes();
Route::get('/feedback','UserController@feedback')->name('feedback')->middleware('auth');
Route::post('/storefeedback','UserController@storefeedback')->name('store.feedback')->middleware('auth');
Route::post('change-password', 'UserController@changepass')->name('change.password')->middleware('auth');
Route::post('/contacts/store','ContactController@store')->name('storemessage');
Route::get('/home', 'HomeController@index')->name('home');
Route::any('/checkout','IndexController@checkout')->name('checkout')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/coinsrequest','TransactionController@create')->name('coinsrequest');
Route::get('/termsandservices', 'IndexController@termsshow')->name('termsandservices');
Route::get('/privacypolicy','IndexController@privacyshow')->name('privacypolicy');
Route::get('/withdraw', 'WithdrawController@withdrawform')->name('withdraw')->middleware('auth');
Route::post('/withdrawrequest', 'WithdrawController@withdraw')->name('withdrawrequest')->middleware('auth');
Route::get('/approvewithdraw/{id}', 'WithdrawController@approve')->name('approvewithdraw')->middleware('auth');


// Admin Routes

Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function(){
Route::resource('/users','UserController');
Route::resource('/returnrate','ReturnrateController');
Route::resource('/withdraws','WithdrawController');
Route::get('/','AdminController@dashboard');
Route::get('/privacypage','PagesController@privacyshow');
Route::post('/updateprivacypage','PagesController@privacyupdate')->name('updateprivacypage');
Route::get('/termspage','PagesController@termsshow');
Route::post('/updatetermspage','PagesController@termsupdate')->name('updatetermspage');
Route::get('/changestatus','UserController@status');
Route::get('/changeratingstatus','RatingController@status');
Route::get('/usersbalance','UserController@balance')->name('usersbalance');
Route::get('/usersbalanceedit/{id}','UserController@balanceedit')->name('usersbalanceedit');
Route::post('/usersbalanceupdate/{id}','UserController@balanceupdate')->name('usersbalanceupdate');
Route::get('/dashboard','AdminController@dashboard');

Route::resource('/testimonials','RatingController');
Route::resource('/contacts','ContactController');
Route::resource('/transactions','TransactionController');
Route::get('/approvetransaction/{id}','TransactionController@approve');
Route::get('/pricing','AdminController@fee');
Route::get('/pricing/edit','AdminController@editfee')->name('editfee');
Route::post('/pricing/update','AdminController@updatefee')->name('updatefee');
});

// End admin routes
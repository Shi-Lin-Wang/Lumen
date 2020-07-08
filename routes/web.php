<?php
header('Access-Control-Allow-Origin: *');
use App\Register;
use Illuminate\Support\Facades\DB;
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
//Route::view('/register', 'register')->name('register');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');


Route::view('/', 'home')->name('home');
//Route::get('/', function () {
  //  return view('home');
//});
Route::view('/contact', 'contact')->name('contact');
//Route::get('/contact', function () {
  //  return view('contact');
//});
Route::resource('/posts', 'PostController');
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');


Route::get('/browserProduct', 'browserProductController@create');
Route::post('/browserProduct1', 'browserProductController@store');

Route::get('/viewProduct', 'viewProductController@create');
Route::post('/viewProduct1', 'viewProductController@store');
Route::post('/addcart', 'cartController@addcart');
Route::get('/cart', 'cartController@cart');
Route::get('/getcartDetail', 'cartController@getcartDetail');
Route::get('/CartDelete', 'cartController@CartDelete');
Route::get('/getOrder', 'OrderController@getOrder');
Route::get('/viewOrder', 'OrderController@viewOrder');
Route::get('/CartToOrder', 'cartController@CartToOrder');
Route::get('/navSigninCheck', 'SigninCheckController@navSigninCheck');
Route::post('/getcart', 'getCartAmountController@store');

Route::get('/welcome', function () {
   return view('welcome');



//Route::get('/chooseShop', 'chooseShopController@index')->name('chooseShop');

});



Route::get('/signup', 'signupController@create');
Route::post('/signup', 'signupController@store');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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

// Route::get('/sqlsrv', function () {
//     print_r(\DB::connection('saif')->table('MFInvMaster')->first()); exit();
// });



 Route::get('/', 'HomeController@home');
 Route::get('/home', 'HomeController@home');
 Route::get('/contact', 'HomeController@contact');
 Route::get('/about', 'HomeController@about');
 Route::get('/disclaimer', 'HomeController@disclaimer');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/safe-youtube-to-mp3', 'HomeController@youtubetomp3');
Route::get('/free-online-movie-streaming-sites', 'HomeController@freeonlinemoviestreamingsites');
Route::get('/free-online-gaming-sites', 'HomeController@freeonlinegamingsites');
Route::get('/how-to-take-screenshots', 'HomeController@howtotakescreenshots');
Route::get('/blog-category', 'HomeController@blogcategory');




Auth::routes();




Route::get('/myOrders', 'Userorder@myOrders');
Route::any('/cancelOrderDone', 'Userorder@cancelOrderDone'); 
Route::any('/searchItems', 'Userorder@searchItems');

Route::any('/addOrder','Userorder@addOrder');


Route::get('/charts', 'HomeController@charts');


Route::get('/items', 'Item@items');
Route::get('/addItem', 'Item@addItem');
Route::post('/addItemBack', 'Item@addItemBack');
Route::post('/updateItem','Item@updateItem');
Route::any('/manageItems','Item@manageItems'); 
Route::any('/makeItemActive','Item@makeItemActive'); 
Route::any('/makeIteminActive','Item@makeIteminActive'); 

Route::post('/deleteItem','Item@deleteItem');

Route::get('/orders', 'Order@orders');
Route::get('/summary', 'Order@ordersummary');
Route::any('/deleOrder','Order@deleOrder');  
Route::any('/makeOrderPayDone','Order@makeOrderPayDone'); 
Route::any('/pendingOrders','Order@pendingOrders'); 

Route::get('/ordersk', 'OrderK@orders');
Route::get('/summaryk', 'OrderK@ordersummary');
Route::any('/deleOrderk','OrderK@deleOrder');  
Route::any('/makeOrderPayDonek','OrderK@makeOrderPayDone'); 
Route::any('/pendingOrdersK','OrderK@pendingOrders'); 





Route::any('/addcatNtable', 'TableNCategory@addcatNtable');
Route::any('/catNtable', 'TableNCategory@catNtable');
Route::any('/addcategory', 'TableNCategory@addcategory'); 
Route::any('/addtables', 'TableNCategory@addtables'); 


Route::post('/store','HomeController@store');

Route::get('/admindashboard','Dashboard@admindashboard');
Route::get('/servicetest','Dashboard@testService');





Route::get('/adminlogin', 'RegisterLogin@adminlogin');
Route::get('/adminregister', 'RegisterLogin@adminregister'); 
Route::get('/adminLogout', 'RegisterLogin@adminLogout');
Route::any('/sendOTP','RegisterLogin@sendOTP');
Route::any('/addUser','RegisterLogin@addUser');
Route::any('/loginAdmin','RegisterLogin@loginAdmin');






// Route::any('/loginAdmin','RegisterLogin@loginAdmin');

// Route::post('/addItem', 'HomeController@addItem');



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
Route::get('/blog-category-social', 'HomeController@blogcategorysocial');
Route::get('/blog-category-howto', 'HomeController@blogcategoryhowto');
Route::get('/blog-category-trending', 'HomeController@blogcategorytrending');
Route::get('/blog-category-freebies', 'HomeController@blogcategoryfreebies');
Route::get('/blog-category', 'HomeController@blogcategory');

Route::get('/how-to-host-on-twitch', 'HomeController@howtohostontwitch'); 
Route::get('/How_to_Delete_Instagram_account', 'HomeController@HowtoDeleteInstagramaccount'); 
Route::get('/best-instagram-captions', 'HomeController@bestInstagramCaptions'); 
Route::get('/how-to-post-on-instagram', 'HomeController@howtopostoninstagram'); 
Route::get('/how-to-get-netflix-for-free', 'HomeController@howtogetnetflixforfree'); 
Route::get('/how-to-save-photo-and-video-from-instagram', 'HomeController@howtosaveinstagramMedia'); 



Auth::routes();










// Route::any('/loginAdmin','RegisterLogin@loginAdmin');

// Route::post('/addItem', 'HomeController@addItem');



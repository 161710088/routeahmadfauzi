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
//basic routing
Route::get('/', function () {
    return view('welcome');
});
Route::get('ahmad', function () {
    return '<center><marquee><h1>Welcome To Mobile Legends</h1></marquee></center>';});


//route parameter
Route::get('/kantinpojok/{makanan}/{minuman}/{cemilan}', 
	function($a,$f,$s){
	return '<h1>Makan ' .$a. '<br>' . 'Minum ' .$f. '<br>' . 'Ngemil ' .$s. '</h1>';

});
//route optional parameter
Route::get('user/{nama?}',function($a = "<h1>Dadang Conelo</h1>"){
	return $a;
});
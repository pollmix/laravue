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

Route::get('/{any}', function() {
    return view('vueapp');
})->where('any', '.*');

// Route::get('/', function () {
//     return view('vueapp', ['title' => 'Ore title']);
// });

// Route::get('/page', function () {
//     return view('page', [
//         'title' => 'Ore title',
//         'author' => json_encode([
//             "name" => "Fisayo Afolayan",
//             "role" => "Software Enginner",
//             "code" => "Always keeping it clean"
//         ])
//     ]);
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

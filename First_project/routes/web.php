<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first', function () {
    return view('firstpage');
});
Route::view('/sec','secondpage');
// Route::get('/post/{id}', function (string $value) {
//     return "<h1>ID is: ".$value."</h1>";
// });

// Route::get('/post/{id?}', function (string $value=null) {
//     if($value){
//         return "<h1>ID is: ".$value."</h1>";
//     }else{
//         return "<h1>No ID Found</h1>";
//     }
// });

// Route::get('/post/{id?}/comment/{commentid?}', function (string $value=null, string $comment=null) {
//         if($value && $comment){
//             return "<h1>ID is: ".$value."</h1></n><h2>comment id : ".$comment."</h2>";
//         }else{
//             return "<h1>No ID Found</h1>";
//         }
//     });

Route::get('/post/{id}/comment/{commentid}', function (string $value, string $comment) {

    return "<h1>ID is: ".$value." & comment id : ".$comment."</h1>";

})->where('id','[0-9]+')->whereAlpha('commentid');
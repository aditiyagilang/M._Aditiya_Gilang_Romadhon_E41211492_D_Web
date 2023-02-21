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

Route::get('/profile', function () {
    return 'my name is aditiya Gilang';
});

//Route::get('/index', function () {
//  return view('index');
//});

Route::view('/index','index',['name' => 'Aditiya Gilang']);

//Route::redirect('/index', '/index-us');

Route::get('/users/{id?}', function($id = "Aditiya") {
    return 'Haii '.$id;
})->where('id','.*');

Route::prefix('this')->group(function () {
    Route::get('/profil', function() {
        return 'profil user';
    });
    
    Route::get('/about', function() {
        return 'about user';
    });
    
    Route::get('/index', function() {
        return 'index user';
    });
});


//Generate URL
Route::get('/pengguna', function() {
    // generating url
    $url = route('users');
    //generatis reditects..
    return redirect()->route('index user');
})->where('id','.*');

Route::get('/user/{id?}', function($id = 'Aditiya') {
    return "Hello " . $id;
})->where('id','.*')->name('user');

//Generate parameter dengan URL
    Route::get('/pengguna', function($id = 'Aditiya') {
        // generating url
        $url = route('users', [
            "id" => $id,
        ]);
        //generatis reditects..
        return redirect()->route('user', [
            "id" => $id,
        ]);
    })->where('id','.*');
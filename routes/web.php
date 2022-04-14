<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

// Route::get('/', function () {
//     return inertia('Welcome');
   
// });
Route::get('/', function () {
    return Inertia::render('Home copy',[
        'name' => 'Arpit D',
        'frameworks' => [
            'laravel', 'vue', 'Inertia'
        ]
    ]);
});

Route::get('/', function () {
    sleep(1);
    return Inertia::render('Home');
});

Route::get('/Users', function () {
    return Inertia::render('Users');
});

Route::get('/Settings', function () {
    return Inertia::render('Settings');
});

Route::post('/Logout', function () {
    dd(request('foo'));
});
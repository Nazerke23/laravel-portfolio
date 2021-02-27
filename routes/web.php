<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/naz', function () {
//     return "<h1>NAZERKE </h1>";
// });

Route::get('/', function () {
    return view('onepage');
});

Route::get('/two', function () {
    return view('twopage');
});


Route::get('/three', function () {
    return view('threepage');
});

Route::get('client/add', function () {
    DB::table('clients')->insert([
        'name' => 'Nazerke',
        'surname' => 'Kulan',
        'age' => 30
    ]);
});

Route::get('client', function () {
    $client = Client::find(1);
    return $client->name;
});
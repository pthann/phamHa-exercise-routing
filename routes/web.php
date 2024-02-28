<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\FruitController;


use App\Models\Fruit;


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

Route::get('/users', function () {
    global $users;
    $result = "The users are: ";
    foreach ($users as $user) {
        $result .= $user['name'] . ",";
    }
    return $result;
});

Route::get('/myview/{user}', function ($user) {
    return view('home', ['username' => $user]);
});


Route::get('/fruits', function() {
return Fruit::all();
});


Route::get('/showFruits', [FruitController::class, 'getFruits']);
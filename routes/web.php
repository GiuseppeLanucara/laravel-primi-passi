<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $pageTitle = "The Dj Shadow Experience";
    $secondaryTitle = "Best Albums";
    $albums = ["Endtroducing", "The Private Press", "The Less You Know, The Better"];
    return view('home', compact("pageTitle", "secondaryTitle", "albums"));
});

Route::get('/second', function () {
    $infos = [
        "age" => 50,
        "profession" => "Disk Jokey",
        "totalAlbum" => 10,
        "sellRecords" => 120000,
    ];

    return view('second', $infos);
});

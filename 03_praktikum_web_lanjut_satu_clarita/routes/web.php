<?php

use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Facades\View;
use App\Http\Controllers\ContactUs;

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

Route::get('/hello', function () {
    return view('hello', ['name' => 'Clarita Putri Anggraeni', 'nim' => '2141720213']);
});

// nomor 1 (route akan memanggil view home.home )
Route::get('/home', function () {
    return view('home.home', [
        'name' => 'Clarita Putri Anggraeni',
        'nim' => '2141720213',
        'class' => 'TI-2C']);
});

// nomor 2 (menggunakan route prefix/awalan yang sama, dan akan memanggil view product)
Route::get('/product', function () {
    return view('product');
});
Route::prefix('/product')->group(function () {
    route::get('/motor', function(){
        return view('product.motor');
    });
    route::get('/mobil', function(){
        return view('product.mobil');
    });
});

// nomor 3
Route::get('/news/{news?}', function ($news = null) {
    return view('news.news', ['news' => $news]);
});

// nomor 4
Route::get('/program', function(){
    return view('program');
});
Route::prefix('/program')->group(function(){
    route::get('/indonesianIdol', function(){
        return view('program.indonesianIdol');
    });
    route::get('/masterChef', function(){
        return view('program.masterChef');
    });
});

// nomor 5 (menggunakan parameter yang opsional atau parameter yang tidak selalu ada di route,
// paramater opsional diberikan '?', dan nilai awalnya adalah callback function)
Route::get('/about/{about?}', function ($about = null) {    //fungsi ini mempunyai parameter $about yg isi defaultnya adalah null (kosong), sehingga fungsi tsb bisa digunakan tanpa menggunakan parameter maupun menggunakan sebuah parameter
    return view('about.about', ['about' => $about]);
});


// nomor 6
Route::resource('/contact', ContactUs::class)->only([
    'index'
]);

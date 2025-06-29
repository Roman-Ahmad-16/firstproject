<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage',function(){
    return "home page";
});

Route::get('/about-us',function(){
    return "about page";
});

Route::get('/services',function(){
    return "services page";
});

Route::get('/gallery' , function(){
    echo "<h1>THIS IS MY FIRST GALLERY PAGE</h1>" ;
});

Route::get('/add-nub', function(){
    $a=10;
    $b=90;
    $sum=$a+$b;

    echo "<h1>Sum of numbers = </h1>".$sum;
});






Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services',function() {
    return view('services');
});

Route::get('/gallery',function(){
    return view ('gallery');
});



Route::get('/home', [HomeController::class, 'home']);
Route::get('/about-page' , [HomeController :: class , 'about']);
Route::get('/services', [HomeController :: class , 'services']);
Route::get('/array',[HomeController :: class, 'array']);
Route::get('/book',[HomeController :: class, 'booklist']);
Route::get('/fruits',[HomeController::class,'fruitlist']);
Route::get('/hobby' , [HomeController :: class , 'hobbies']);



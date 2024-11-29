<?php

use Illuminate\Support\Facades\Route;

Route:: fallback(function(){
    return view('error');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    $nameCompany = "Pascalia Shop";
    $nameCeo = "Khamko";
    $address = "Danang, Vietnam";
    $phone = "0123456789";
    $email = "khamko1191@gmail.com";
    $facebook = "https://www.facebook.com/khamkoxys";
    $twitter = "https://twitter.com/khamko1191";
    $instagram = "https://www.instagram.com/khamko1191/";
    $github = "https://www.github.com/khamko07";

    return view('contact', compact('nameCompany', 'nameCeo', 'address', 'phone', 'email', 'facebook', 'twitter', 'instagram', 'github'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', function () {
    return view('feedback');
});




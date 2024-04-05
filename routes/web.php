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
    return view('welcome');
});

Route::get('/welcome', function () {
    return "welcome to laravel.";
});



Route::get('/contact', function () {
    $title = "hhhhhhhhhhhhhhhhhhhhhh";
    $bool  = true;


    return view('contact',[

        "title"=>$title,
        "boolean"=>$bool
    ]);
});


Route::get('/about', function () {
    $name = "Mahmod Mashlah";
    $html = "Hyper Text Markup Language . ";
    $photo1  = "https://www.cloudways.com/blog/wp-content/uploads/Laravel-9.jpg";
    $photo2 = "/images/1.jpg";
    $facebooklink = "https://www.facebook.com/mahmod.mashlah.33/";
    $sometext =" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis provident, facilis autem, veniam ipsum sint sit
    adipisci expedita consectetur, dolore nostrum voluptatum aliquam quibusdam quis labore vero asperiores quia
    error!";
    $email = "mahmodmashlah@gmail.com";
    $aboutme = "Some info Aboute Me";
    $skills = ["laravel" ,
                "PHP",
                "HTML",

                ];

    return view('about',compact("name","html","photo1","photo2","email","facebooklink","sometext","aboutme","skills")
);

});


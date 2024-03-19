<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


// Route::get('/about', function () {
//     return view('folderr.about');
// });

// Route::get('/aboutt', function () {
//     $filter = request('style');
//     return 'the is about page <span style="color:red">'.$filter.'</span>';
// });

// Route::view("/about","folderr.about" , ["name"=> "Hello mohamed"]);   ===> autre méthode

use App\Http\Controllers\TestControllers;
Route::get("/", [TestControllers::class,"welcome"])->name("welcome");
Route::get("/", [TestControllers::class,"index" ]);
Route::get("/about/{name}/{id}", [TestControllers::class,'about' ]);
Route::get("/about", [TestControllers::class,'about' ])->name('about');
Route::get('/contact' ,[TestControllers::class,'contact'])->name('contact');
Route::get('/tablemultiple/{number?}', [TestControllers::class, 'tableMultiple']);
Route::get('/create', [TestControllers::class, 'create']);
Route::post('/show', [TestControllers::class, 'show']);


use App\Http\Controllers\ContactControllers;
Route::get('/contact', [ContactControllers::class,'contact']);
Route::post('/merciContact', [ContactControllers::class,'sendContact'])-> name ('merciContact');
Route::get('/index', [ContactControllers::class,'index']);
Route::get('/about', [ContactControllers::class,'about']);
Route::get('/confirmepassword', [ContactControllers::class,'confirmepassword']);
Route::post('/form-inscription', [ContactControllers::class,'sendconfirmepassword'])-> name ('form-inscription');


use App\Http\Controllers\CalculControllers;
Route::get('/calcul', [CalculControllers::class,'calculate']);
Route::post('/resultcalcul', [CalculControllers::class,'showcalcul']);
Route::get('/calculeimc' , [CalculControllers::class,'calculimc']);
Route::POST('/resultcalculimc', [CalculControllers::class,'resultcalculimc']);

use App\Http\Controllers\LoginController;
Route::get('/showlogin', [LoginController::class,'showlogin']);
Route::post('/login', [LoginController::class,'login'])->name('login');



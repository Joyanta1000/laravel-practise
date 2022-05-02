<?php

use App\Http\Controllers\MorphManyToManyController;
use App\Http\Controllers\MorphOneController;
use App\Http\Controllers\MorphOneToManyController;
use App\Http\Controllers\practiseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/subscription/create', ['as'=>'home','uses'=>'App\Http\Controllers\SubscriptionController@index'])->name('subscription.create');

Route::post('order-post', ['as'=>'order-post','uses'=>'App\Http\Controllers\SubscriptionController@orderPost']);

Route::resource('morph-one', MorphOneController::class);

Route::resource('morph-one-many', MorphOneToManyController::class);

Route::resource('morph-many-many', MorphManyToManyController::class);
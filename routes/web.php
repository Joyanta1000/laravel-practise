<?php

use App\Http\Controllers\MorphManyToManyController;
use App\Http\Controllers\MorphOneController;
use App\Http\Controllers\MorphOneToManyController;
use App\Http\Controllers\practiseController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });

// // Route::get('/auth/callback', function () {
// //     $user = Socialite::driver('github')->user();
 
// //     // $user->token
// // });

// Route::get('/auth/callback', function () {
//     $githubUser = Socialite::driver('github')->user();
 
//     $user = User::updateOrCreate([
//         'github_id' => $githubUser->id,
//     ], [
//         'name' => $githubUser->name,
//         'email' => $githubUser->email,
//         'github_token' => $githubUser->token,
//         'github_refresh_token' => $githubUser->refreshToken,
//     ]);
 
//     Auth::login($user);
 
//     return redirect('/dashboard');
// });

// Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
// Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Route::get('login/{provider}', 'App\Http\Controllers\Auth\LoginController@redirectToProvider');
Route::get('{provider}/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback');

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

Route::get('/unique_id', ['as'=>'unique_id','uses'=>'App\Http\Controllers\Controller@index'])->name('unique_id');

Route::get('/products', ['as'=>'products','uses'=>'App\Http\Controllers\ProductController@index'])->name('products');
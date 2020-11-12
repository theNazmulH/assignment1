<?php

use App\Http\Controllers\TweetController;
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

//list all the tweets from "tweets" table
Route::get('/tweets', [TweetController::class, 'showTweets'])->name('tweet-page');

//create the tweet and insert it in the "tweets" table
Route::post('/tweets', [TweetController::class, 'processTweets']);

//show a form to add tweet
Route::get('/tweets/create', [TweetController::class, 'createTweets'])->name('create-tweet');

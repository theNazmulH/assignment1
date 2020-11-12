<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{
    // show All Tweets
    public function showTweets(){
        $tweets = Tweet::all();
        return view('tweets', $tweets);
    }


    // Create Tweets
    public function createTweets(){
        return view('create-tweet');
    }




    //  create the tweet and insert it in the "tweets" table
    public function processTweets(Request $request){
        $tweet = $request->input('tweet');
        //  ORM
        $tweet = Tweet::create([
            'body'=>$tweet,
        ]);

        return redirect()->route('tweet-page', $tweet);
    }



}

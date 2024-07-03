<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        request()->validate([
            'body' => 'required|string|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);

        return back();
    }
}

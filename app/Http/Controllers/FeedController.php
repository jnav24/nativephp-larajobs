<?php

namespace App\Http\Controllers;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class FeedController extends Controller
{
    public function index()
    {
        $feed = Feeds::make('https://larajobs.com/feed');
        return view('feed', ['feeds' => [
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        ]]);
    }
}

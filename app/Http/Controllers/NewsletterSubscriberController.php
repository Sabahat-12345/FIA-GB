<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;

class NewsletterSubscriberController extends Controller
{
    public function subscribe(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:newsletter_subscribers,email'
    ]);

    NewsletterSubscriber::create([
        'email' => $request->email
    ]);

    return back()->with('success', 'Thanks for subscribing!');
}
}

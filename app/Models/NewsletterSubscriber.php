<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    protected $fillable = ['email'];

    public $timestamps = true;

    protected $table = 'newsletter_subscribers';
}

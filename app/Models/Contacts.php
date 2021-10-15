<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    
     protected $fillable = [
        'user_id',
        'name',
        'email',
        'message',
    ];
    /**
     * Get the comments for the blog post.
     */
    
}
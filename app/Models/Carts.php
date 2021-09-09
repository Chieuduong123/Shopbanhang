<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    
     protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];
    /**
     * Get the comments for the blog post.
     */
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
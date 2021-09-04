<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /**
     * Get the comments for the blog post.
     */

     protected $fillable = [
        'name',
        'price',
        'img',
        'description',
        'count'
    ];
    public function cart()
    {
        return $this->hasMany(Carts::class);
    }
}
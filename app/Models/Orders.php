<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    /**
     * Get the comments for the blog post.
     */

    protected $fillable = [
        'cart_id',
        'firstname',
        'lastname',
        'city',
        'district',
        'ward',
        'phonenumber',
    ];
    public function cart()
    {
        return $this->belongsTo(Carts::class);
    }
}
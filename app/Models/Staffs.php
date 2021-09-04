<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function cart()
    {
        return $this->hasMany(Carts::class);
    }
}
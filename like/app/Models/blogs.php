<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    function paragrahpDeck()
    {
        return $this->hasMany(paragraphs::class, 'blog_id');
    }
}

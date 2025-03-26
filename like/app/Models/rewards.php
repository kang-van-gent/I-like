<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rewards extends Model
{
    use HasFactory;
    protected $table = 'rewards';
    function user()
    {
        return $this->hasOne(paragraphs::class, 'user');
    }
}

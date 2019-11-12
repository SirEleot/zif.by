<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['tittle', 'description', 'keywords', 'text'];
    protected $attributes = [
        'image'=> ''
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    public $timestamps = false;

    protected $fillable = ['name', 'price', 'sale', 'description', 'factory', 'category_id'];
    
    protected $attributes = [
        'series' => '',
        'image'=> '',
        'sale' => '0'
    ];

    public function category()
    {        
        return $this->belongsTo(Category::class);
    }
    
}

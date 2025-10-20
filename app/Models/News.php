<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'category',
        'is_featured',
        'views'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'views' => 'integer'
    ];
}

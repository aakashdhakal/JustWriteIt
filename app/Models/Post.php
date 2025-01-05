<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug_url',
        'date',
        'comments',
        'views',
        'thumbnail',
        'content',
        'quill_delta',
        'author',
        'status',
        'featured',
        'category'
    ];

    protected $casts = [
        'date' => 'datetime',
        'status' => 'boolean',
        'featured' => 'boolean',
    ];
}
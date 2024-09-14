<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCatalogue extends Model
{
    use HasFactory;

    protected $table = 'post_catalogues';

    protected $fillable = [
        'parent_id',
        'lft',
        'rgt',
        'level',
        'image',
        'icon',
        'album',
        'published',
        'order',
        'user_id',
        'follow',
    ];
}
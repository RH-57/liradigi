<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'icon',
        'image',
        'status',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'meta_image',
        'canonical_url',
    ];

     protected $dates = ['deleted_at'];
}

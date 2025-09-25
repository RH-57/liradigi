<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'url',
        'description',
        'year',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'canonical_url',
    ];

    public function images() {
        return $this->hasMany(ProjectImage::class);
    }
}

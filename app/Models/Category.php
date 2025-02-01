<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'color', 'slug'];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_category'); // Perubahan di sini
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'link_youtube',
        'link_facebook',
        'link_instagram',
        'alamat',
        'email',
        'wa',
        'link_gmaps'
    ];
}

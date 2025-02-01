<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Greeting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['image', 'content', 'principal_id'];

    public function principal()
    {
        return $this->belongsTo(Principal::class);
    }
}

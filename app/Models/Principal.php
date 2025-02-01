<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Principal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'nip', 'image', 'start_year', 'end_year'];

    public function greeting(){
        return $this->hasOne(Greeting::class );
    }
}

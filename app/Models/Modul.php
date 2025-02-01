<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modul extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'pdf', 'grade_id'];

    public function grade(){
        return $this->belongsTo(Grade::class, 'grade_id' );
    }
}

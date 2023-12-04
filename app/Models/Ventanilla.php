<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventanilla extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'estado'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}

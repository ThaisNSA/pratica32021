<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flor extends Model
{
    use HasFactory;

    protected $table = "flores";
    protected $fillable = ['nome', 'cor', 'preco'];

    // protected $primaryKey = '';
    // public $timestamps = false;
}

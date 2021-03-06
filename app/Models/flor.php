<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flor extends Model
{
    use HasFactory;

    protected $table = "flores";
    protected $fillable = ['nome', 'cor', 'preco'];

    public function quantidade()
    {

        return $this->hasMany(Quantidade::class);
    }
}

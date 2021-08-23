<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    use HasFactory;

    public function quantidade()
    {
        return $this->belongsToMany(Quantidade::class)->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'rua',
        'numero',
        'complemento',
        'bairro',
        'referencia',
    ];

    public function quantidade()
    {

        return $this->belongsTo(Quantidade::class);
    }
}

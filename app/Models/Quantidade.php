<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quantidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'unidade',
        'buque',
        'semente',
        'flor_id',
        'tipo_id',
        'finalidade_id',

    ];

    public function endereço()

    {

        return $this->hasMany(Endereco::class);
    }

    public function flor()
    {

        return $this->belongsTo(Flor::class);
    }

    public function finalidade()
    {
        return $this->belongsTo((Finalidade::class));
    }

    public function timezone_open()
    {
        return $this->belongsTo((Tipo::class));
    }

    public function tamanho()
    {
        return $this->belongsToMany(Tamanho::class)->withTimestamps();
    }
}

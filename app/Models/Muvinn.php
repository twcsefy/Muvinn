<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muvinn extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'cidade',
        'endereco',
        'tipos_moveis',
        'preco',
        'banheiros',
        'quartos',
        'vagas',
        'area_do_imovel'
    ];
}

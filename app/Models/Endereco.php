<?php

namespace App\Model;

use Iluminate\Database\Eloquent\Model;

class enderecos extends Model
{
    protected $table = 'endereco';
    protected $fillable = [
      'cep',
      'logradouro',
      'numero',
      'bairro',
      'cidade',
      'estado',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'cnpj', 'razaoSocial', 'nomeFantasia', 'cep', 'logradouro', 'numero', 'telefone', 'email', 'complemento', 'bairro', 'cidade', 'estado', 'segmento', 'inscricaoMunicipal', 'inscricaoEstadual'
    ];
}

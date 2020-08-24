<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['Nome','Cpf','Rg', 'CartaoSus', 'CartaoSus', 'Sexo', 'Nascimento', 'NomeDaMae', 'Telefone', 'Cep', 'AvenidaRua', 'Numero', 'Quadra', 'Lote', 'Complemento', 'Bairro', 'Cidade', 'UF', 'Foto'];
}

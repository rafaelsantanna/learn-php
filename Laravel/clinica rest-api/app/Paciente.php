<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
      'nome',
      'cpf',
      'data_nasicmento',
      'sexo',
      'telefone',
      'ativo',
      'users_id'
    ];

    public function users()
    {
      return $this->belongsTo('App\User');
    }

    public function consultas()
    {
      return $this->hasMany('App\Consulta');
    }
}

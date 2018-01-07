<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
      'nome',
      'crm',
      'sexo',
      'telefone',
      'ativo',
      'users_id'
    ];

    public function users()
    {
      return $this->belongsTo('App\User');
    }

    public function especialidadeMedicos()
    {
      return $this->hasMany('App\EspecialidadeMedico');
    }

    public function agendas()
    {
      return $this->hasOne('App\Agenda');
    }
}

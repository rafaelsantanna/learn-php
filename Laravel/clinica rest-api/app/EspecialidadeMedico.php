<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecialidadeMedico extends Model
{
    protected $table = 'especialidade_medicos';

    protected $fillable = [
        'especialidade_id',
        'medico_id'
    ];

    public function medicos()
    {
        return $this->belongsTo('App\Medico');
    }

    public function consultas()
    {
        return $this->hasMany('App\Consulta');
    }

    public function especilidades()
    {
        return $this->hasMany('App\Especialidade');
    }

}

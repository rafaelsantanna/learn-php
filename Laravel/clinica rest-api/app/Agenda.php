<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'medicos_id',
        'hora_inicial',
        'hora_final',
        'sala',
        'dia_semana'
    ];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
}

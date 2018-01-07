<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'prontuario',
        'data_hora',
        'especialidade_medico_id',
        'paciente_id',
        'status_id'
    ];

    public function especialidadeMedicos()
    {
      return $this->belongsTo('App\EspecialidadeMedico');
    }

    public function pacientes()
    {
        return $this->belongsTo('App\Paciente');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

}

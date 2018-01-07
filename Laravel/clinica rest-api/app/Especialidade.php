<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = [
        'descricao_especialidade'
    ];

    public function especilidadeMedicos()
    {
        return $this->belongsTo('App\EspecialidadeMedico');
    }
}

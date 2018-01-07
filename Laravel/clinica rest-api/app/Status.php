<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'descricao_status'
    ];

	public function consultas()
	{
		return $this->belongsTo('App\Consulta');
	}
}

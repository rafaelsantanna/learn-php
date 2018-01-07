<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  //Este Metodo fillable define os campos do formulário que podem ser preenchidos
  //Se tiver um campo no banco tipo_usuário e ele não estiver no fillable então uma tentativa do usuário mal intencionado mudar o tipo dele via get não vai ser sucedida.
    protected $fillable = [
      'nome',
      'endereco',
      'numero'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
  //use softDeletes;
  // protected $dates = ['deleted_at'];
  protected $guarded = [
      'email','senha','cpf','nome','telefone','endereco','data_nascimento','categorias'
  ];
  protected $hidden = [
      'email', 'remember_token','senha','cpf'
  ];
}

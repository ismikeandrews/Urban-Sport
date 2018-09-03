<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
  protected $table = 'tamanho';

  protected $fillable = ['name'];

  public function categoria(){
    return $this->hasOne(Categoria::class, 'id', 'id_categoria');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $table = 'produto';

  protected $fillable = ['name', 'valor', 'foto', 'id_marca', 'id_categoria', 'id_esporte', 'id_tamanho', 'description'];


  public function marca(){
    return $this->hasOne(Marca::class, 'id', 'id_marca');
  }
  public function categoria(){
    return $this->hasOne(Categoria::class, 'id', 'id_categoria');
  }
  public function esporte(){
    return $this->hasOne(Esporte::class, 'id', 'id_esporte');
  }
  public function tamanho(){
    return $this->hasOne(Tamanho::class, 'id', 'id_tamanho');
  }
}

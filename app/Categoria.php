<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $fillable = ['nome', 'descricao'];
   protected $primaryKey = 'id_categoria';
}

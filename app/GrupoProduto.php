<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoProduto extends Model
{
    protected $fillable = ['nome', 'descricao', 'produto_id'];
}

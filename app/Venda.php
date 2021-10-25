<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Saida;

class Venda extends Model
{
    protected $fillable = ['valor_venda', 'desconto', 'porcentagem', 'divulgacao', 'online', 'troca', 'tipo_pagamento', 'fk_cliente', 'created_at'];
    protected $primaryKey = 'id_venda';

    // Adicionando metodo para buscar os produtos retirados:
	public function clientes(){ //many-to-one
        return $this->belongsTo(Clientes::class);
    }

    public function saida(){
        $saida = Saida::where('fk_venda', $this->primaryKey)->get();
        return $saida;
    }

}

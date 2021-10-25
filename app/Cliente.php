<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   	protected $fillable = ['nome','email','celular', 'cpf'];	
	protected $primaryKey = 'id_clientes';

	// Implementando metodo para buscar cliente que fez a compra
    public function compras(){
        return $this->hasMany(Venda::class);
    }
  
}
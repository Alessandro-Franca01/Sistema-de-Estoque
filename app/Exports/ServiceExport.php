<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class ServiceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $query = DB::table('saidas')
            ->join('produtos', 'saidas.fk_produto', '=', 'produtos.id_produto')
            ->join('vendas', 'saidas.fk_venda', '=', 'vendas.id_venda')
            ->join('clientes', 'vendas.fk_cliente', '=', 'clientes.id_clientes')
            ->select('produtos.descricao', 'produtos.path_image', 'saidas.quantidade', 'saidas.id_saida' ,'vendas.created_at', 'clientes.nome')
            //->where('clientes.nome', $cliente->nome)
            ->get();
        return $query;
    }
}

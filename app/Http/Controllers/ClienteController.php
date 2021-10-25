<?php

namespace App\Http\Controllers;

//use Request;
use App\Cliente;
use App\Venda;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function listar(){
        $clientes = Cliente::all();

    	return view('cliente.listagem')->with(['clientes' => $clientes]);
    }

    // METODO PARA LISTAR AS COMPRAS DE UM CLIENTE: Funcionando, query personalizada!
    public function listarCompras(int $id_cliente){
        
        $cliente = Cliente::find($id_cliente);
        //$compras = Venda::where('fk_cliente', $id_cliente)->get();

        // Query personalizada: FUNCIONANDO, SHOW DE BOLA!!!
        $query = DB::table('saidas')
            ->join('produtos', 'saidas.fk_produto', '=', 'produtos.id_produto')
            ->join('vendas', 'saidas.fk_venda', '=', 'vendas.id_venda')
            ->join('clientes', 'vendas.fk_cliente', '=', 'clientes.id_clientes')
            ->select('produtos.descricao', 'produtos.path_image', 'saidas.quantidade', 'saidas.id_saida' ,'vendas.created_at', 'clientes.nome')
            ->where('clientes.nome', $cliente->nome)
            ->get();   
        //dd($query);

        return view('cliente.saidas')->with(['cliente' => $cliente, 'compras' => $query]);
    }

    public function novo(){
    	return view('cliente.formulario');
    }

    public function adiciona(ClienteRequest $request){

		Cliente::create($request->all());
        Request::session()->flash('message.level', 'success');
        Request::session()->flash('message.content', 'Cliente Adicionada com Sucesso!');
		
		return redirect()->action('ClienteController@listar')->withInput(Request::only('nome'));
	}

    public function remove($id_cliente){

        $cliente = Cliente::find($id_cliente);
        $cliente->delete();

        Request::session()->flash('message.level', 'danger');
        Request::session()->flash('message.content', 'Cliente Removida com Sucesso!');

        return redirect()
               ->action('ClienteController@listar');
    }

    public function mostra($id){

        $cliente = Cliente::find($id);

        if(empty($cliente)) {
            return "Essa cliente não existe";
        }
        return view('cliente.edita')->with('c', $cliente);
    }

    public function edita($id_cliente){

        $cliente = Cliente::find($id_cliente);
        $params = Request::all();
        $cliente->update($params);

        Request::session()->flash('message.level', 'success');
        Request::session()->flash('message.content', 'Cliente Alterada com Sucesso!');

        return redirect()
               ->action('ClienteController@listar');
    }
}

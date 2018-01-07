<?php

namespace App\Http\Controllers;

// para utilizar a classe model para poder manusear ela é necessário instanciar aqui.
use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class ClientesController extends Controller
{
    public function index()
    {
        //Metodo que acessa o Modelo Cliente e dando um get para trazer os clientes para a variavel
        $clientes = Cliente::get();
        //Retornando para a View e enviando os dados
        return view('clientes/lista', ['clientes' => $clientes]);
    }

    public function novo()
    {
        return view('clientes/formulario');
    }

    //A Classe request serve para receber dados enviados via POST
    public function salvar(Request $request)
    {
        //Instanciando a Classe referente ao Model para poder interagir com o banco
        $cliente = new Cliente();

        //Como estou colocando o nome dos campos do formulário iguais as colunas das tabelas do banco então eu posso receber tudo com o all() e salvar no banco, caso o nome dos campos for diferente ai eu devo passar um array com os nomes.
        $cliente = $cliente->create($request->all());

        // A contra-barra é para dizer que estão usando a classe direto na raiz, caso quiser usar em a barra é só importar a classe.
        // O flash vai setar uma variavel dentro da sessão que só vai estar disponível dentro da próxima URL acessada.
        \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso');

        return Redirect::to('clientes/novo');
    }

    public function editar($id)
    {
        // Este metodo funciona como um Select Where = Id, só que se não retornar nada ele vai enviar uma mensagem de erro.
        $cliente = Cliente::findOrFail($id);

        // Para evitar código duplicado estamos utilizando o mesmo formulário de cadastro para editar o cliente.
        // O segundo parametro é o envio dos dados do cliente
        return view('clientes/formulario', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    public function deletar($id)
    {
      $cliente = Cliente::findOrFail($id);
      $cliente->delete();

      \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso');

      return Redirect::to('clientes');
    }
}

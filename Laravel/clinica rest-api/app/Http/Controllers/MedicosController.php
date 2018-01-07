<?php

namespace App\Http\Controllers;
use App\Medico;

use Illuminate\Http\Request;

use App\Http\Requests;

class MedicosController extends Controller
{
    // Listando a tabela Medicos
    public function index()
    {
      $medicos = Medico::all();
      return response()->json($medicos);
    }

    // Recuperando uma linha da tabela passando o ID
    public function show($id)
    {
        $medico = Medico::find($id);

        if(!$medico) {
            return response()->json([
                'message'   => 'Record not found',
                ], 404);
        }

        return response()->json($medico);
    }

    // O método store recebe um objeto Request que contem todos os dados da requisição POST no endpoint
    public function store(Request $request)
    {
        $medico = new Medico();
        // fill->Preenchendo a variavel paciente com os dados recebidos($request)
        $medico->fill($request->all());
        $medico->save();

        return response()->json($medico, 201);
    }

    // Atualizando um Registro
    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);

        if(!$medico) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $medico->update($request->all());
        $medico->save();

        return response()->json($medico);
    }

  // Deletando um Registro  public function destroy($id)
  public function destroy($id)
    {
        $medico = Medico::find($id);

        if(!$medico) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $medico->delete();
    }
}

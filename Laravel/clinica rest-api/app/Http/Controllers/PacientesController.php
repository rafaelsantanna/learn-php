<?php

namespace App\Http\Controllers;
use App\Paciente;

use Illuminate\Http\Request;

use App\Http\Requests;

class PacientesController extends Controller
{
    // Listando listando a tabela medicos
    public function index()
    {
      $pacientes = Paciente::all();
      return response()->json($pacientes);
    }

    // Recuperando uma linha da tabela passando o ID
    public function show($id)
    {
        $paciente = Paciente::find($id);

        if(!$paciente) {
            return response()->json([
                'message'   => 'Record not found',
                ], 404);
        }

        return response()->json($paciente);
    }

    // O método store recebe um objeto Request que contem todos os dados da requisição POST no endpoint
    public function store(Request $request)
    {
        $paciente = new Paciente();
        // fill->Preenchendo a variavel paciente com os dados recebidos($request)
        $paciente->fill($request->all());
        $paciente->save();

        return response()->json($paciente, 201);
    }

    // Atualizando um Registro
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);

        if(!$paciente) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $paciente->update($request->all());
        $paciente->save();

        return response()->json($paciente);
    }

  // Deletando um Registro
  public function destroy($id)
  {
      $paciente = Paciente::find($id);

      if(!$paciente) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $paciente->delete();
  }

}

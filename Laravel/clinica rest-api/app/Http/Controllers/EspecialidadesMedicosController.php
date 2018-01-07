<?php

namespace App\Http\Controllers;
use App\EspecialidadeMedico;

use Illuminate\Http\Request;

use App\Http\Requests;

class EspecialidadesMedicosController extends Controller
{
        public function index()
    {
      $especialidades = EspecialidadeMedico::all();
      return response()->json($especialidades);
    }

    public function show($id)
    {
        $especialidade = EspecialidadeMedico::find($id);

        if(!$especialidade) {
            return response()->json([
                'message'   => 'Record not found',
                ], 404);
        }

        return response()->json($especialidade);
    }

    public function store(Request $request)
    {
        $especialidade = new EspecialidadeMedico();
        $especialidade->fill($request->all());
        $especialidade->save();

        return response()->json($especialidade, 201);
    }

    public function update(Request $request, $id)
    {
        $especialidade = EspecialidadeMedico::find($id);

        if(!$especialidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $especialidade->update($request->all());
        $especialidade->save();

        return response()->json($especialidade);
    }

  public function destroy($id)
  {
      $especialidade = EspecialidadeMedico::find($id);

      if(!$especialidade) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $especialidade->delete();
  }
}

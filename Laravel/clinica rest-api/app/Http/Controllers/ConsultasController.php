<?php

namespace App\Http\Controllers;
use App\Consulta;

use Illuminate\Http\Request;

use App\Http\Requests;

class ConsultasController extends Controller
{
        public function index()
    {
      $consultas = Consulta::all();
      return response()->json($consultas);
    }

    public function show($id)
    {
        $consulta = Consulta::find($id);

        if(!$consulta) {
            return response()->json([
                'message'   => 'Record not found',
                ], 404);
        }

        return response()->json($consulta);
    }

    public function store(Request $request)
    {
        $consulta = new Consulta();
        $consulta->fill($request->all());
        $consulta->save();

        return response()->json($consulta, 201);
    }

    public function update(Request $request, $id)
    {
        $consulta = Consulta::find($id);

        if(!$consulta) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $consulta->update($request->all());
        $consulta->save();

        return response()->json($consulta);
    }

  public function destroy($id)
  {
      $consulta = Consulta::find($id);

      if(!$consulta) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $consulta->delete();
  }
}

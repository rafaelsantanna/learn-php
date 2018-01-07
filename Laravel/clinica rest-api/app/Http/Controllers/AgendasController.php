<?php

namespace App\Http\Controllers;
use App\Agenda;

use Illuminate\Http\Request;

use App\Http\Requests;

class AgendasController extends Controller
{
    public function index()
    {
      $agendas = Agenda::all();
      return response()->json($agendas);
    }

    public function show($id)
    {
        $agenda = Agenda::find($id);

        if(!$agenda) {
            return response()->json([
                'message'   => 'Record not found',
                ], 404);
        }

        return response()->json($agenda);
    }

    public function store(Request $request)
    {
        $agenda = new Agenda();
        $agenda->fill($request->all());
        $agenda->save();

        return response()->json($agenda, 201);
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);

        if(!$agenda) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $agenda->update($request->all());
        $agenda->save();

        return response()->json($agenda);
    }

  public function destroy($id)
  {
      $agenda = Agenda::find($id);

      if(!$agenda) {
          return response()->json([
              'message'   => 'Record not found',
          ], 404);
      }

      $agenda->delete();
  }
}

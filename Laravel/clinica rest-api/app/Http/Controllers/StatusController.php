<?php

namespace App\Http\Controllers;
use App\Status;

use Illuminate\Http\Request;

use App\Http\Requests;

class StatusController extends Controller
{
    //
    public function index()
    {
     $status = Status::all();
     return response()->json($status);   
    }

    public function show($id)
    {
        $status = Status::find($id);

        if(!$status) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

    return response()->json($status);
    }

    public function store(Request $request)
    {
        $status = new Status();

        $status->fill($request->all());
        $status->save();

        return response()->json($status, 201);
    }

    public function update(Request $request, $id)
    {
        $status = Status::find($id);

        if(!$status) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $status->update($request->all());
        $status->save();

        return response()->json($status);
    }

    public function destroy($id)
    {
        $status = Status::find($id);

        if(!$status) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $status->delete();
    }
}

    
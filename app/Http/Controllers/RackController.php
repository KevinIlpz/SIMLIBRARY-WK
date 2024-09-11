<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rack;
use Validator;

class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rack = Rack::all();
        if($rack->isEmpty()) 
        {
            return response()->json([
                'message' => 'Data Racks Kosong',
                'error' => true
            ], 404); //404 Not Found
        }

        return response()->json([
            'data' => $rack,
            'message' => 'Data Racks Ditemukan',
            'status' => 200
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required|integer|min:1', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal menambahkan data Racks',
                'data' => $validator->errors(),
            ], 400);
        }

        $rack = Rack::create([
            'name' => $request->name,
            'number' => $request->number,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menambahkan data Racks',
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rack $rack, string $id)
    {
        $rack = Rack::find($id);

        if(!$rack) {
            return response()->json([
                'status' => 400,
                'message' => 'Data Racks Tidak Ditemukan',
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required|integer|min:1', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal melakukan update data Racks',
                'data' => $validator->errors(),
            ], 400);
        }

        $rack->name = $request->input('name');
        $rack->number = $request->input('number');

        $rack->save();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil mengupdate data Racks',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rack $rack, string $id)
    {
        $rack = Rack::find($id);

        if(!$rack) {
            return response()->json([
                'status' => 400,
                'message' => 'Data Racks Tidak Ditemukan',
            ], 400);
        }

        $rack->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil menghapus data Racks',
        ], 200);
    }
}

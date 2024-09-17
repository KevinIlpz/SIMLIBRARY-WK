<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bukutamu;
use Validator;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bukutamu = BukuTamu::all();
        if ($bukutamu->isEmpty) 
        {
            return response()->json([
                'data' => 'Data BukuTamu Kosong',
                'error' => true,
            ], 404); //404 Not Found
        }

        return response()->json([
            'data' => $bukutamu,
            'message' => 'Data BukuTamu ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:255',
            'pesan' => 'required|text'
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 404,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors(),
            ]);
        }

        $bukutamu = BukuTamu::create([
            'tanggal' => $request->tanggal,
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return response()->json([
            'data' => 200,
            'message' => 'Data BukuTamu berhasil ditambahkan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bukutamu $bukutamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bukutamu $bukutamu, string $id)
    {
        $bukutamu = BukuTamu::find($id);

        if (!$bukutamu) {
            return response()->json([
                'status' => 400,
                'message' => 'Data BukuTamu tidak ditemukan',
            ]);

            $validator = BukuTamu::make($request->all(), [
                'tanggal' => 'required|date',
                'name' => 'required|string|max:50',
                'email' => 'required|string|max:255',
                'pesan' => 'required|text'
            ]);

            if ($validator->fails()) 
            {
                return response()->json([
                    'status' => 400,
                    'message' => 'Gagal Melakukan update data BukuTamu',
                    'data' => $validator->errors(),
                ], 400);
            }

            $bukutamu->tanggal = $request->input('tanggal');
            $bukutamu->name = $request->input('name');
            $bukutamu->email = $request->input('email');
            $bukutamu->pesan = $request->input('pesan');

            $bukutamu->save();

            return response()->json([
                'status' => 200,
                'message' => 'Berhasil Update data BukuTamu'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bukutamu $bukutamu, string $id)
    {
        $bukutamu = BukuTamu::find($id);

        if (!$bukutamu) 
        {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal Menghapus Data BukuTamu',
            ], 400);
        }

        $bukutamu->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data BukuTamu Berhasil Dihapus'
        ], 200);
    }
}

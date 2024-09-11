<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GaleriKategori;
use Illuminate\Http\Request;
use Validator;

class GaleriKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Reuuest $request)
    {
        $galeriKategori = GaleriKategori::all();
        if ($galeriKategori->isEmpty) 
        {
            return response()->json([
                'data' => 'Data GaleriKategori Kosong',
                'error' => true
            ], 404);
        }

        return response()->json([
            'data' => $galeriKategori,
            'message' => 'Data GaleriKategori Ditemukan',
            'status' => 200,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_kategori' => 'required|string|max:255',
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 404,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors(),
            ], 404);
        }

        $galeriKategori = GaleriKategori::create([
            'name_kategori' => $request->name_kategori,
        ]);

        return response()->json([
            'data' => $galeriKategori,
            'message' => 'Data GaleriKategori Ditambahkan',
            'status' => 200,
        ], 200);
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
    public function show(GaleriKategori $galeriKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriKategori $galeriKategori)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GaleriKategori $galeriKategori, string $id)
    {
        $galeriKategori = GaleriKategori::find($id);

        if (!$galeriKategori) {
            return response()->json([
                'status' => 400,
                'data' => 'Data GaleriKategori Tidak Ditemukan',
            ], 400);
        }

        $validator = Validator::make($request->all(), [
            'name_kategori' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal melakukan update data galerikategori',
                'data' => $validator->errors(),
            ], 400);
        }
        
        $galeriKategori->name_kategori = $request->input('name_kategori');

        $galeriKategori->save();

        return response()->json([
            'status' => 200,
            'message' => 'Data GaleriKategori berhasil diupdate'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriKategori $galeriKategori, string $id)
    {
        $galeriKategori = GaleriKategori::find($id);

        if(!$galeri) 
        {
            return response()->json([
                'status' => 400,
                'message' => 'Data GaleriKategori tidak ditemukan'
            ], 400);
        }

        $galeriKategori->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data GaleriKategori ditemukan'
        ], 200);
    }
}

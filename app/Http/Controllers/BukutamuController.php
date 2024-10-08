<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bukutamu;
use Validator;

class BukutamuController extends Controller
{
    public function index(Request $request)
    {
        $bukutamu = Bukutamu::all();
        if ($bukutamu->isEmpty()) 
        {
            return response()->json([
                'data' => 'Data BukuTamu Kosong',
                'error' => true,
            ], 404);
        }

        return response()->json([
            'data' => $bukutamu,
            'message' => 'Data BukuTamu ditemukan',
            'status' => 200,
        ], 200);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:255',
            'pesan' => 'required|string'
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 400,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors(),
            ]);
        }

        $bukutamu = Bukutamu::create([
            'tanggal' => $request->tanggal,
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return response()->json([
            'data' => $bukutamu,
            'message' => 'Data BukuTamu berhasil ditambahkan',
        ]);
    }

    public function update(Request $request, string $id)
    {
        $bukutamu = Bukutamu::find($id);

        if (!$bukutamu) {
            return response()->json([
                'status' => 404,
                'message' => 'Data BukuTamu tidak ditemukan',
            ]);
        }

        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:255',
            'pesan' => 'required|string'
        ]);

        if ($validator->fails()) 
        {
            return response()->json([
                'status' => 400,
                'message' => 'Gagal Melakukan update data BukuTamu',
                'data' => $validator->errors(),
            ], 400);
        }

        $bukutamu->update($request->only(['tanggal', 'name', 'email', 'pesan']));

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil Update data BukuTamu'
        ]);
    }

    public function destroy(string $id)
    {
        $bukutamu = Bukutamu::find($id);

        if (!$bukutamu) 
        {
            return response()->json([
                'status' => 404,
                'message' => 'Data BukuTamu tidak ditemukan',
            ], 404);
        }

        $bukutamu->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data BukuTamu Berhasil Dihapus'
        ], 200);
    }
}

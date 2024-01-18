<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info("User sedang menampilakn data produk"); //menampilkan log info
        $product = Product::select('id', 'nama_produk', 'deskripsi', 'harga', 'gambar')->get();
        return response()->json([
            'message' => 'Daftar data produk',
            'data' => $product
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpg,png|max:4096'
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 400);
        }

        $gambar = $request->file('gambar')->store('public/gambar');
        $data = Product::create($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $data
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'data' => Product::select('id', 'namaproduk', 'deskripsi', 'harga', 'gambar')
                ->where('id', $id)
                ->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpg,png|max:4096'
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors(), 400);
        }

        Product::where('id', $id)->update($request->all());

        return response()->json([
            'message' => 'Data produk berhasil diubah'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('id', $id)->first();

        if ($product->gambar) {
            Storage::delete('public/gambar/' . $product->gambar);
        }

        Product::where('id', $id)->delete();
        return response()->json([
            'message' => 'Data produk berhasil dihapus'
        ], 200);
    }
}

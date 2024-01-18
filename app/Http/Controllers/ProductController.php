<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.produk.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        // dd($validasi);

        if ($request->file('gambar')) {
            $validasi['gambar'] = $request->file('gambar')->store('public/gambar');
        }
        Product::create($validasi);

        return redirect('/products')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('pages.produk.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validasi = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
        ]);
        // dd($validasi);
        Product::where('id', $product->id)->update($validasi);

        return redirect('/products')->with('success', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->gambar) {
            Storage::delete($product->gambar);
        }

        Product::destroy($product->id);
        return redirect('/products')->with('success', 'Data produk berhasil dihapus!');
    }
}

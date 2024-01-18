@extends('pages.layouts.main')

@section('content')
    <h3 class="mb-5">Edit Produk</h3>

    <div class="col-6">
        <form action="{{ url('products/' . $product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="namaproduk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                    value="{{ old('nama_produk', $product->nama_produk) }}" required>
                @error('nama_produk')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama-produk" class="form-label">Deskripsi Produk</label>
                <textarea rows="5" class="form-control" name="deskripsi" id="deskripsi" required>{{ old('deskripsi', $product->deskripsi) }}</textarea>
                @error('deskripsi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" name="harga" id="harga"
                    value="{{ old('harga', $product->harga) }}" required>
                @error('harga')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-custom">Edit</button>
        </form>

    </div>
@endsection

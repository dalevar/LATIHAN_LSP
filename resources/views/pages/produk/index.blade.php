@extends('pages.layouts.main')

@section('content')
    <h3 class="mb-5">Halaman Kelola Data Produk</h3>

    <a href="/products/create" class="btn btn-md btn-primary mb-3">Tambah Produk</a>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $show)
                    <tr>
                        <td>{{ $show->id }}</td>
                        <td>{{ $show->nama_produk }}</td>
                        <td>{{ $show->deskripsi }}</td>
                        <td>Rp. {{ number_format($show->harga, '0', ',', ',') }}</td>
                        <td><img src="{{ Storage::url($show->gambar) }}" alt="{{ $show->nama_produk }}" width="100"
                                class="img-thumbnail"></td>
                        <td>
                            <a href="/products/{{ $show->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/products/{{ $show->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

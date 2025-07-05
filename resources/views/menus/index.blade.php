@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Daftar Menu Kopi Sabin</h1>

    @auth
        <div class="mb-3">
            <a href="{{ route('menus.create') }}" class="btn btn-primary">Tambah Menu</a>
        </div>
    @endauth

    <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    @if ($menu->gambar)
                        <img src="{{ asset('gambar_menu/' . $menu->gambar) }}" class="card-img-top" alt="Gambar Menu">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $menu->kategori }}</h6>
                        <p class="card-text">{{ $menu->deskripsi }}</p>
                        <p class="fw-bold">Rp{{ number_format($menu->harga, 0, ',', '.') }}</p>

                        @auth
                            <div class="d-flex gap-2">
                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
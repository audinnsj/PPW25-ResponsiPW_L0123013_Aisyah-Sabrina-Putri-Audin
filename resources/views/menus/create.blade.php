@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Menu Kopi</h2>

    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        @include('menus.form')
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Edit Menu Kopi</h2>

    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('menus.form', ['menu' => $menu])
        <div class="mt-3 text-end">
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection

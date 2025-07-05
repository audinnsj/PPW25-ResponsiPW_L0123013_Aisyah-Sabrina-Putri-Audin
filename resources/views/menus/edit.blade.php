@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Menu Kopi</h2>

    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('menus.form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

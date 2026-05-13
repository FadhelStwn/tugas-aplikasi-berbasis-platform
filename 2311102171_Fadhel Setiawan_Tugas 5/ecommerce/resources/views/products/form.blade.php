@extends('template')

@section('title', 'Form Produk')

@section('content')

<h3>Form {{ $title }} Produk</h3>

<form method="POST" action="{{ $route }}" class="border p-4">

    @csrf

    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
               name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $product->name) }}">

        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Harga</label>

        <input type="number"
               name="price"
               class="form-control @error('price') is-invalid @enderror"
               value="{{ old('price', $product->price) }}">

        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

</form>

@endsection
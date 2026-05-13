@extends('template')

@section('title', 'Tambah Variant')

@section('content')

<h3 class="mb-4">Tambah Variant</h3>

<form action="{{ route('variants.store') }}"
      method="POST"
      class="border p-4">

    @csrf

    <div class="mb-3">
        <label>Nama Variant</label>

        <input type="text"
               name="name"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>

        <textarea name="description"
                  class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Processor</label>

        <input type="text"
               name="processor"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Memory</label>

        <input type="text"
               name="memory"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Storage</label>

        <input type="text"
               name="storage"
               class="form-control">
    </div>

    <div class="mb-3">
        <label>Product</label>

        <select name="product_id"
                class="form-control">

            @foreach($products as $product)

                <option value="{{ $product->id }}">
                    {{ $product->name }}
                </option>

            @endforeach

        </select>
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection
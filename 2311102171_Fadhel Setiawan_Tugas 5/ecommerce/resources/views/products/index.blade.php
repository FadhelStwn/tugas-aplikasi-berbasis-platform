@extends('template')

@section('title', 'Daftar Produk')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="d-flex justify-content-between mb-3">

    <h3>Daftar Produk</h3>

    <div class="d-flex gap-2">

        <a href="{{ route('products.create') }}"
           class="btn btn-primary">
           Tambah Product
        </a>

        <a href="{{ route('variants.create') }}"
           class="btn btn-success">
           Tambah Variant
        </a>

    </div>

</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Variant</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @foreach($products as $product)

        <tr>

            <td>{{ $product->name }}</td>

            <td>{{ $product->price }}</td>

            <td>

                <ul>

                    @foreach($product->variants as $var)

                        <li>
                            {{ $var->name }}
                        </li>

                        Desc: {{ $var->description }} <br>
                        Proc: {{ $var->processor }} <br>
                        RAM: {{ $var->memory }} <br>
                        Storage: {{ $var->storage }} <br><br>

                    @endforeach

                </ul>

            </td>

            <td>

                <a href="{{ route('products.edit', $product->id) }}"
                   class="btn btn-sm btn-primary">
                   Edit
                </a>

                <form action="{{ route('products.destroy', $product->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection
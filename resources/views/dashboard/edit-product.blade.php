@extends('layout.dashboard')

@section('content')
    <h4 class="mb-5">Edit Produk</h4>

    <form action="{{ route('dashboard.product.update', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-4">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select form-select-sm" id="category_id" name="category_id" aria-label="Pilih kategori">
                    <option value="">Semua</option>
                    @foreach($productCategories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="name" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>

            <div class="col-md-4">
                <label for="buy_price" class="form-label">Harga Beli</label>
                <input type="number" class="form-control" id="buy_price" name="buy_price" value="{{ $product->buy_price }}">
            </div>
            <div class="col-md-4">
                <label for="sell_price" class="form-label">Harga Jual</label>
                <input type="number" class="form-control" id="sell_price" name="sell_price" value="{{ $product->sell_price }}">
            </div>
            <div class="col-md-4">
                <label for="stock" class="form-label">Stok Barang</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection

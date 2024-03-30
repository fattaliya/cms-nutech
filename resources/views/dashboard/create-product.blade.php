@extends('layout.dashboard')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item h4">Daftar Produk</li>
            <li class="breadcrumb-item active h4" aria-current="page">Tambah Produk</li>
        </ol>
    </nav>
    <form class="" action="{{ route('dashboard.product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="formGroupExampleInput" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Pilih kategori" name="category_id">
                    <option value="" selected>Pilih Kategori</option>
                    @foreach($productCategories as $category)
                        <option value="{{ $category->id }}" @if($category->id == request('category_id')) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Barang" aria-label="Masukan Nama Barang">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="buy_price" class="form-label">Harga Beli</label>
                <input type="number" class="form-control" id="buy_price" name="buy_price" placeholder="Masukan Harga Beli" aria-label="Masukan Harga Beli">
            </div>
            <div class="col-md-4">
                <label for="sell_price" class="form-label">Harga Jual</label>
                <input type="number" class="form-control" id="sell_price" name="sell_price" placeholder="Masukan Harga Jual" aria-label="Masukan Harga Jual" readonly>

            </div>
            <div  class="col-md-4">
                <label for="stock" class="form-label">Stok Barang</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukan Jumlah Stok Barang" aria-label="Masukan Jumlah Stok Barang">
            </div>
        </div>


    </form>

    <br>
    <br>
    <form action="/upload" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="image" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
        </div>
        <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
        </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-primary">Batalkan</button>
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>


    <script>
        const buyPrice = document.getElementById('buy_price')
        buyPrice.addEventListener('change', function (e) {
            const sellPrice = document.getElementById('sell_price')
            sellPrice.value = buyPrice.value * 130/100
        })
    </script>
@endsection

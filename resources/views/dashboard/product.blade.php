@extends('layout.dashboard')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active h4">Daftar Produk</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <form class="d-flex" action="{{ route('dashboard') }}" method="get" id="query">
                <div class="input-group">
                    <span class="input-group-text" id="search"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" name="search" placeholder="Cari barang" value="{{ request('search') }}">
                </div>
                <select class="form-select form-select-sm" id="category_id" name="category_id" aria-label="Pilih kategori">
                    <option value="">Semua</option>
                    @foreach($productCategories as $category)
                        <option value="{{ $category->id }}" @if($category->id == request('category_id')) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="col-md-8 text-end">
            <a class="btn btn-success mt-3" href="{{ route('dashboard.product.export') }}">
                <i class="bi bi-file-earmark-excel"></i> Ekspor Excel
            </a>
            <a class="btn btn-danger mt-3" href="{{ route('dashboard.product.create') }}">
                <i class="bi bi-plus-circle text-light"></i> Tambah Produk
            </a>

        </div>
    </div>

    <table class="table table-hover table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col" class="text-nowrap">No</th>
                <th scope="col" class="text-nowrap">Image</th>
                <th scope="col" class="text-nowrap">Nama Produk</th>
                <th scope="col" class="text-nowrap">Kategori Produk</th>
                <th scope="col" class="text-nowrap">Harga Beli (Rp)</th>
                <th scope="col" class="text-nowrap">Harga Jual (Rp)</th>
                <th scope="col" class="text-nowrap">Stok</th>
                <th scope="col" class="text-nowrap">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $product->img_path }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->buy_price }}</td>
                    <td>{{ $product->sell_price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('dashboard.edit-product', ['id' => $product->id]) }}" class="bi bi-pencil"></a>
                        &nbsp;
                        <form action="{{ route('dashboard.product.destroy', ['id' => $product->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bi bi-trash text-danger" onclick="return confirm('Are you sure you want to delete this product?')"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        const category = document.getElementById('category_id')
        category.addEventListener('change', function (e) {
            document.getElementById('query').submit()
        })
    </script>
@endsection

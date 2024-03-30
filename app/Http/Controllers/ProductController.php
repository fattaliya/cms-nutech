<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;



class ProductController extends Controller
{

        public function index(Request $request) {
            $products = Product::query()->with('category');

            if (!empty($request->search)) {
                $products->where('name', 'like', "%$request->search%");
            }

            if (!empty($request->category_id)) {
                $products->where('category_id', $request->category_id);
            }

            $products = $products->get();
            $productCategories = ProductCategory::all();

            return view('dashboard.product', [
                'products' => $products,
                'productCategories' => $productCategories
            ]);
        }


        public function create() {
            $productCategories = ProductCategory::all();
            return view('dashboard.create-product', [
                'productCategories' => $productCategories
            ]);
        }


    public function store(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'unique:products,name'],
            'buy_price' => ['numeric'],
            'sell_price' => ['numeric'],
            'stock' => ['numeric'],
            'category_id' => ['exists:product_categories,id']
        ]);


        $product = new Product();
        $product->name = $validated['name'];
        $product->buy_price = $validated['buy_price'];
        $product->sell_price = $validated['sell_price'];
        $product->stock = $validated['stock'];
        $product->category_id = $validated['category_id'];
        $product->save();

        if ($request->hasFile('myFile')) {
            $imagePath = $request->file('myFile')->store('images', 'public');
            // Simpan path gambar ke dalam kolom 'image_path' pada tabel produk
            $product->image_path = $imagePath;
            $product->save();
        }

        $this->updateProductSequence();

        return redirect()->route('dashboard')->with('success', 'Product created successfully');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        $productCategories = ProductCategory::all()->sortBy('id');

        return view('dashboard.edit-product', [
            'product' => $product,
            'productCategories' => $productCategories
        ]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'name' => ['required', 'unique:products,name,'.$id],
            'buy_price' => ['numeric'],
            'sell_price' => ['numeric'],
            'stock' => ['numeric'],
            'category_id' => ['exists:product_categories,id']
        ]);

        $product = Product::findOrFail($id);
        $product->name = $validated['name'];
        $product->buy_price = $validated['buy_price'];
        $product->sell_price = $validated['sell_price'];
        $product->stock = $validated['stock'];
        $product->category_id = $validated['category_id'];
        $product->save();

        $this->updateProductSequence();

        return redirect()->route('dashboard')->with('success', 'Product updated successfully');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();

        $this->updateProductSequence();

        return redirect()->route('dashboard')->with('success', 'Product deleted successfully');
    }

    public function updateProductSequence()
    {
        $products = Product::orderBy('sequence')->get();
        $sequence = 1;

        foreach ($products as $product) {
            $product->sequence = $sequence;
            $product->save();
            $sequence++;
        }

        return redirect()->route('dashboard')->with('success', 'Product sequence updated successfully');
    }
    public function export()
{
    return Excel::download(new ProductExport, 'products.xlsx');
}
}

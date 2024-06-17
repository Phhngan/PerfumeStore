<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Hien thi toan bo
    function index()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->to("http://127.0.0.1:8000/login");
        } else {
            $products = DB::table('Products')
                ->select('Products.*')
                ->distinct()
                ->orderByDesc('prd_id')
                ->get();
            return view('admin/product.index', ['products' => $products]);
        }
    }

    // View: Tao san pham
    function create()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->to("http://127.0.0.1:8000/login");
        } else {
                return view('admin/product.create');
        }
    }

    function save(Request $request)
    {
        // Lay du lieu
        $product_id = $request->get('productId');
        $cat_id = $request->get('catId');
        $brand_id = $request->get('brandId');
        $product_name = $request->get('productName');
        $price_origin = $request->get('priceOrigin');
        $product_price = $request->get('productPrice');
        $description = $request->get('productDescription');
        $product_image = $request->file('productImage')->store('public');

        // Insert
        DB::table('products')->insert(
            [
                'cat_id' => $cat_id, 'brand_id' => $brand_id, 'product_name' => $product_name, 'price_origin' => $price_origin,
                'product_price' => $product_price, 'description' => $description, 'prd_image' => $product_image
            ]
        );

        // Chuyen huong ve trang home
        return redirect('admin/products');
    }

    //Xem chi tiết sản phẩm
    function show($product_id)
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->to("http://127.0.0.1:8000/login");
        } else {
            $product = Product::findOrFail($product_id);
            return view('admin/product.detail', ['product' => $product]);
        }
    }

    // Sửa sản phẩm
    function edit($product_id)
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->to("http://127.0.0.1:8000/login");
        } else {
                $product = Product::findOrFail($product_id);
                if ($product == null) {
                    return redirect()->route('error');
                }
                return view('admin/product.edit', ['product' => $product]);
            }
        
    }

    function update(Request $request, $product_id)
    {
        $product_id = $request->get('productId');
        $cat_id = $request->get('catId');
        $brand_id = $request->get('brandId');
        $product_name = $request->get('productName');
        $price_origin = $request->get('priceOrigin');
        $product_price = $request->get('productPrice');
        $description = $request->get('productDescription');
        $product_image = $request->file('productImage');

        if ($product_image != null) {
            $product_image = $request->file('image')->store('public');
            DB::table('products')->where('product_id', $product_id)
                ->update([
                    'cat_id' => $cat_id, 'brand_id' => $brand_id, 'product_name' => $product_name, 'price_origin' => $price_origin,
                    'product_price' => $product_price, 'description' => $description, 'prd_image' => $product_image
                ]);
        } else {
            DB::table('products')->where('product_id', $product_id)
                ->update([
                    'cat_id' => $cat_id, 'brand_id' => $brand_id, 'product_name' => $product_name, 'price_origin' => $price_origin,
                    'product_price' => $product_price, 'description' => $description
                ]);
        }
        return redirect('admin/products');
    }
}


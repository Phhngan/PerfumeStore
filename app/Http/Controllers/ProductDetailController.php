<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductDetailController extends Controller
{
        //chi tiet san pham
        function show($product_id)
        {
            $user = Auth::user();
            if ($user == null) {
                return redirect()->to("http://127.0.0.1:8000/login");
            } else {
                $product = Product::findOrFail($product_id);
                $product_details = DB::table('ProductDetail')
                    ->join('Product', 'ProductDetail.product_id', '=', 'Products.product_id')
                    ->select('ProductDetail.*', 'Product.product_id', 'Product.product_name', 'Product.product_image')
                    ->where('ProductDetail.product_id', $product_id)->orderByDesc('ProductDetail.id')
                    ->get();
                return view('admin/Product/detail.index', ['ProductDetail' => $product_details], ['Product' => $product_id]);
            }
        }

}

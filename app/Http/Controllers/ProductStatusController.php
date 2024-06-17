<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductStatusController extends Controller
{
        //Chuyen
        function chuyen($product_id)
        {
            $user = Auth::user();
            if ($user == null) {
                return redirect()->to("http://127.0.0.1:8000/login");
            } else {
                    DB::table('product_details')->where('product_id', $product_id)
                        ->update(['product_status_id' => 2]);
                //    return redirect('admin/productStatus/da-ban');
                }
        }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Redirect;



class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();

        return view('admin.products.index', ["products"=>$products]);
    }

    public function add($product_id = 0){
        $product = DB::table('products')->where('id', $product_id)->first();

        return view('admin.products.add', ['product'=>$product, 'product_id'=>$product_id]);
    }

    public function store(Request $request, $product_id){
        $data = [
            "name" => $request->product_name,
            "price" => $request->price,
            "description" => $request->description,
        ];

        if($product_id == 0){
            DB::table('products')->insert($data);
        }else{
            DB::table('products')->where('id', $product_id)->update($data);
        }


        return Redirect::to('/products');
    }

    public function delete($id){
        DB::table('products')->where('id', $id)->delete();

        return Redirect::to('/products');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPost;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{

    public function create(ProductPost $request)
    {
        $product = Product::create($request->validated());

        return response()->json($product, status: 201);
    }

    public function all()
    {
        return Product::all();
    }

    public function get($id)
    {
        return Product::find($id);
    }

    /*public function create(Request $request)
    {
        return Product::create([
            'name'=> $request ['name'],
            'size'=> $request ['size'],
            'observations'=> $request ['observations'],
            'stock'=> $request ['stock'],
            'boarding'=> $request ['boarding'],
            'brand_id'=> $request ['brand_id']
        ]);
    }*/

    public function update(Request $request, $id)
    {
        return Product::find($id)->update([
            'name' => $request['name'],
            'size' => $request['size'],
            'observations' => $request['observations'],
            'stock' => $request['stock'],
            'boarding' => $request['boarding'],
            'brand_id' => $request['brand_id']
        ]);
    }

    public function delete($id)
    {
        return Product::find($id)->delete();
    }
}

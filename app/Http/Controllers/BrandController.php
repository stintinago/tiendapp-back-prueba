<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandPost;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function all()
    {
        return Brand::all();
    }

    public function get($id)
    {
        return Brand::find($id);
    }

    public function create(BrandPost $request)
    {
        $brand = Brand::create($request->validated());

        return response()->json($brand, status:201);
    }

    /*public function create (Request $request){
        return Brand::create([
            'name' =>$request['name'],
            'reference' =>$request['reference']
        ]);
    }*/

    public function update(Request $request, $id)
    {
        return Brand::find($id)->update([
            'name' => $request['name'],
            'reference' => $request['reference']
        ]);
    }

    public function delete($id)
    {
        return Brand::find($id)->delete();
    }
}

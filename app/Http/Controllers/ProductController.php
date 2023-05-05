<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
	   // return "nada";
	  // return  $request->name;  
	  return Product::create($request->all());
}
 

    public function update(Request $request, $id)
    {
        $article = Product::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Product::findOrFail($id);
        $article->delete();

        return 204;
    }
}


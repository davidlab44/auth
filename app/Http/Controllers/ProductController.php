<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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

    /*
    public function pictures(Request $request)
    {
        $product = Storage::put('public/6', $request); 
        // $product =  Product::create($request->all());
        $obj = (object) [
            'aString' => 'some string','aString2'=>'some string 2','producto'=>$product
        ];

        echo json_encode($obj);
    }
    */ 


    public function pictures(Request $request)
    {
	
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7000',
        ]);
	 
        $imageName = time().'.'.$request->image->extension();  
         
        $request->image->move(public_path('tot/product'), $imageName);
	 
	$product = Product::find($request->id_product);

	if($product) {
	   $product->image = 'public/tot/product/'.$imageName;
	   $product->save();
	   return 'updated:true imageName:'.$imageName.' id_product:'.$request->id_product.' product:'.$product;
        }
	
	return 'updated:false product:'.$product.' id:'.$request->id_product.' image_name:'.'public/tot/product/'.$imageName;
    }


   
    // Update Function
    public function pictures2(Request $request)
    {
        # dd($request->input());
	/*
        # Get a specific data id from DB
        $student = Student::where('id', $id)->first();

        # Check validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
	]);
	*/
        # Check if the photo is already existed
        $product = Storage::put('public/8', $request);
            # Delete existing image
            //unlink(public_path('uploads/' . $student->photo)); 

            # Upload a new photo
            //$ext = $request->file('photo')->extension();
          $file_name = 'pulpo' . '-' .  date('dmYHis') . '.png';

         // $request->file('pulpo')->move(public_path(), $file_name);
       //     $request->file('photo')->move(public_path('uploads/'), $file_name);

       // $student->name = $request->name;
       // $student->email = $request->email;
       // $student->update();

       // return redirect()->route('home')->with('success', 'Your data is successfully updated.');
	   
        // $product =  Product::create($request->all());
        $obj = (object) ['aString' => 'some string','aString2'=>$file_name,'producto'=>$product];

        echo json_encode($obj);
  
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


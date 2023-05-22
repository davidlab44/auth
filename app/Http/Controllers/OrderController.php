<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;


class OrderController extends Controller
{
    public function store(Request $request)
    {

        $obj = (object) [
            'aString' => 'some string'
        ];

        echo json_encode($obj);

        //return 'nada';
        //return array_reverse($request->elements);
	    
	    // return  $request->name;  
	    //return Product::create($request->all());
    }
}

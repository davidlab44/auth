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
        /*
        foreach (json_decode($response) as $area)
        {
            $ordered_ticket = new Order();
            $ordered_ticket->client_id = $area->client_id;
            $ordered_ticket->product_id = $area;
            $ordered_ticket->product_amount = $area;
            $ordered_ticket->save();

            //print_r($area); // this is your area from json response
            //Order::create($request->all());
        }
        return Order::create($request->all());

        $obj = (object) [
            'aString' => 'some string'
        ];
        */

        //echo json_encode($request);

        return 'nada';
        //return array_reverse($request->elements);
	    
	    // return  $request->name;  
	    //return Product::create($request->all());
    }
}

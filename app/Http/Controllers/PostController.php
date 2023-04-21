<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
  
class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
	    return "respuesta";
    //    $response = Http::get('https://jsonplaceholder.typicode.com/posts');
    
  //      $jsonData = $response->json();
          
//        dd($jsonData);
    }
}

/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
}
 */

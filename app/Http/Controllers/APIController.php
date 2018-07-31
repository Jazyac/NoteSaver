<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Controllers\Controller;

class APIController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

   public function numberOfNotes(){
 
     return response()->json( Note::count());



    }



    public function test(){
 
        return response()->json( 'test!')->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
   
   
   
       }


}

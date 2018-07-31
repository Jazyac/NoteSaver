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

}

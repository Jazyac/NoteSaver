<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('admin');

    }

    public function index()
    {
 
    

     return view('admin.index');
  
    }


    public function switch()
    {
        //


return redirect()-> to('admin');
    }
}

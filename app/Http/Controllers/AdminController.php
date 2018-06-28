<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('checkIfUser');

    }

    public function index()
    {
 
    

     return view('admin.index');
  
    }


    public function switch()
    {
        
         $contents = Storage::get('config/settings.json');
         $json = json_decode($contents,TRUE);
        if($json['grayScale']==true){
            $json['grayScale']=false;
        }
        else{
            $json['grayScale']=true;
        }

        Storage::put('config/settings.json', json_encode($json));
      

return redirect()-> to('admin');
    }
}

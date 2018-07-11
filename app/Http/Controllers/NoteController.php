<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Mail\NoteEmail;
use Illuminate\Support\Facades\Mail;
class NoteController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkIfAdmin');
    }

    // public function boot()
    // {
    //   $this->registerPolicies();
       
    //   Gate::define('autherizeUser', function ($note) {
    //     return Auth::id() == $note->user;
    //   });
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userID = Auth::id();
     
        $notes=Note::where('user',$userID)->get();

        return view('notes.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notes.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'content' => 'required'
        ]);

        $request->request->add(['user'=> Auth::id()]);
        $input =  $request->all();
        $savedNote=Note::create($input);
        Session::flash('flash_message', 'Note Saved!');
        switch($request->saveButton) {

            case 'Save': 
           
            return redirect()-> to('notes');
            break;
        
            case 'Save and Email': 
               
            
            return $this->email($savedNote -> id );
            break;
        }


        
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);

        // if (Gate::allows('autherizeUser',  $note)) {
            if (Auth::id()==$note->user) {
           

            return view('notes.edit')->withNote($note);
        }
        else{
            Session::flash('flash_message', 'Somehthing went wrong :( .');
        

            return redirect()-> to('notes');
        }

   //     dd($note);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
{



    
    $note = Note::findOrFail($id);

    $this->validate($request, [
        'name' => 'required',
        'content' => 'required'
    ]);

    $input = $request->all();

    $note->fill($input)->save();

    Session::flash('flash_message', 'Note Saved.');

    return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        // if (Gate::allows('autherizeUser',  $note)) {
            if (Auth::id()==$note->user) {
           
        $note->delete();
    
        Session::flash('flash_message', 'Note Deleted!');
    
        return redirect()->route('notes.index');
        }
        else{
            Session::flash('flash_message', 'Somehthing went wrong :( .');
        

            return redirect()-> to('notes');
        }




       

    }


    public function email($id)
        {

            $note = Note::findOrFail($id);
         
                if (Auth::id()==$note->user) {
               

                    $noteInfoObject = new \stdClass();
                    $noteInfoObject->noteContent = $note->content;
                    $noteInfoObject->noteName = $note->name;
                   
                    
                    Mail::to(Auth::user()->email)->send(new NoteEmail($noteInfoObject));
          
        
            Session::flash('flash_message', 'Email Sent!');
        
            return redirect()->route('notes.index');
            }

            else{
                Session::flash('flash_message', 'Somehthing went wrong :( .');
            
    
                return redirect()-> to('notes');
            }

        

    }
}

<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Note;
use Illuminate\Support\Facades\DB;

//controller to return the view of the notes to the user
class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function index()
    {
        //user can only see their own notes
        $id = Auth::id();

        $note = Note::where('user_id', Auth::user()->id)->orderBy('id', 'desc')
        ->get();

        return view('notes.index') ->with('storedNotes', $note);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'newNoteName'=>'required|min:3|max:255',
        ]);
        $note = new Note;
        $note->user_id = Auth::user()->id;
        $note->name = $request->newNoteName;
        $note->save();
        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);

        return view('notes.edit')->with('notesUnderEdit', $note);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'updatedNoteName'=>'required|min:3|max:255',
        ]);
        $note = Note::find($id);
        $note->name = $request->updatedNoteName;
        $note->save();
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $note = Note::find($id);
       $note->delete();
       return redirect()->route('notes.index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Terms;

class TermsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //this function dispays Terms
    public function index()
    {
        $terms = Terms::All(); //get Terms from Terms table
        return view('terms.view', compact('terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // insert Terms in table
    public function store(Request $request)
    {
        
        //insert Terms
        $input = $request->except(['_token']);
        Terms::forceCreate($input);
        return redirect()->route('terms.index')->with('success','Terms created successfully');
    }

    
    public function show()
    {
        $terms = Terms::All(); //get Terms from Terms table
       
        return view('terms.show',compact('terms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $terms = Terms::find($id);
        
        return view('terms.edit',compact('terms'));
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
        $terms = Terms::find($id);
        $terms->description = $request->description;
        $terms->save();
        return redirect()->route('terms.index')->with('success','Terms update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terms = Terms::find($id);
        $terms->delete();
        return redirect()->route('terms.index')->with('success','Terms delete successfully');
    }
}

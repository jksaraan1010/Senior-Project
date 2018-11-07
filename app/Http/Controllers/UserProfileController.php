<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DocInfo;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docinfo = DocInfo::where('user_id', auth()->id())->get();
        return view('userProfile.index')->with('docinfo', $docinfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docinfo = DocInfo::where('user_id', auth()->id())->get();
        return view('userProfile.create')->with('docinfo', $docinfo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        //validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'email|max:255',
            
        ));

        

        //store in database
        $docinfo = new DocInfo;

        $docinfo->user_id = Auth::user()->id;

        $docinfo->name = $request->name;
        
        if ( !empty ( $request->specialty ) ) {
            $docinfo->specialty = $request->specialty;
        }
        else{
            $docinfo->specialty = "";
        }

        if ( !empty ( $request->email ) ) {
            $docinfo->email = $request->email;
        }
        else{
            $docinfo->email = "";
        }
        
        if ( !empty ( $request->phone ) ) {
            $docinfo->phone = $request->phone;
        }
        else{
            $docinfo->phone = "";
        }

        if ( !empty ( $request->address ) ) {
            $docinfo->address = $request->address;
        }
        else{
            $docinfo->address = "";
        }

        if ( !empty ( $request->address2 ) ) {
            $docinfo->address2 = $request->address2;
        }
        else{
            $docinfo->address2 = "";
        }

        if ( !empty ( $request->city ) ) {
            $docinfo->city = $request->city;
        }
        else{
            $docinfo->city = "";
        }

        if ( !empty ( $request->state ) ) {
            $docinfo->state = $request->state;
        }
        else{
            $docinfo->state = "";
        }

        if ( !empty ( $request->zip ) ) {
            $docinfo->zip = $request->zip;
        }
        else{
            $docinfo->zip = "";
        }
        
       
        
        
        
        
        
        
        
        $docinfo->save();

        //redirect
        return redirect()->route('userProfile.index');
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
        $docinfo = DocInfo::find($id);
        

        return view('userProfile.edit')->with('docinfo', $docinfo);
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
        //validate the data
        $this->validate($request, array(
            'name' => 'required|max:255',
            'email' => 'email|max:255',
            
        ));

        

        //store in database
        $docinfo = DocInfo::find($id);

        
        $docinfo->name = $request->name;


        if ( !empty ( $request->specialty ) ) {
            $docinfo->specialty = $request->specialty;
        }
        else{
            $docinfo->specialty = "";
        }

        if ( !empty ( $request->email ) ) {
            $docinfo->email = $request->email;
        }
        else{
            $docinfo->email = "";
        }
        
        if ( !empty ( $request->phone ) ) {
            $docinfo->phone = $request->phone;
        }
        else{
            $docinfo->phone = "";
        }

        if ( !empty ( $request->address ) ) {
            $docinfo->address = $request->address;
        }
        else{
            $docinfo->address = "";
        }

        if ( !empty ( $request->address2 ) ) {
            $docinfo->address2 = $request->address2;
        }
        else{
            $docinfo->address2 = "";
        }

        if ( !empty ( $request->city ) ) {
            $docinfo->city = $request->city;
        }
        else{
            $docinfo->city = "";
        }

        if ( !empty ( $request->state ) ) {
            $docinfo->state = $request->state;
        }
        else{
            $docinfo->state = "";
        }

        if ( !empty ( $request->zip ) ) {
            $docinfo->zip = $request->zip;
        }
        else{
            $docinfo->zip = "";
        }
        
        $docinfo->save();

        //redirect
        return redirect()->route('userProfile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find id
        $docinfo = DocInfo::find($id);
        $docinfo->delete();

        //delete
        return redirect()->route('userProfile.index');
    }
}

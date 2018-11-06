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

        return view('userProfile.create');
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
            'zip' => 'numeric'
        ));

        

        //store in database
        $docinfo = new DocInfo;

        $docinfo->user_id = Auth::user()->id;
        $docinfo->name = $request->name;
        $docinfo->email = $request->email;
        $docinfo->phone = $request->phone;
        $docinfo->specialty = $request->specialty;
        $docinfo->address = $request->address;
        $docinfo->address2 = $request->address2;
        $docinfo->city = $request->city;
        $docinfo->state = $request->state;
        $docinfo->zip = $request->zip;
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
            'zip' => 'numeric'
        ));

        

        //store in database
        $docinfo = DocInfo::find($id);

        
        $docinfo->name = $request->name;
        $docinfo->email = $request->email;
        $docinfo->phone = $request->phone;
        $docinfo->specialty = $request->specialty;
        $docinfo->address = $request->address;
        $docinfo->address2 = $request->address2;
        $docinfo->city = $request->city;
        $docinfo->state = $request->state;
        $docinfo->zip = $request->zip;
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

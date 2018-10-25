<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Module;
use App\ModuleDetail;

class ModuleDetailController extends Controller
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
    public function index($id)
    {
        $module = Module::find($id);
        return view('module_detail.view', compact('module'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $module = Module::find($id);
        return view('module_detail.create',compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // exit;
        $input = $request->except(['_token']);
        ModuleDetail::forceCreate($input);
        return redirect()->route('module_detail.index',['id' => $request->module_id])->with('success','Module Detail created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module = Module::find($id);
        return view('module_detail.show',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module_detail = ModuleDetail::find($id);
        // echo "<pre>";
        // print_r($module_detail);
        // exit;
        return view('module_detail.edit',compact('module_detail'));
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
        // echo "<pre>";
        // print_r($id);
        // exit;
        $module_detail = ModuleDetail::find($id);
        $module_detail->title = $request->title;
        $module_detail->description = $request->description;
        $module_detail->save();
        return redirect()->route('module_detail.index',['id' => $module_detail->module_id])->with('success','Module Detail update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module_detail = ModuleDetail::find($id);
        $module_detail->delete();
        return redirect()->route('module_detail.index',['id' => $module_detail->module->id])->with('success','Module_ Detail delete successfully');
    }


    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = ModuleDetail::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}

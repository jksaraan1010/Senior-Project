<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTopicsRequest;
use App\Http\Requests\UpdateTopicsRequest;

class TopicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of Topic.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all(); //get all User from User table

        return view('topics.index', compact('topics'));
    }

    /**
     * Show the form for creating new Topic.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store a newly created Topic in storage.
     *
     * @param  \App\Http\Requests\StoreTopicsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopicsRequest $request)
    {
        Topic::create($request->all());

        return redirect()->route('topics.index');
    }


    /**
     * Show the form for editing Topic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::findOrFail($id);

        return view('topics.edit', compact('topic'));
    }

    /**
     * Update Topic in storage.
     *
     * @param  \App\Http\Requests\UpdateTopicsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopicsRequest $request, $id)
    {
        $topic = Topic::findOrFail($id);
        $topic->update($request->all());

        return redirect()->route('topics.index');
    }


    /**
     * Display Topic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);

        return view('topics.show', compact('topic'));
    }


    /**
     * Remove Topic from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();

        return redirect()->route('topics.index');
    }

    /**
     * Delete all selected Topic at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Topic::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
    //this function is for Add new topic Popup modal
    public function addNewTopic(Request $request)
    {
       
        $topic = new Topic();
        $topic->title = $request->topic_name;
        if($topic->save())
        {
            echo json_encode(array('status' => 'success', 'id' => $topic->id)); // if topic add successfully than Ajax return success or topic id 
        }
        else
        {
            echo json_encode(array('status' => 'error'));  //if any error give inserting time than Ajax return error
        }
    }
}
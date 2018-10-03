<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Calendar;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        $event = [];

        foreach($events as $row){
            $event[] = \Calendar::event(
                $row->event_name,
                true,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date. '+1 day'),
                $row->id);
        }

        $calendar = \Calendar::addEvents($event);
        return view('events.index', compact('events','calendar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function display(){
        return view('events.add' );
    }
    public function store(Request $request)
    {
       $this->validate($request,[
           'event_name' => 'required|min:3|max:255',
           'start_date' => 'required',
           'end_date' => 'required',
        ]);
        $events =new Events();

        $events->event_name = $request->newEventName;
        $events->start_date = $request->newEventStartDate;
        $events->end_date = $request->newEventEndDate;
        $events->save();


        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Events::all();
        return view('events.edit')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Events::find($id);
        return view('events.update')->with('eventsUnderEdit', $events);;

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
        $this->validate($request,[
            'event_name' => 'required|min:3|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = Events::find($id);

        $events->event_name = $request->input('event_name');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->save();
        return redirect()->route('events.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $events = Events::find($id);
        $events->delete();
        return redirect('events');
    }
}

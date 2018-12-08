<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Validator;
use Calendar;

//controller to return the view of the calendar to the user
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //user can only see their own calendar/ events
        $events = Events::where('user_id', Auth::user()->id)->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->event_name,
                false, //full day event
                //parsing the event datetime range into a start and end times
                new \DateTime($event->start_date),
                new \DateTime($event->end_date),
                //calendar looks, events on the calendar
                $event->id,
                    [
                    'backgroundColor' =>'#0984e3', 
                    'borderColor' => '#0984e3', 
                    'textColor' => 'white',
                    'editable' => 'true',
                    'droppable' => 'true',
                  ]
            );
        }
        //once event is added it shows up on the calendar
        $calendar_details = Calendar::addEvents($event_list); 
 
        return view('events.index', compact('calendar_details') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        //validate the event name and time are required
        $validator = Validator::make($request->all(), [
            
            'event_name' => 'required|min:3|max:255',
            'event_time' => 'required',
           
        ]);
 
        if ($validator->fails()) {
        	\Session::flash('Warning','Please enter valid event details!');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
 
        $event = new Events;
        $event->user_id = Auth::user()->id;
        $event->event_name = $request['event_name'];
        $event->event_time = $request['event_time'];
        $Date = $request['event_time'];

        //Begin start date string operations
        $start = substr($Date, 0, 19);
        $event->start_date = $start;
        //End start date string operations
        //Begin end date string operations
        $end = substr($Date, 21);
        $event->end_date = $end;
        //End end date string operations
    
        $event->save();
 
        \Session::flash('Success','Event added successfully!');
        return Redirect::to('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Events::where('user_id', Auth::user()->id)->orderBy('start_date', 'asc')->get();
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
        $events = Events::findOrFail($id);
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
        //updating event
        $this->validate($request,[
            'event_name' => 'required|min:3|max:255',
            'event_time' => 'required',
           
        ]);

        $events = Events::findOrFail($id);

        $events->event_name = $request->input('event_name');
        $events->event_time = $request->input('event_time');

        $Date = $request['event_time'];
        //Begin start date string operations
        $start = substr($Date, 0, 19);
        $events->start_date = $start;
        //End start date string operations
        //Begin end date string operations
        $end = substr($Date, 21);
        $events->end_date = $end;
        //End end date string operations
    
        $events->save();
        \Session::flash('Success','Event updated successfully!');
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

        $events = Events::findOrFail($id);
        $events->delete();
        \Session::flash('Success','Event deleted successfully!');
        return redirect('events');
    }
}

<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
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
       // $id = Auth::id();
        //dd($id);
        //$userId
        //$events = Events:: select('event_name')-> where('user_id', auth()->id())->get();
      
        $events = Events::where('user_id', Auth::user()->id)->get();
        $event_list = [];
        foreach ($events as $key => $event) {
            $event_list[] = Calendar::event(
                $event->event_name,
                false, //full day event
                new \DateTime($event->start_date),
                new \DateTime($event->end_date),
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
        $validator = Validator::make($request->all(), [
            
            'event_name' => 'required|min:3|max:255',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
 
        if ($validator->fails()) {
        	\Session::flash('Warning','Please enter valid event details!');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
 
        $event = new Events;
        $event->user_id = Auth::user()->id;
        $event->event_name = $request['event_name'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
       
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
        $this->validate($request,[
            'event_name' => 'required|min:3|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = Events::findOrFail($id);

        $events->event_name = $request->input('event_name');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
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

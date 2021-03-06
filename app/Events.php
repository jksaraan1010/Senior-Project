<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Calendar;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['event_name', 'event_time'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool)$this->False;
    }

    	/**
     * Optional FullCalendar.io settings for this event
     *
     * @return array
     */
    public function getEventOptions()
    {
        return [
            'color' => $this->background_color,
			//etc
        ];
    }

}

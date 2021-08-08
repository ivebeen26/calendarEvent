<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\calendarEvents;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        return response()->json(calendarEvents::orderBy('created_at', 'desc')->get());
    }

    public function addEvent(Request $request)
    {
        $calendar = new calendarEvents;
        $calendar->event = $request->event;
        $calendar->from = $request->from;
        $calendar->to = $request->to;
        $calendar->days = json_encode($request->days);
        $calendar->save();

        return response()->json($calendar);
    }
}

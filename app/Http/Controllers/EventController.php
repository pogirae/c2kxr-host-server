<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Event;

class EventController extends Controller
{
    public function getAllEvents()
    {
    	return response()->json(Event::all());
    }

    public function getById($id)
    {
    	return Event::find($id);
    }
}

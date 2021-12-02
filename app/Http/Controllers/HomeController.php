<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function galary()
    {
        return view('addons.galary');
    }
    public function calendar()
    {
        return view('addons.calendar');
    }
    public function viewappointment()
    {
          
         $appointments = Appointments::all();
          
          return view('icn.viewAppointment');
    }
}

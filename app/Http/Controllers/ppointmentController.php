<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    //
    
    public function index()
    {
        // $student = DB::select('SELECT* FROM appointments');
       $appointment = Appointment::all();
        
      return view('icn.index', compact('appointment'));
    }

    //Create function
    public function create()
    {
        // ;
        return view('icn.appoint');
    }

    //Store Function
    public function store(Request $request)
    {


    //    dd($request->all());


        $appointments = new Appointment;
        $appointments->name = $request->name;
        $appointments->email = $request->email;
        $appointments->phone = $request->phone;
        $appointments->gender = $request->gender;
        $appointments->message = $request->message;
        
        $appointments->save();
        return redirect()->route('home');
    }

      //delete function
      public function destroy(Appointment $appointment)
      {
      
        dd($appointment);
          $appointment->delete();
          return view('icn.index');
  
      }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
class HomeController extends Controller
{
    //first checking if there is any auth id
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
            $doctor = doctor::all(); 
            return view('user.home',compact('doctor'));
        }
    }
    public function appointment(Request $request){
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->number;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In progress';
        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request Successful. We will contact you soon');
    }
    public function myappointment(){
        //user specific appointment page only shown when he/she is logged in to  the system
        if(Auth::id()){
            if(Auth::id()){
                if(Auth::user()->usertype==0){
                    //after login, you want to show user their specific appointment
                    $userid = Auth::user()->id;
                    //below line means that if the ids in the database match then show the appointmen to the user.
                    $appoint = appointment::where('user_id', $userid)->get();
                    return view('user.my_appointment',compact('appoint'));
                }
            }
        }else{
            return redirect()->back();
        }
        
    }
    public function cancel_appointment($id){
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function about(){
        return view('user.about');
    }
    public function contact(){
        return view('user.contact');
    }
}
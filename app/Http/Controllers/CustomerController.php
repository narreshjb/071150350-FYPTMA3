<?php

namespace App\Http\Controllers;

use App\Models\AmdinBarber;
use App\Models\Feedback;
use App\Models\User;
use App\Rules\CheckDate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{

    public function showschedul()
    {
        $date = date("Y-m-d");
        $schedul = AmdinBarber::all()->where('barber', 2)->groupBy('b_id');
        $id = Auth::user()->id;
        $user = User::find($id);
        $feedback=Feedback::all();
        //dd($schedul);
        return view('Users.auser.index', compact('schedul', 'user','feedback'));
    }

    public function apointmentpage($id)
    {
        $barber = DB::table('amdin_barbers')->where('b_id', $id)->get();
        $schedul = DB::table('amdin_barbers')->where('b_id', $id)->where('duration', 60)->where('slot',1)->get();
        $id = Auth::user()->id;
        $user = User::find($id);
        $feedback=Feedback::all();
        return view('Users.auser.apointment', compact('barber', 'schedul', 'user','feedback'));
    }

    public function post(Request $request, $id)
    {
        $validated=$request->validate([
            'schedul_id' => ['required'],
            'date'=>['required','date',new CheckDate()]
        ]);

        $customer_name = Auth::user()->name;
        $customer_id = Auth::user()->id;
        $schedul_id = $request->schedul_id;
        $schedul_time = DB::table('amdin_barbers')->where('id', $schedul_id)->get();

        //$date = strtotime(date("m/d/Y"));


        //dd($date);


        $data = array();

        $data['customer_name'] = $customer_name;
        $data['customer_id'] = $customer_id;
        $data['b_id'] = $id;
        $data['schedul_id'] = $schedul_id;
        // $data['s_time']=$schedul_time->s_time;
        // $data['e_time']=$schedul_time->e_time;
        $data['date'] = $request->date;

        DB::table('customers')->insert($data);

        return redirect()->back()->with('success','appointment submit');
    }


    public function apointment()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $apointment = DB::table('customers')
            ->join('amdin_barbers', 'customers.schedul_id', 'amdin_barbers.id')
            ->where('customers.customer_id', $id)
            ->where('customers.confirm', 1)
            ->select('amdin_barbers.*', 'customers.date', 'customers.schedul_id')
            ->get();
        //dd($apointment);
        $feedback=Feedback::all();
        return view('Users.auser.myindex', compact('apointment', 'user','feedback'));
    }

    public function delete($id)
    {
        DB::table('customers')->where('schedul_id', $id)->delete();

        DB::table('amdin_barbers')->where('id', $id)->update(['duration' => 60]);

        return redirect()->back();
    }

    public function apointmentupdate($id, $b_id)
    {
        $date = date("Y-m-d");

        $barber = DB::table('amdin_barbers')->where('b_id', $b_id)->get();
        $schedul = DB::table('amdin_barbers')->where('b_id', $b_id)->where('duration', 60)->get();
        $myschedul = DB::table('customers')->where('schedul_id', $id)->first();
        $id = Auth::user()->id;
        $user = User::find($id);
        $feedback=Feedback::all();
        //dd($myschedul);
        return view('Users.auser.apointmentupdate', compact('schedul', 'barber', 'user', 'myschedul','feedback'));
    }

    public function apointmentupdatepost(Request $request, $id)
    {
        DB::table('amdin_barbers')->where('id', $id)->update(['duration' => 60]);

        $data = array();


        $data['schedul_id'] = $request->schedul_id;
        $data['confirm'] = 0;

        DB::table('customers')->where('schedul_id', $id)->update($data);

        return redirect()->route('customer.apointment');
    }

    public function update()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $feedback=Feedback::all();
        return view('Users.auser.profile', compact('user','feedback'));
    }

    public function updateprofile(Request $request)
    {
        $id = Auth::user()->id;
        $data = array();
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['phone']=$request->phone;

        $image = $request->file('image');
        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['image'] = $image_url;
                DB::table('users')->where('id', $id)->update($data);

                return redirect()->back();
            }
        }
        DB::table('users')->where('id', $id)->update($data);

        return redirect()->back();
    }


    public function feedbackpage()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $feedback=Feedback::all();
        return view('Users.auser.feedback',compact('user','feedback'));
    }

    public function feedback(Request $request)
    {
        $request->validate([
            'feedback'=> 'required',
        ]);


        $data=array();

        $data['name']=$request->name;
        $data['feedback']=$request->feedback;

        DB::table('feedback')->insert($data);


        return redirect()->back()->with('success','submit your feedback');
    }


    public function feedbackhome()
    {
        $feedback=Feedback::all();
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('Users.useradmin',compact('feedback','user'));
    }
}

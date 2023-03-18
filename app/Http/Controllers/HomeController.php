<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id=Auth::user()->id;
        $user=User::find($id);
        $feedback=Feedback::all();
        //dd($feedback);
        return view('Users.useradmin',compact('user','feedback'));
    }

    public function adminindex()
    {
        $feedback=Feedback::all();
        return view('admin.useradmin',compact('feedback'));
    }

    public function barberindex()
    {
        $barber=DB::table('users')->get();
        $feedback=Feedback::all();
        return view('admin.abarbers.index',compact('barber','feedback'));
    }

    public function barberconfirm($id)
    {
        $user=DB::table('users')->where('id',$id)->update(['isBarber'=>2]);
        $user=DB::table('amdin_barbers')->where('b_id',$id)->update(['barber'=>2]);
        return redirect()->back();

    }

    public function barberunconfirm($id)
    {
        $user=DB::table('users')->where('id',$id)->update(['isBarber'=>0]);
        return redirect()->back();
    }
}

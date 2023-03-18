<?php

namespace App\Http\Controllers;

use App\Models\AmdinBarber;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AmdinBarberController extends Controller
{
    public function index()
    {

        $barber=DB::table('users')->where('isBarber',2)->get();
        $feedback=Feedback::all();
        return view('admin.abarbers.barberindex',compact('barber','feedback'));

    }

    public function setschedul($id)
    {

        $barber=User::find($id);
        $schedul=DB::table('amdin_barbers')->where('b_id',$id)->get();
        //dd($schedul);
        $feedback=Feedback::all();
        return view('admin.abarbers.schedul',compact('barber','schedul','feedback'));
    }

    public function post(Request $request,$id)
    {

        // $st=strtotime($request->time) ;
        // $et=strtotime($request->end_time);
        // $duration=($et-$st)/60;
        // dd($duration);

        // $request->validate([
        //     'time'=> 'required',
        // ]);

        $barber=User::find($id);

        $data=array();

        // $data['name']=$barber->name;
        // $data['s_time']=$request->time;
        // $data['e_time']=$request->end_time;
        // $data['duration']=60;
        // $data['date']=$request->date;
        // $data['barber']=2;
        // $data['b_id']=$id;1677034800



        // $time=strtotime($request->time);
        //print(date("H:i",1677060000));





        $name=$barber->name;
        $s_time=strtotime($request->time);
        $e_time=strtotime("10:00");



        for($i=0;$i<12;$i++){
            if($i==0){
                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time,
                    'e_time'=>$e_time,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==1){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==2){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==3){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==4){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==5){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==6){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==7){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==8){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==9){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==10){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==11){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }elseif($i==12){

                $datatable=[
                    'name'=>$name,
                    's_time'=>$s_time=$s_time+3600,
                    'e_time'=>$e_time=$e_time+3600,
                    'duration'=>60,
                    'date'=>$request->date,
                    'barber'=>2,
                    'b_id'=>$id,
                    'slot'=>1,
                ];
            }
            DB::table('amdin_barbers')->insert($datatable);
        }



        //DB::table('amdin_barbers')->insert($data);


        return redirect()->back();

    }


    public function showschedul()
    {
        $schedul=AmdinBarber::all()->where('barber',2)->groupBy('b_id');
        $feedback=Feedback::all();
        //dd($schedul);
        return view('admin.abarbers.schedulshow',compact('schedul','feedback'));
    }


    public function updateschedulpage($id)
    {
        $schedul=DB::table('amdin_barbers')->where('b_id',$id)->get();
        $feedback=Feedback::all();
        //dd($schedul);
        return view('admin.abarbers.singleschedulshow',compact('schedul','feedback'));
    }


    public function updateschedul($id)
    {
        $schedul=DB::table('amdin_barbers')->where('id',$id)->first();
        $feedback=Feedback::all();

        //dd($schedul);
        return view('admin.abarbers.schedulupdate',compact('schedul','feedback'));
    }

    public function updateschedulpost(Request $request,$id)
    {
        $data=array();

        $s_time=strtotime($request->s_time);
        $e_time=strtotime($request->e_time);

        $data['s_time']=$s_time;
        $data['e_time']=$e_time;
        $data['date']=$request->date;

        //dd($s_time);

        DB::table('amdin_barbers')->where('id',$id)->update($data);


        return redirect()->route('admin.barbarschedulshow');
    }

    public function deleteschedul($id)
    {
        DB::table('amdin_barbers')->where('id',$id)->delete();

        return redirect()->back();
    }


    public function advancebook()
    {
        $date=date("Y-m-d");
        $feedback=Feedback::all();
        $schedul=DB::table('customers')
                ->join('amdin_barbers','customers.schedul_id','amdin_barbers.id')
                ->where('customers.date','>',$date)
                ->select('amdin_barbers.*','customers.date','customers.customer_name','customers.confirm','customers.id')
                ->get();
        //dd($schedul);
        return view('admin.customer.advancebook',compact('schedul','feedback'));
    }


    public function currentbook()
    {
        $date=date("Y-m-d");
        $feedback=Feedback::all();
        $schedul=DB::table('customers')
                ->join('amdin_barbers','customers.schedul_id','amdin_barbers.id')
                ->where('customers.date',$date)
                ->get();




        return view('admin.customer.currentbook',compact('schedul','feedback'));
        //dd($schedul);
    }

    public function oldbook()
    {
        $date=date("Y-m-d");
        $feedback=Feedback::all();
        $schedul=DB::table('customers')
                ->join('amdin_barbers','customers.schedul_id','amdin_barbers.id')
                ->where('customers.date','<',$date)
                ->select('amdin_barbers.*','customers.date','customers.customer_name')
                ->get();
        return view('admin.customer.oldbook',compact('schedul','feedback'));
        //dd($schedul);
    }


    public function adconfirm($id)
    {
        //DB::table('amdin_barbers')->where('id',$id)->update(['duration'=>59]);
        DB::table('customers')->where('id',$id)->update(['confirm'=>1]);

        return redirect()->back();
    }

    public function adcancel($id)
    {
        //DB::table('amdin_barbers')->where('id',$id)->update(['duration'=>59]);
        DB::table('customers')->where('id',$id)->update(['confirm'=>0]);

        return redirect()->back();
    }

    public function confirm($id)
    {
        DB::table('amdin_barbers')->where('id',$id)->update(['duration'=>59]);
        DB::table('customers')->where('schedul_id',$id)->update(['confirm'=>1]);

        return redirect()->back();
    }

    public function cancel($id)
    {
        DB::table('amdin_barbers')->where('id',$id)->update(['duration'=>60]);
        DB::table('customers')->where('schedul_id',$id)->update(['confirm'=>0]);

        return redirect()->back();
    }

    public function reschedul()
    {
        $barber=DB::table('amdin_barbers')->where('duration',59)->get();
        $feedback=Feedback::all();
        return view('admin.abarbers.bookingreschedul',compact('barber','feedback'));
    }


    //barber account active unactive

    public function active($id)
    {
        $user=DB::table('users')->where('id',$id)->update(['isBarber'=>2]);
        $user=DB::table('amdin_barbers')->where('b_id',$id)->update(['barber'=>2]);
        return redirect()->back();
    }

    public function unactive($id)
    {
        $user=DB::table('users')->where('id',$id)->update(['isBarber'=>0]);
        $user=DB::table('amdin_barbers')->where('b_id',$id)->update(['barber'=>0]);
        return redirect()->back();
    }


    public function barbermanual()
    {
        $feedback=Feedback::all();
        return view('admin.abarbers.addbarber',compact('feedback'));
    }


    public function barbermanualpost(Request $request)
    {
        $request->validate([
            'name'=> 'required',

        ]);

        $e=Str::random(8);
        $email=$e.'@gmail.com';
        $data=array();
        $data['name']=$request->name;
        $data['email']=$email;
        $data['isBarber']=2;
        $data['password']=Hash::make(12345678);


        DB::table('users')->insert($data);

        return redirect()->back();
    }


    // time slot active or unactive

    public function slotactive($id)
    {
        $user=DB::table('amdin_barbers')->where('id',$id)->update(['slot'=>0]);
        return redirect()->back();
    }

    public function slotunactive($id)
    {
        $user=DB::table('amdin_barbers')->where('id',$id)->update(['slot'=>1]);
        return redirect()->back();
    }


    public function feedbackhome()
    {
        $feedback=Feedback::all();
        return view('admin.useradmin',compact('feedback'));
    }

    public function feedbackdelete($id)
    {
        DB::table('feedback')->where('id',$id)->delete();
        return redirect()->back();
    }


    public function customerlist()
    {

        $customer=DB::table('users')->whereNot('isBarber',2)->get();
        $feedback=Feedback::all();

        //dd($customer);

        return view('admin.customer.profile',compact('customer','feedback'));

    }

    public function customerdelete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back();
    }


    public function customerview($id)
    {
        $customer=User::find($id);
        $feedback=Feedback::all();
        //dd($customer);

        return view('admin.customer.viewprofile',compact('customer','feedback'));
    }

}

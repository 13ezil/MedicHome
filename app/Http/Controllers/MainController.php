<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Notifications\OrderNotify;
use Illuminate\Http\Request;
use App\Medicine;
use App\Order;
use App\User;

class MainController extends Controller
{

    public function home()
    {
        return view('page.home');
    }

    public function medicine()
    {
        $med = Medicine::orderBy('name','asc')->paginate(10);
        return view('page.medicine',['med'=>$med]);
    }

    public function order()
    {
        return view('page.order');
    }

    public function history()
    {
        $order = Order::where('user_id',auth()->user()->id)->paginate(5);
        return view('page.history',['order'=>$order]);
    }

    public function selectOrder($med)
    {
        return view('page.selectorder',['med'=>$med]);
    }

    public function placeOrder(OrderRequest $request)
    {
        $med = Medicine::where('name',$request['medicine'])->first();
        if($med!=null)
        {   
            if($med->quantity < $request['quantity'])
            {
                return back()->with('error','Sorry we are out of stock.');
            }
            else
            {
               $order = new Order();
               $order->name = $request['medicine']; 
               $order->user_id = auth()->user()->id; 
               $order->quantity = $request['quantity'];  
               $order->location = $request->location;
               $order->latlong = $request->latlong;
               $order->phonenumber = auth()->user()->phonenumber;
               $order->price = ($request['quantity'] * $med->price);  
               //image
               if($request->hasfile('doctorPrescription'))
               {    
                   $file = $request->file('doctorPrescription');
                   $doctorPrescription = $request->file('doctorPrescription')->getClientOriginalName();
                   $file->move('storage/uploads/doctorprescription/',$doctorPrescription);
                   $order->doctor_prescription = $doctorPrescription;
               }
               else
               {
                   $order->doctor_prescription = null;
               }
               if($request->hasfile('medicinephoto'))
               {    
                    $file = $request->file('medicinephoto');
                    $medicinePhoto = $request->file('medicinephoto')->getClientOriginalName();
                    $file->move('storage/uploads/medicinephoto/',$medicinePhoto);
                    $order->medicine_photo = $medicinePhoto;
               }
               else
               {
                   $order->medicine_photo = null;
               } 

                Medicine::where('name',$request['medicine'])
                 ->update([
                 'quantity' => $med->quantity - $request['quantity']
                 ]);
            }   
        }
        else
        {
            $order = new Order();
            $order->name = $request['medicine']; 
            $order->user_id = auth()->user()->id; 
            $order->quantity = $request['quantity'];  
            $order->location = $request->location;
            $order->latlong = $request->latlong;
            $order->phonenumber = auth()->user()->phonenumber;
             //image
            if($request->hasfile('doctorPrescription'))
            {    
                $file = $request->file('doctorPrescription');
                $doctorPrescription = $request->file('doctorPrescription')->getClientOriginalName();
                $file->move('storage/uploads/doctorprescription/',$doctorPrescription);
                $order->doctor_prescription = $doctorPrescription;
            }
            else
            {
                $order->doctor_prescription = null;
            }

            if($request->hasfile('medicinephoto'))
            {    
                $file = $request->file('medicinephoto');
                $medicinePhoto = $request->file('medicinephoto')->getClientOriginalName();
                $file->move('storage/uploads/medicinephoto/',$medicinePhoto);
                $order->medicine_photo = $medicinePhoto;
            }
            else
            {
                $order->medicine_photo = null;
            }  
        }
        //save
        $order->save();
        User::find(1)->notify(new OrderNotify($order));
        return redirect()->route('order')->with('success','Successfully order placed.');
    }

    public function notification()
    {
        return view("page.notification");
    }

    public function getnotification()
    {
        $arr = [];
        $i = 0;
        $user = User::find(auth()->user()->id);
        foreach ($user->notifications as $notification) 
        {
            $arr[$i] = $notification;
            $i++;
        }
        return $arr;
    }

    public function getdirection()
    {
        return view('page.direction');
    }
}

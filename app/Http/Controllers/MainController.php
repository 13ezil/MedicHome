<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderNotify;
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
        $med = Medicine::orderBy('name','asc')->paginate(15);
        return view('page.medicine',['med'=>$med]);
    }

    public function order()
    {
        return view('page.order');
    }

    public function history()
    {
        $order = Order::where('user_id',auth()->user()->id)->get();
        return view('page.history',['order'=>$order]);
    }

    public function selectOrder($med)
    {
        return view('page.selectorder',['med'=>$med]);
    }

    public function placeOrder(Request $request)
    {
        $med = Medicine::where('name',$request['medicine'])->first();
        if($med!=null)
        {   
            if($med->quantity < $request['quantity'])
            {
                return vuew('page.outofstock');
            }
            else
            {
               $order = new Order();
               $order->name = $request['medicine']; 
               $order->user_id = auth()->user()->id; 
               $order->quantity = $request['quantity'];  
               $order->location = $request['location'];
               $order->phonenumber = auth()->user()->phonenumber;
               $order->price = ($request['quantity'] * $med->price);  
               //image

               if($request->hasfile('doctorPrescription'))
               {    
                   $file = $request->file('doctorPrescription');
                   $doctorPrescription = $request->file('doctorPrescription')->getClientOriginalName();
                   $file->move('uploads/doctorprescription/',$doctorPrescription);
                   $order->doctor_prescription = $doctorPrescription;
                }
                if($request->hasfile('medicinephoto'))
                {    
                   $file = $request->file('medicinephoto');
                   $medicinePhoto = $request->file('medicinephoto')->getClientOriginalName();
                   $file->move('uploads/medicinephoto/',$medicinePhoto);
                   $order->medicine_photo = $medicinePhoto;
                }

                Medicine::where('name',$request['medicine'])
                 ->update([
                 'quantity' => ($med->quantity - $request['quantity'])
                 ]);
            }   
        }
        else
        {
            $order = new Order();
            $order->name = $request['medicine']; 
            $order->user_id = auth()->user()->id; 
            $order->quantity = $request['quantity'];  
            $order->location = $request['location'];
            $order->phonenumber = auth()->user()->phonenumber;
             //image
            if($request->hasfile('doctorPrescription'))
            {    
                $file = $request->file('doctorPrescription');
                $doctorPrescription = $request->file('doctorPrescription')->getClientOriginalName();
                $file->move('uploads/doctorprescription/',$doctorPrescription);
                $order->doctor_prescription = $doctorPrescription;
            }
            if($request->hasfile('medicinephoto'))
            {    
            $file = $request->file('medicinephoto');
            $medicinePhoto = $request->file('medicinephoto')->getClientOriginalName();
            $file->move('uploads/medicinephoto/',$medicinePhoto);
            $order->medicine_photo = $medicinePhoto;
            }  
        }
        //save
        $order->save();
        User::find(1)->notify(new OrderNotify($order));
        return back();
    }
}

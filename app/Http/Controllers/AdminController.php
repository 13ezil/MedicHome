<?php

namespace App\Http\Controllers;

use App\Notifications\ApproveNotification;
use App\Notifications\DeclineNotification;
use Illuminate\Http\Request;
use App\Medicine;
use App\User;

class AdminController extends Controller
{
    public function index()
    {   
        $med = Medicine::orderBy('name','asc')->paginate(15);
        return view('admin.page.view',['med'=>$med]);
    }

    public function create()
    {
        return view('admin.page.store');
    }

    public function store(Request $request)
    {
        $med = new Medicine();
        $med->name = $request['medicine'];
        $med->quantity = $request['quantity'];
        $med->price = $request['price'];
        $med->review = $request['review'];
        $med->save();
        return back();
    }

    public function update($id)
    {
        $med = Medicine::find($id);
        return view('admin.page.update',['med'=>$med]);
    }

    public function delete($id)
    {
        Medicine::where('id',$id)
                 ->delete();
        return back();
    }

    public function updatemedicine(Request $request)
    {
        $med = Medicine::where('id',$request['id'])
                    ->update([
                    "name" => $request['medicine'],
                    "quantity" => $request['quantity'],
                    "price" => $request['price'],
                    "review" => $request['review'],
                     ]);
        return redirect('/admin');
    }

    public function notification()
    {
        return view('admin.page.notification');
    }

    public function getNotification()
    {
        $arr = [];
        $i = 0;
        $user = User::find(auth()->user()->id);
        foreach ($user->unreadnotifications as $notification) 
        {
            $arr[$i] = $notification;
            $i++;
        }
        return $arr;
    }

    public function approveNotification($id)
    {
        $notification = auth()->user()->unreadNotifications->where('id', $id)->first();
        User::find($notification['data']['order']['user_id'])->notify(new ApproveNotification());
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    }

    public function declineNotification($id)
    {
        $notification = auth()->user()->unreadNotifications->where('id', $id)->first();
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        User::find($notification['data']['order']['user_id'])->notify(new DeclineNotification());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

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
}

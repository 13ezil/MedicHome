<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

  public function home()
  {
    return view('page.home');
  }

  public function medicine()
  {
    return view('page.medicine');
  }

  public function order()
  {
    return view('page.order');
  }

  public function history()
  {
    return view('page.history');
  }
}

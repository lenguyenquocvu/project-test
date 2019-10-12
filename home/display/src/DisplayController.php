<?php

namespace Home\Display;

use App\Http\Controllers\Controller;

Class DisplayController extends Controller
{

    public function index()
    {
      return view('display::index', array());
    }
    
    public function login()
    {
      return view('display::login', array());
    }
    
    public function members()
    {
      return view('display::members', array());
	  }

    public function submit()
    {
      return view('display::submit', array());
    }
    
    public function teacher()
    {
      return view('display::teacher', array());
    }
    
    public function admin()
    {
      return view('display::admin', array());
    }
}

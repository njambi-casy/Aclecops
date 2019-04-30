<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function About{
    	return view('Layouts.About');
    }
 public function Contacts{
    	return view('Layouts.Contacts');
    }


}

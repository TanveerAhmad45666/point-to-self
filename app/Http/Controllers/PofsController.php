<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PofsController extends Controller
{
     function index(){

           return view('Pointofsale/index');
        }
     function topnav(){

           return view('Pointofsale/Allforms/form_signup');
        }

        function calendar(){

           // return view('Pointofsale/index2');

        if(session("name"))
        {
            // return view("Shop.shop_form");
            return view('Pointofsale/index2');
        }
        else
        {
            // return redirect("/login");
            return view('Pointofsale/Allforms/form_signup');
        }

        }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\UserModel;

class SessionController extends Controller
{
  	function login()
  	{
  		return view("session/login");
  	}

  	function do_login(Request $request)
  	{

  		$validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:25',
            'password' => 'required|min:3',
        ]);

  		  if ($validator->fails()) {
            return redirect('login_in')
                        ->withErrors($validator)
                         ->withInput();
        }


        $user = UserModel::where("name",$request->name)
                    ->where("password",$request->password)
                    ->get();



        if(!empty($user) && isset($user[0]->name))
        {
          session(['name' => $user[0]->name,

                  "id" => $user[0]->id]);
        }
        else
        {
           return redirect('login_in')
                        ->withErrors($validator)
                        ->withInput();
        }




        

        return redirect("/");

  	}

  	function logout()
  	{
  		session()->forget("name");
  		session()->flush();
  		// return redirect("login");
      return view('Pointofsale/index');
  	}
}

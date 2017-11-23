<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
 
	public function __construct(){

		$this->middleware('guest', ['except'=>'destroy']);
	}



   public function create(){

   		return view('session.create');

   }

   public function store(){

   		//Attempt to authenticate the user



   		if(! auth()->attempt(request(['email', 'password']))) { 

   			return back()->withErrors([
   				'message' => 'please check your credentials and try again'
   				]);

   		}
   		//if not redirect back


   		//If so, sign them in


   		//Redirect the homepage
   		return redirect('/');
   }


   public function destroy(){

   		auth()->logout();

   		return redirect('/');
   }
}

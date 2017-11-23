<?php

namespace App\Http\Controllers;



use App\Http\Requests\RegistrationForm;


class RegisterController extends Controller
{

   public function create(){

   		return view('registration.create');

   }

   public function store(RegistrationForm $form){

      $form->persist();

      session()-> flash('message', 'Here is a default message ');
   	

   	//Redirect to the homepage

   	return redirect('/');

   }

}

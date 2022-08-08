<?php

//home controller

class Home extends Controller
{
      function index()
      {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
         $user = new user();
         $data = $user->findAll();
         $this->view('home',['rows'=>$data]); //calling the Controller which it extends by using this keyword to pass params
      }
}
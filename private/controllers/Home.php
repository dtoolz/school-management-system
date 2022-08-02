<?php

//home controller

class Home extends Controller
{
      function index()
      {
        $user = $this->load_model('User');
        $data = $user->findAll();
         //$data = $user->where('firstname', 'sam');
         $this->view('home',['rows'=>$data]); //calling the Controller which it extends by using this keyword to pass params
      }
}
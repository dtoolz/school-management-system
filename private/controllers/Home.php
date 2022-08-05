<?php

//home controller

class Home extends Controller
{
      function index()
      {
         $user = new user();
         $data = $user->findAll();
         $this->view('home',['rows'=>$data]); //calling the Controller which it extends by using this keyword to pass params
      }
}
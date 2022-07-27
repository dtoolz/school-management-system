<?php

//home controller

class Home extends Controller
{
      function index()
      {
        echo $this->view('home'); //calling the Controller which it extends by using this keyword to pass params
      }
}
<?php

class Login extends Controller 
{
   function index() 
   {
        $errors = array();
        echo $this->view('login',[
         'errors'=>$errors
      ]);
   }
}
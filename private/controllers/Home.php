<?php

//home controller

class Home extends Controller
{
      function index()
      {
        //$user = $this->load_model('User');
        $user = new user();

        $arr['firstname'] = 'peter';
        $arr['lastname'] = 'pan';
        $arr['date'] = '2022-08-01 17:22:26';
        $arr['user_id'] = 'rtryfkfmvkgkg';
        $arr['gender'] = 'male';
        $arr['school_id'] = 'eyrhhffnhdhd';
        $arr['rank'] = 'student';
        
        $user->insert($arr);
        $data = $user->findAll();
         //$data = $user->where('firstname', 'sam');
         $this->view('home',['rows'=>$data]); //calling the Controller which it extends by using this keyword to pass params
      }
}
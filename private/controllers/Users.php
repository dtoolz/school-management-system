<?php

class Users extends Controller
{
      function index()
      {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
         $user = new user();
         $school_id = Auth::getSchool_id();

         $crumbs[] = ['Dashboard',''];
         $crumbs[] = ['Staff','users'];

         $data = $user->query("select * from users where school_id = :school_id && rank not in ('student') order by id desc", ['school_id'=>$school_id]);
         $this->view('users',[
          'rows'=>$data,
          'crumbs'=>$crumbs
        ]);
      }
}
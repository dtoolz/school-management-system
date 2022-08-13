<?php

class Single_class extends Controller
{
    function index($id = '') 
    {
        $user = new User();
        $row = $user->first('user_id', $id);
        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['Classes','classes'];

        if($row)
        {
           $crumbs[] = [$row->class,'class'];
        }
        
        $this->view('single-class', [
            'row' => $row,
            'crumbs' => $crumbs
        ]);
    }
}
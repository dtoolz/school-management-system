<?php

class Single_class extends Controller
{
    function index($id = '') 
    {
        $classes = new Classes_model();
        $row = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['classes','classes'];
        if($row)
        {
           $crumbs[] = [$row->class,'class'];
        }
        
        $page_tab = isset($_GET['tab']) ? $_GET['tab'] : 'lecturers';
        $results = false;
        if($page_tab == 'lecturer-add' && count($_POST) > 0)
        {
             $user = new User;
             $name = "%".$_POST['name']."%";
             $query = "select * from users where (firstname like :fname || lastname like :lname) && rank = 'lecturer' limit 10";
             $results = $user->query($query,['fname'=>$name,'lname'=>$name]);
        }
        $this->view('single-class', [
            'row' => $row,
            'crumbs' => $crumbs,
            'page_tab' => $page_tab,
            'results' => $results
        ]);
    }
}
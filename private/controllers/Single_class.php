<?php

class Single_class extends Controller
{
    function index($id = '') 
    {
        $errors = array();
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $classes = new Classes_model();
        $row = $classes->first('class_id', $id);

        $crumbs[] = ['Dashboard',''];
        $crumbs[] = ['classes','classes'];
        if($row)
        {
           $crumbs[] = [$row->class,'class'];
        }
        
        $page_tab = isset($_GET['tab']) ? $_GET['tab'] : 'lecturers';
        $lect = new Lecturers_model();
        $results = false;
       
        if($page_tab == 'lecturer-add' && count($_POST) > 0)
        {
             if(isset($_POST['search']))
             {
                if(trim($_POST['name']) != "")
                {
                    //searching a lecturer
                    $user = new User;
                    $name = "%".trim($_POST['name'])."%";
                    $query = "select * from users where (firstname like :fname || lastname like :lname) && rank = 'lecturer' limit 10";
                    $results = $user->query($query,['fname'=>$name,'lname'=>$name]);
                } else 
                {
                    $errors[] = "search cannot be empty";
                }
             } else 
             if(isset($_POST['selected']))
             {
                //check if lecturer already exists before adding to class
                $query = "select id from class_lecturers where user_id = :user_id && class_id = :class_id limit 1";
                if(!$lect->query($query,[
                    'user_id' => $_POST['selected'],
                    'class_id' => $id
                ])) 
                {
                //adding a lecturer 
                    $arr = array();
                    $arr['user_id'] = $_POST['selected'];
                    $arr['class_id'] = $id;
                    $arr['disabled'] = 0;
                    $arr['date']     = date("Y-m-d H:i:s");

                    $lect->insert($arr);
                    $this->redirect('single_class/'.$id.'?tab=lecturers');
                } else 
                {
                    $errors[] = "the lecturer is already a member of this class";
                }
             }
        } else
        if ($page_tab == 'lecturers')
        {
            //display added lecturers
            $lecturers = $lect->where('class_id',$id);
            $data['lecturers']       = $lecturers;
        }

            $data['row']       = $row;
            $data['crumbs']    = $crumbs;
            $data['page_tab']  = $page_tab;
            $data['results']   = $results;
            $data['errors']   = $errors;
        
            $this->view('single-class', $data);
    }
}
<?php

class Single_class extends Controller
{
    function index($id = '') 
    {
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
        $results = false;
        if($page_tab == 'lecturer-add' && count($_POST) > 0)
        {
             if(isset($_POST['search']))
             {
                //searching a lecturer
                $user = new User;
                $name = "%".trim($_POST['name'])."%";
                $query = "select * from users where (firstname like :fname || lastname like :lname) && rank = 'lecturer' limit 10";
                $results = $user->query($query,['fname'=>$name,'lname'=>$name]);
             } else 
             {
                //adding a lecturer
                if(isset($_POST['selected']))
                {
                    $arr = array();
                    $arr['class_id'] = $id;
                    $arr['disabled'] = 0;
                    $arr['date']     = date("Y-m-d H:i:s");

                    $lect = new Lecturers_model();
                    $lect->insert($arr);
                    $this->redirect('single-class/'.$id.'?tab=lecturers');
                }
             }
        }
        $this->view('single-class', [
            'row' => $row,
            'crumbs' => $crumbs,
            'page_tab' => $page_tab,
            'results' => $results
        ]);
    }
}
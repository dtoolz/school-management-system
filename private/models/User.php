<?php

class User extends Model 
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'rank',
        'password',
        'date',
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'
     ];

    public function validate($DATA)
    {
         $this->errors = array();

         //letters allowed in firstname
         if(empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname']))
         {
              $this->errors['firstname'] = "only letters allowed in firstname";
         }

         //letters allowed in lastname
         if(empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname']))
         {
              $this->errors['lastname'] = "only letters allowed in lastname";
         }
        
         //only valid email is allowed
         if(empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL))
         {
              $this->errors['email'] = "Email is not valid";
         }
         
         //check if email exists
         if($this->where('email', $DATA['email']))
         {
              $this->errors['email'] = "Email has already been used";
         }
         
         //check for gender
         $genders = ['female', 'male'];
         if(empty($DATA['gender']) || !in_array($DATA['gender'], $genders))
         {
              $this->errors['gender'] = "gender is not valid";
         }
         
         //check for rank
         $ranks = ['student', 'registrar', 'lecturer', 'admin', 'super_admin'];
         if(empty($DATA['rank']) || !in_array($DATA['rank'], $ranks))
         {
              $this->errors['rank'] = "rank is not valid";
         }
         
         //check for passwords match
         if(empty($DATA['password']) || $DATA['password'] != $DATA['password2'])
         {
              $this->errors['password'] = "the passwords do not match";
         }
         
         //check for passwords length
         if(strlen($DATA['password']) <= 7)
         {
              $this->errors['password'] = "password should be more than seven characters";
         }

         if(count($this->errors) == 0)
         {
             return true;
         }
         return false;
    }
    
    public function make_user_id($data)
    {
        $data['user_id'] = $this->random_string(60);
        return $data;
    }

    public function make_school_id($data)
    {
        if(isset($_SESSION['USER']->school_id))
        {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    private function random_string($length)
    {
        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $text = "";
    
        for($x = 0; $x < $length; $x++)
        {
    
            $random = rand(0,61);
            $text .= $array[$random];
        }
    
        return $text;
    }

}
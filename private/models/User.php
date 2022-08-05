<?php

class User extends Model 
{
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
         if(empty($DATA['email']) || filter_var($DATA['email'],FILTER_VALIDATE_EMAIL))
         {
              $this->errors['email'] = "Email is not valid";
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

         if(count($this->errors) == 0)
         {
             return true;
         }
         return false;
    }
}
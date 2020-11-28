<?php
namespace App\controller;
use App\support\Database;

class Staff extends Database{

    public function createStaff($name,$email,$cell,$unique_name){
        $data = $this -> create("INSERT INTO staffs (name,email,cell,photo)VALUES('$name','$email','$cell','$unique_name')");
        if($data){
            return true;
        }else{
            return false;
        }
    }


    public function allstaff(){
      $data = $this->all('staffs');
        return $data;




    }
}





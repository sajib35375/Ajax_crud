<?php
namespace App\support;
use mysqli;
abstract class Database{
 private $host = 'localhost';
 private $usr = 'root';
 private $pass = '';
 private $db = 'ajax';
 private $connection;

 private function connection(){
  return $this -> connection = new mysqli($this->host,$this->usr,$this->pass,$this->db);
 }
 protected function create($sql){
  $data = $this -> connection() -> query($sql);

  if ($data){
      return true;
  }else{
      return false;
  }
 }

    public function all($table){
     $data = $this -> connection() ->query("SELECT * FROM $table");
     if ($data){
         return true;
     }else{
         return false;
     }
    }


 }



<?php

class User{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function checkUser($user_name, $user_pass, $table= 'user'){
      $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_name = '$user_name' AND user_pass = '$user_pass'");

       $rows = mysqli_num_rows($result);
       if($rows == 1){
         $getId = $this->db->con->query("SELECT user_id FROM {$table} WHERE user_name = '$user_name' AND user_pass = '$user_pass'");

         $row = mysqli_fetch_row($getId);

         $_SESSION['user_id'] = $row[0];

         header('Location: home_page.php');
       }
    }

    public function createUser($user_name, $user_pass){

          $result = $this->db->con->query("INSERT INTO user (user_name, user_pass) VALUES ('$user_name', '$user_pass') ");
          

    }

}
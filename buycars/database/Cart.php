<?php


class Cart{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function insertToCart($user_id, $prod_id, $table = "cart"){
        $query_string = "INSERT INTO {$table} (user_id, prod_id) VALUES ('$user_id', '$prod_id')";

        $result = $this->db->con->query($query_string);

        if($result){    
            header('Location: home_page.php');
        }

    }

    public function checkIfExist($prod_id, $user_id, $table="cart"){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE prod_id = '$prod_id' AND user_id = '$user_id'");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        if(empty($resultArray)){
            return 0;
        }else{
            return 1;
        }

    }

    public function deleteFromCart($cart_id, $table="cart"){

         $result = $this->db->con->query("DELETE FROM {$table} WHERE cart_id = '$cart_id'");

         if($result){
            header('Location: cart.php');
         }
    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += $item;
            }
            return sprintf('%.2f', $sum);
            
        }
    }

    public function getUserCartProducts($user_id, $table="cart"){
          $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id = '$user_id'");

          $resultArray = array();

          while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
              $resultArray[] = $item;
          }

          return $resultArray;

    }

}
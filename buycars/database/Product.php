<?php



class Product{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getProducts($table="product"){
      $result = $this->db->con->query("SELECT * FROM {$table}");

      $resultArray = array();

      while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $resultArray[] = $item;
      }

      return $resultArray;

    }

    public function getProduct($prod_id ,$table="product"){
         $result = $this->db->con->query("SELECT * FROM {$table} WHERE prod_id = '$prod_id'");

         $resultArray = array();

         while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
             $resultArray[] = $item;
         }

         return $resultArray;
    }

    public function addProduct($prod_brand, $prod_name, $prod_price, $prod_image){
        $query_string = "INSERT INTO product (prod_brand, prod_name, prod_price, prod_image) VALUES ('$prod_brand', '$prod_name', '$prod_price', '$prod_image')";

        $result = $this->db->con->query($query_string);

        if($result){    
            header('Location: home_page.php');
        }

    }

    public function getCartProducts($user_id){
        $result = $this->db->con->query("SELECT cart.*, product.* FROM cart INNER JOIN product ON cart.prod_id = product.prod_id WHERE cart.user_id = '$user_id'");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
        
    }

    public function deleteProduct($prod_id, $table="product"){
         $result = $this->db->con->query("DELETE FROM {$table} WHERE prod_id = '$prod_id'");

         if($result){
            header('Location: home_page.php');
         }
    }

    public function filterProducts($name_filter, $brand_filter){

        

        if(empty($name_filter)){
            $result = $this->db->con->query("SELECT * FROM product WHERE prod_brand IN ('".$brand_filter."')");
        }else if(empty($brand_filter)){
            $result = $this->db->con->query("SELECT * FROM product WHERE prod_name IN('".$name_filter."')");
        }else{
            $result = $this->db->con->query("SELECT * FROM product WHERE prod_name IN('".$name_filter."') AND prod_brand IN ('".$brand_filter."')");
        }

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

   
    

}
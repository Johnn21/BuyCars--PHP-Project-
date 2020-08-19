<?php
require("functions.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit_log'])){
        $user->checkUser($_POST['name'], $_POST['password']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 

    <!-- Import style.css-->
    <link rel="stylesheet" href="style.css">

    

</head>
<body>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light color-red-bg">
        <a class="navbar-brand font-ubuntu font-size-20" style="color:white" href="home_page.php">BuyCars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="search-container">
            <form action="#" method="post" class="mt-2">
                <input  type="text" placeholder="Username.." name="name">
                <input type="password" placeholder="Password.." name="password">
                <button type="submit" name="submit_log" >Submit</button>
            </form>
        </div>
        <span class="text-white mt-1 font-size-16 font-ubuntu" style="padding-left:800px">Don`t have an account?</span>
        <form action="register.php" class="px-3">
           <button class="btn btn-warning font-ubuntu font-size-16 text-center">Register Now!</button>
        </form>
      </nav>
    <!-- Navbar-->

        <div class="container " style="margin-top : 30px;">
            <div class="row">
                <div class="col">
                    <img src="./assets/ferrari.jpg" alt="ferrari" class="img-fluid">
                </div>
                <div class="col">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis odit beatae ea nobis voluptates? Nihil fuga esse expedita sequi quas eius animi nostrum repellat nemo ullam? Non ad hic nobis!</h3>
                </div>
            </div>
            <div class="row" style="margin-top : 50px">
            <div class="col">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis odit beatae ea nobis voluptates? Nihil fuga esse expedita sequi quas eius animi nostrum repellat nemo ullam? Non ad hic nobis!</h3>
                </div>
                <div class="col-16">
                    <img src="./assets/lambo.jpg" alt="lambo" class="img-fluid">
                </div>
            </div>

        </div>
    
        <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
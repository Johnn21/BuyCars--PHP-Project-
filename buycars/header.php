<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Cars</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 

     <!-- Import style.css-->
     <link rel="stylesheet" href="style.css">

     <!--Font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
     
     <?php 
    //require mysql connection
     require("functions.php");

    ?>

</head>
<body>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light color-red-bg">
        <a class="navbar-brand font-ubuntu font-size-20" style="color:white" href="home_page.php">BuyCars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav m-auto"> 
            <li class="nav-item active">
              <a class="nav-link font-ubuntu font-size-16" style="color:white" href="home_page.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-ubuntu font-size-16" style="color:white" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-ubuntu font-size-16" style="color:white;" href="addProduct.php">Add a Car</a>
            </li>
          </ul>
          <a href="#" class="text-white mr-3 py-2">
             <i class="fas fa-user-circle font-size-20"></i>
             <span>My Account</span>
          </a>
          <a href="cart.php" class="py-2 rounded-pill">
            <span class="font-size-20 px-2 text-white">
                          <i class="fas fa-shopping-cart"></i>
            </span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($cart->getUserCartProducts($_SESSION['user_id'],)); ?></span>
          </a>
      </nav>
    <!-- Navbar-->

    
    <main id="main=site">
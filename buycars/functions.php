<?php 

session_start(); 

//require mysql connection
require('database/DBController.php');

require('database/User.php');

require('database/Product.php');

require('database/Cart.php');

$db = new DBController();

$user = new User($db);

$product =new Product($db);

$cart = new Cart($db);


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
     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

     <?php 
    //require mysql connection
     require("functions.php");

     ob_start();

    ?>

    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var name = $("#nameField").val();
                var pass = $("#passField").val();
                var confirmPass = $("#confirmField").val();
                var submit = $("#submit_registration").val();
                
                if(name != ""){
                    $.ajax({
                        url: 'Templates/register.php',
                        type: 'post',
                        data:{
                            name: name,
                            pass: pass,
                            confirmPass: confirmPass,
                            submit: submit
                        },
                        success: function(response){
                            var msg = "";
                            if(response == 1){
                                msg ="You are now registered!";
                                $("#nameField").val('');
                                $("#passField").val('');
                                $("#confirmField").val('');
                                $("#registered").html(msg);
                                $("#message").html("");
                                $("#homeButton").show();
                            }else if(response == 2){
                                msg = "Fill all the fields!";
                                $("#message").html(msg);
                                $("#registered").html("");
                                $("#homeButton").hide();
                            }else if(response == 3){
                                msg = "Passwords do not match!";
                                $("#message").html(msg);
                                $("#registered").html("");
                                $("#homeButton").hide();
                            }
                           
                        }
                    })
                }
            });
        });
    </script>

</head>
   
   
   <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light color-red-bg">
        <a class="navbar-brand font-ubuntu font-size-20" style="color:white" href="index.php">BuyCars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- Navbar-->

<body>
    
 <div class="container">
    <form method="post" action="Templates/register.php" class="py-5">
        <label class="font-cabin font-size-16" for="nameField">User Name:</label><br>
        <input style="width:300px;" type="text" id="nameField" name="nameField" placeholder="Enter Name..."><br><br>
        <span id = "errorName"></span>
        <label class="font-cabin font-size-16" for="passField">Password:</label><br>
        <input style="width:300px;" type="password" id="passField" name="passField" placeholder="Enter Password..."><br><br>
        <span id = "errorPass"></span>
        <label class="font-cabin font-size-16" for="confirmField">Confirm Password:</label><br>
        <input style="width:300px;" type="password" id="confirmField" name="confirmField" placeholder="Confirm Password..."><br>
        <div>
            <br><br>
  	    	<button type="submit" name="submit" class="btn btn-danger" id="submit_registration" name="upload">Submit</button>
        </div>
        <p class="message py-5 font-oswald" id="message" style="color:red;"></p>
        <p class="registered py-5 font-oswald" id="registered" style="color:green;"></p>
        
         <a href="home_page.php" class="btn btn-success font-ubuntu font-size-16 text-center" id="homeButton" style="display: none;">Home Page</a>
       

    </form>
      
</div>
<p id="demo"></p>

</body>
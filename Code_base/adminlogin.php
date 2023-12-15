<?php
    $auname = $_POST['auname'];
    $apass = $_POST['apass'];
    $error = "";
    $success = "";
    if(isset($_POST['submit'])){
      if($auname == "admin"){
        if($apass == "password"){
          $error = "";
          $success = "Welcome";
        }
        else{
          $error = "Invalid Password";
          $success = "";
        }
        else{
          $error = "Invalid username";
          $success = "";
        }
      }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="style2.css">

    <title>Admin Login | Tyche Corp.</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 whitecolor">
            <h1 >Login to <strong>Tyche Corp.'s Website</strong></h1>
            <p class="mb-4 whitecolor"><b>This page is exclusively for Admins only. Users can navigate to user login</b></p>
            <form action="adprofile.html" >
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" name="auname" class="form-control" placeholder="Ex: johndoe@gmail.com" id="username" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="apass" class="form-control" placeholder="********" id="password" required>
              </div>
              <p><?php echo $error; ?></p><p><?php echo $success; ?></p> 
              <div class="d-flex mb-5 align-items-center">
                
              </div>
              
              <!--Button must be here for sign in authentication-->
              <input type="submit" value = "Log In" class="btn btn-block btn-outline-danger">
            </form>
            
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
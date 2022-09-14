<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Form</title>

    <!-- Bootstrap CDN -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/fa22768282.js"></script>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/register.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <section class="container-fluid bg">
      <section class="row justify-content-center">
        <img src="./assets/Logo.png" alt="" />
      </section>
      <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
          <form class="form-container" action="register.php" method="post">
            <div class="form-group">
              <h2>Create Account</h2>
              <label for="exampleInputEmail1">Your name</label>
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter name"
                name = "name"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input
                type="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter email"
                name = "email"
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                placeholder="Password"
                name = "pwd"
              />
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-submit" name="signup">
              Submit
            </button>
            <!-- <input type="submit" name = ok> -->
          </form>
          <div class="a-divider a-divider-break">
            <h5>Already a Member?</h5>
          </div>
          <div class="box">
            <button class="box2" type="submit">
              blah
            </button>
          </div>
          <a href="login.php" style="text-decoration:none"> <button
            type="submit"
            class="btn btn-primary btn-block btn-create-account"
          >
            Sign In
          </button></a>

        </section>
      </section>
    </section>
  </body>
</html>




<?php

if(isset($_POST['signup'])){

  require 'includes/dbh.inc.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  if(empty($name) || empty($email) || empty($password)){
    header("Location: register.php?error=emptyfields&name=".$name."&email=".$email);
    exit();
  }

  else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)){
    header("Location: register.php?invalidmailname");
    }

  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: register.php?invalidmail&name=".$name);
      exit();
  }

  else if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
    header("Location: register.php?invalidusername&email=".$email);
      exit();
  }

  else{
    $sql = "SELECT uname FROM account WHERE uname=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location: register.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"s", $name);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0){
        header("Location: register.php?error=usertaken&email=".$email);
        exit();
      }
      else{
        $sql = "INSERT INTO account (uname,email,pwd) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: register.php?error=sqlerror");
          exit();
        }
        else{
          // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt,"sss", $name,$email,$password);
          mysqli_stmt_execute($stmt);
          header("Location: login.php");
          exit();
        }
      }
    }
  }
}


?>
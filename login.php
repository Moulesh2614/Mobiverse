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
    <link rel="stylesheet" href="./css/login.css" />

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
          <form class="form-container" action="login.php" method="post">
            <div class="form-group">
              <h2>Login</h2>
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
                name = "pwd1"
              />
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-submit" name="submit">
              Submit
            </button>
          </form>
          <div class="a-divider a-divider-break">
            <h5>New to Mobiverse?</h5>
          </div>
          <a href="register.php" style="text-decoration:none"> <button
            type="submit"
            class="btn btn-primary btn-block btn-create-account"
          >
            Create Your Mobiverse Account
          </button></a>

        </section>
      </section>
    </section>
  </body>
</html>


<?php
$error = '';
if(isset($_POST['submit'])){

  require 'includes/dbh.inc.php';


  $email = $_POST['email'];
  $password = $_POST['pwd1'];

  if(empty($email) || empty($password)){
    header("Location: login.php?error=emptyfields");
    exit();
  }

  // else{
  //   $sql = "SELECT * FROM account WHERE email=?;";
  //   $stmt = mysqli_stmt_init($conn);
  //   if(!mysqli_stmt_prepare($stmt,$sql)){
  //     header("Location: login.php?error=sqlerror");
  //     exit();
  //   }
  //   else{
  //     mysqli_stmt_bind_param($stmt,"s", $email);
  //     mysqli_stmt_execute($stmt);
  //    $result = mysqli_stmt_get_result($stmt);

  //     if($row = mysqli_fetch_assoc($result)){

  //       $pwdCheck = password_verify($password, $row['pwd']);
  //       if($pwdCheck == false){
  //         header("Location: login.php?error=wrongpwd1");
  //         exit();
  //       }
  //       else if($pwdCheck == true){
  //         session_start();
  //         $_SESSION['userId'] = $row['id'];
  //         $_SESSION['userName'] = $row['uname'];

  //         header("Location: index.php?login=success");
  //         exit();
  //       }
  //       else{
  //         header("Location: login.php?error=wrongpwd");
  //         exit();
  //       }
  //     }
  //     else{
  //       header("Location: login.php?error=nouser");
  //       exit();
  //       }
  //     }
  //   }

  else{
    $query = mysqli_query($conn,"SELECT * FROM account WHERE email='$email' AND pwd='$password'");

    $rows = mysqli_num_rows($query);

    if($rows == 1){
      header("Location: index.php");

      session_start();
          $_SESSION['userId'] = $row['id'];
          $_SESSION['userName'] = $row['uname'];
    }
    else{
      $error = "Error";
    }
  }
  }



?>

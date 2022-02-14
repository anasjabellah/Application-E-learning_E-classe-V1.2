<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(isset($_POST["email"]) && isset($_POST["password"])){


      require_once "data/config.php";

      $email = $_POST["email"];
      $password = hash('sha256', $_POST["password"]) ;
       
       $query = "SELECT *  FROM comptes WHERE email = '$email'  AND  password = '$password' ";
       $user = mysqli_query($link,$query);

 
       if( mysqli_num_rows($user) != 0 ){
           session_start();
           $rsl = mysqli_fetch_assoc($user);
           $_SESSION['id'] = $rsl['id'];
           $_SESSION['username'] = $rsl['username'];
           $_SESSION['gmail'] = $rsl['email'];
           header('Location: index.php');
       }

    }else{
      $erre = '<div class="alert alert-danger" role="alert">
               A simple danger alert—check it out!
             </div>';
    }
          
  }




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Sign In</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/login.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-body" style="width: 100%; height: 100vh;">
    
    <main class="d-flex justify-content-start">
        <div class="container-fluid">
          <div class="d-flex justify-content-center">
              <div class="col-md-4 shadow col-sm-12 p-4 bg-white" style="border-radius: 20px;  position: absolute ;top: 20%;">
                <div class="border-start border-info border-5 col-12 mb-3 ms-3">
                  <h1 class="ms-2">E-classe</h1>
                </div>
                  <div class="text-center">
                      <h2 class="text-uppercase h4 mt-4">Sign In</h2>
                      <p class="text-muted small">
                          Enter your credentials to access your account 
                      </p>
                  </div>
                  <form method="POST">
                      <div class="p-4">
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control" placeholder="Enter your email" id="email" name="email">
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
                          </div>

                          <div class="d-grid gap-2">
                            <input class="btn btn-info text-capitalize text-white" type="submit" value="SIGN IN">
                          </div>


                          <div class="d-flex justify-content-around mt-2">
                            <p class=" text-muted ">
                              Forgot your password?
                            </p>
                            <a class="bg-link" href="#">Reset password</a>
                          </div>

                          <?php  if(isset($erre)){ echo  $erre ; }   ?>
                          
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </main>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
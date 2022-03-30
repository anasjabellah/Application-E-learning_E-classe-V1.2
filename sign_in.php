<?php
    require_once "data/config.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['save'])){
      if(!empty($_POST['UserName']) && !empty($_POST['e_password']) && !empty($_POST['email'])){
        $userName = $_POST['UserName'];
        $password = hash('sha256', $_POST["e_password"]) ;
        $email= $_POST['email'];

        $query = "INSERT INTO comptes(username, password, email) VALUES( '$userName', '$password','$email')";
        mysqli_query($link,$query);
        header('Location: login.php');
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E-class_Sign_Up</title>
    <link rel="stylesheet" href="css/sign_in.css">
</head>
<body>

    <div class="container"  >
        <div class=" card bg-white" style="max-width:600px; margin: auto;"  >
            <div class="" style="border: none;">
              <p class="border-start ms-5 border-4 border-info my-3" style="font-style: normal; font-weight: bold; font-size: 32px; line-height: 39px;"> E-classe</p>
            </div>

            <form class="card-body" method="POST" id="form">
                    <h5 class="card-title text-center">SIGN IN</h5>
                    <p class="card-text text-center">Enter your credentials to create a new account</p>
                    <div class="mb-3 mt-3 ">
                      <label for="eml" style="color: gray;"  id="label_input_email">Email</label>
                      <input type="text" class="form-control form-control-lg" id="email" placeholder="Enter your email" name="email" style="opacity: 0.5;">
                      <div class="text-danger errorEmail"></div>
                    </div>
                    <div class="mb-3 mt-3 ">
                      <label for="eml" style="color: gray;"  id="label_input_UserName">UserName:</label>
                      <input type="text" class="form-control form-control-lg" name="UserName" id="username" placeholder="Enter your name" name="email" style="opacity: 0.5;">
                      <div class="text-danger errorName"></div>
                    </div>
                    <div class="mb-3 ">
                      <label for="pwd" style="color: gray;" id="label_input_Password">Password:</label>
                      <input type="password" class="form-control form-control-lg" name="e_password" id="e_password" placeholder="Enter your password" name="e_password" style="opacity: 0.5;">
                      <div class="text-danger errorPassword"></div>
                    </div>
                  <input type="submit" value="SIGN up" id="submit"  name="save" class="btn btn-secondary btn-lg container" style="background-color: #00C1FE; border: none;" > 
                  <a href="login.php" class="btn btn-secondary text-decoration-none mt-3" >Cancel</a>
            </form>


          
        </div>
     </div>


     <script src="js/vali.js"></script>
</body>
</html>
<?php

    require_once "data/config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $image = trim($_POST["image"]);
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $enroll_umbern = trim($_POST["enroll_umbern"]);
        $date_of_admission =trim($_POST["date_of_admission"]);

        $query = "INSERT INTO students(image, name, email, phone ,enroll_umbern ,date_of_admission) values('$image','$name', '$email','$phone ' ,'$enroll_umbern' , '$date_of_admission')";
        mysqli_query($link,$query);
            
    }
?>



 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>


                    <form action="" method="post">

                       <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>email</label>
                            <textarea name="email" class="form-control"></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name="phone" class="form-control " >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>enroll_umbern</label>
                            <input type="text" name="enroll_umbern" class="form-control" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>date_of_admission</label>
                            <input type="text" name="date_of_admission" class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
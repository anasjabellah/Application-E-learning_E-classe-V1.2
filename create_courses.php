<?php

    require_once "data/config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = trim($_POST["name"]);
        $time = trim($_POST["time"]);
        $signed_by = trim($_POST["signed_by"]);
        $signed_at = trim($_POST["signed_at"]);

        $query = "INSERT INTO courses(name, time, signed_by, signed_at) values('$name','$time', '$signed_by','$signed_at ')";
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

                    <form action="" method="post">


                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" id="name" class="form-control"  >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>time</label>
                            <input name="time" class="form-control" id="time"  ></input>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>signed by</label>
                            <input type="text" name="signed_by" class="form-control id="signed_by"  >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>signed at</label>
                            <input type="text" name="signed_at" class="form-control" id="signed_at" >
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
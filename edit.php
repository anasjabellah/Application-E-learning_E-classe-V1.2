<?php

    require_once "data/config.php";

    $id = $_GET['id'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = trim($_POST["name"]);
        $Payment_Schedule = trim($_POST["Payment_Schedule"]);
        $Bill_Number = trim($_POST["Bill_Number"]);
        $Amount_Paid = trim($_POST["Amount_Paid"]);
        $Balance_amount =trim($_POST["Balance_amount"]);
        $Date = trim($_POST["Date"]);

        $query = "UPDATE `payment_details` SET `name`='$name',`payment_schedule`='$Payment_Schedule',`bill_number`='$Bill_Number',`amount_paid`='$Amount_Paid',`Balance_amount`='$Balance_amount',`Date`='$Date' WHERE id ='$id'";
        mysqli_query($link,$query);

            
    }


    $query = "SELECT * FROM `payment_details` WHERE id ='$id'";
    $result = $link->query($query);
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc(); 
    }
    

    $link->close();

?>



 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edite Record</title>
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
                    <h2 class="mt-5">Edite  Record</h2>
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php  echo $row["name"] ?>" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Payment Schedule</label>
                            <input name="Payment_Schedule" class="form-control"  value="<?php  echo $row["payment_schedule"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Bill Number</label>
                            <input type="text" name="Bill_Number" class="form-control "   value="<?php  echo $row["bill_number"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Amount Paid</label>
                            <input type="text" name="Amount_Paid" class="form-control"   value="<?php  echo $row["amount_paid"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Balance amount</label>
                            <input type="text" name="Balance_amount" class="form-control"  value="<?php  echo $row["Balance_amount"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" name="Date" class="form-control"  value="<?php  echo $row["Date"] ?>">
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
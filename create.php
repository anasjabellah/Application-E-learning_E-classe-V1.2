<?php

    require_once "data/config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = trim($_POST["name"]);
        $Payment_Schedule = trim($_POST["Payment_Schedule"]);
        $Bill_Number = trim($_POST["Bill_Number"]);
        $Amount_Paid = trim($_POST["Amount_Paid"]);
        $Balance_amount =trim($_POST["Balance_amount"]);
        $Date = trim($_POST["Date"]);

        $query = "INSERT INTO payment_details(name, payment_schedule, bill_number , amount_paid,Balance_amount, Date) values('$name', '$Payment_Schedule ',' $Bill_Number ' ,'$Amount_Paid ' , '$Balance_amount ',' $Date')";
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
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Payment Schedule</label>
                            <textarea name="Payment_Schedule" class="form-control"></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Bill Number</label>
                            <input type="text" name="Bill_Number" class="form-control " >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Amount Paid</label>
                            <input type="text" name="Amount_Paid" class="form-control" >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Balance amount</label>
                            <input type="text" name="Balance_amount" class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" name="Date" class="form-control">
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
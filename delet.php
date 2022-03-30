<?php



    require_once "data/config.php";

    $id = $_GET['id'];
    $query = "DELETE FROM `payment_details` WHERE id ='$id'";
    mysqli_query($link,$query);
    header("location: payment.php");

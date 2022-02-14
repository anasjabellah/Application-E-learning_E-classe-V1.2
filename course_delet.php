<?php



    require_once "data/config.php";

    $id = $_GET['id'];
    $query = "DELETE FROM `courses` WHERE id ='$id'";
    mysqli_query($link,$query);
    header("location: courses.php");

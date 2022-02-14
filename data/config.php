<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'e_classe_db');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// function my_query($sql){

//     global $link ;
//     if(!$result = $link->query($sql)){
//         die("ERROR: Could not connect. ");
//     };
//     return $result ;

//     $link->close();
// }

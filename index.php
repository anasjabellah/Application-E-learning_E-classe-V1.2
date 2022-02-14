<?php 
    include 'test.php';
    require_once "data/config.php";
    
    $compt="SELECT * FROM students";
    $count=$link->query($compt);
    $rowcount=mysqli_num_rows($count);
  
    $somme = "SELECT SUM(amount_paid) as somme FROM payment_details";
  
    if(!$result = $link->query($somme))
    {
      die("Connection failed: " . $link->error);
    }
    else
    {
      $somme = $result->fetch_assoc();
    }
  
  
    $compt="SELECT * FROM courses";
    $count=$link->query($compt);
    $coursesrows=mysqli_num_rows($count);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DashbordAdmin</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/Dashbord.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            
            <?php  include "inc/sidebars.php" ;    ?>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->

                <?php  include "inc/nav.php" ;    ?>

                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">

                        <div class="row p-3 pt-4">

                        <div class="col m-3 rounded-3 h-auto cart-info-1 p-4">
                            <a href="">
                            <i class="bi  bi-mortarboard fs-2"></i>
                            <p class="fs-5 text-secondary">students</p>
                            <p class="fs-2 fw-bold text-end" >243</p>
                            </a>
                        </div>

                        <div class="col m-3 rounded-3 h-auto cart-info-2 p-4">
                            <a href="">
                            <i class="bi  bi-bookmark fs-2"></i>
                            <p class="fs-5 text-secondary">Course</p>
                            <p class="fs-2 fw-bold text-end" ><?php echo $coursesrows ; ?></p>
                            </a>
                        </div>

                        <div class="col m-3 rounded-3 h-auto cart-info-3 p-4 ">
                            <a href="">
                            <i class="bi  bi-sliders fs-2"></i>
                            <p class="fs-5 text-secondary">Payments</p>
                            <p class="fs-3 fw-bold text-end" ><?php echo $somme['somme'] ; ?><span class="fs-5">DHS</span></p>
                            </a>
                        </div>

                        <div class="col m-3 rounded-3 h-auto cart-info-4 p-4">
                            <a href="">
                            <i class="bi bi-person fs-2"></i>
                            <p class="fs-5 p-user">Users</p>
                            <p class="fs-2 fw-bold text-end" >3</p>
                            </a>
                        </div>


                        </div>

                    </div>

                    
                </div>
           </div>
       </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

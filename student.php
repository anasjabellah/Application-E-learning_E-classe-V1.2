<?php

    require_once "data/config.php";

    if(isset($_POST['save'])){

        // $image = trim($_POST["image"]);
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $enroll_umbern = trim($_POST["number"]);
        $date_of_admission = trim($_POST["date"]);

        $query = "INSERT INTO students(name, email, phone ,enroll_umbern ,date_of_admission) values('$name', '$email','$phone' ,'$enroll_umbern' , '$date_of_admission')";
        mysqli_query($link,$query);     
      header('location: student.php');
    }
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
        <link rel="stylesheet" href="css/student.css">
    </head>

    <?php 
    
      include 'test.php';
      require_once "data/config.php";
      $sql = "SELECT * FROM students ";
      $result = $link->query($sql);

    ?>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php  include "inc/sidebars.php" ;    ?>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php  include "inc/nav.php" ;    ?>

                <!-- <a href="create_students.php">create students.</a> -->
                <nav class="navbar navbar-expand-lg pt-3">
                <div class="container-fluid">
                    <h1 class="fs-3">Students List</h1>
                    <form class="d-flex px-3">
                      <i class="bi bi-arrows-expand fs-5 me-3"></i>
                      <button class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="button" onclick="moddalForm()">ADD NEW STUDENT</button>
                    </form>
                </div>
            </nav>

                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">
                      
        <div class="row p-3 pt-4 overflow-auto">

          <table class="table table-borderless spacing-table ">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col" class="text-capitalize">name</th>
                  <th scope="col" class="text-capitalize">email</th>
                  <th scope="col" class="text-capitalize">phone</th>
                  <th scope="col" class="text-capitalize">enroll number</th>
                  <th scope="col" class="text-capitalize text-nowrap">date of admission</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

              <?php   
                              

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><th><img sre=".$row["image"]."></th>
                    <th>".$row["name"]."</th>
                    <th>".$row["email"]."</th>
                    <th>".$row["phone"]."</th>
                    <th>".$row["enroll_umbern"]."</th>
                    <th>".$row["date_of_admission"]."</th>
                    <th><a href=\"edit_students.php?id=". $row["id"]."\"><i class='bi bi-pen-fill text-info fs-3 me-3'></i></a> 
                    <a href=\"delet_students.php?id=". $row["id"]."\" ><i class='bi bi-archive-fill text-info fs-3 me-3'></i></a></th><tr>";
                  }
                } else {
                  echo "0 results";
                }
                              
              ?>
    

              </tbody>
            </table>

      </div>

                    </div>


                </div>
           </div>
       </div>

       <div id="modelparent" class="parent">
        <div class="models">
        <form method="POST">
        <button onclick="close()" class="btnclose"><i class="bi bi-x-circle fs-3"></i></button>

        <div class="form-group mb-3">
        <label for="Name ">Name</label>
        <input type="name" class="form-control mt-2" id="name" name="name" placeholder="Enter name">
      </div>

        <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter email">
      </div>

      <div class="form-group mb-3">
        <label for="phone">Phone</label>
        <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Enter phone">
      </div>

      <div class="form-group mb-3">
        <label for="number">Enroll Number</label>
        <input type="text" class="form-control mt-2" id="number" name="number" placeholder="Enter number">
      </div>
      <div class="form-group mb-3">
        <label for="number">Date of Admission</label>
        <input type="text" class="form-control mt-2" id="date" name="date" placeholder="Enter date">
      </div>

      <button type="submit" class="btn btn-primary" name="save">Submit</button>
      <button type="submit" class="btn btn-secondary ml-2" onclick="close_()">Cancel</button>

    </form> 

    </div>
    </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

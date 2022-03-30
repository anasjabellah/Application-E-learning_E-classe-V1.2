<?php

    require_once "data/config.php";

    if(isset($_POST['save'])){

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
    <body>

    <?php 

      include 'test.php';
      require_once "data/config.php";
      $sql = "SELECT * FROM courses ";
      $result = $link->query($sql);
      

    ?>

        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php  include "inc/sidebars.php" ;    ?>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php  include "inc/nav.php" ;    ?>
                
                 
                <div class="container-fluid">
                    

                           <!-- Button trigger modal -->
                           <nav class="navbar navbar-expand-lg pt-3">
                <div class="container-fluid">
                    <h1 class="fs-3">Payment Details</h1>
                    <form class="d-flex px-3">
                      <i class="bi bi-arrows-expand fs-5 me-3"></i>
                      <button class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="button" onclick="moddalFormCourse()">ADD NEW Course</button>
                    </form>
                </div>
            </nav>
            
                    <div class="row p-3 pt-4 overflow-auto">
                        <table class="table table-striped border-top ">
                            <thead>
                              <tr>
                                <th scope="col">name</th>
                                <th scope="col">time</th>
                                <th scope="col">signed by</th>
                                <th scope="col">signed at</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              
                            <?php   
                              

                              if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  echo "<tr><th>".$row["name"]."</th>
                                  <th>".$row["time"]."h</th>
                                  <th>".$row["signed_by"]."</th>
                                  <th>".$row["signed_at"]."</th>
                                  <th> <a href=\"course_edit.php?id=". $row["id"]."\"><i class='bi bi-pen-fill text-info fs-3 me-3'></i></a>
                                   <a class='btn-confirm' href=\"course_delet.php?id=". $row["id"]."\" ><i class='bi bi-archive-fill text-info fs-3 me-3'></i></a></th></tr>";
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
        <button onclick="closeCourse()" class="btnclose"><i class="bi bi-x-circle fs-3"></i></button>
        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" id="name" class="form-control mt-2"  >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>time</label>
                            <input name="time" class="form-control mt-2" id="time"  ></input>
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>signed by</label>
                            <input type="text" name="signed_by" class="form-control mt-2" id="signed_by"  >
                            <span class="invalid-feedback"></span>
                        </div>

                        <div class="form-group">
                            <label>signed at</label>
                            <input type="text" name="signed_at" class="form-control mt-2" id="signed_at" >
                            <span class="invalid-feedback"></span>
                        </div>


                        <button type="submit" class="btn btn-primary mt-2" name="save">Submit</button>
                        <button type="submit" class="btn btn-secondary mt-2" onclick="closeCourse()">Cancel</button>

    </form> 

    </div>
    </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->

        <script src="js/scripts.js"></script>
        <script src="js/all.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

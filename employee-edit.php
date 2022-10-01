<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee Edit</title>
  </head>
  <body>

  <div class="container mt-5" >
        <?php 
        include('message.php');
        ?>
    <div class="row">
        <div class="col-md-12">
            <div class="curd">
                <div class="curd-header">
                    <h2>Employee Edit
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                    </h2>
                    
                </div>
                <div>
                    <div class="curd-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $employee_id = mysqli_real_escape_string($con,$_GET['id']);
                            $query= "SELECT * FROM employee WHERE id='$employee_id' ";
                            $query_run=mysqli_query($con,$query);
                            if(mysqli_num_rows($query_run)>0)
                            {
                                $employee=mysqli_fetch_array($query_run);
                                ?>
                                <form action ="code.php" method="POST">
                        <div class="mb-4">
                            <label>Employee Name</label>
                            <input type="text" name="name" class="form-control" value="<?=$employee['name'];?>">
                        </div>
                        <div class="mb-4">
                            <label>Employee Email</label>
                            <input type="email" name="email" class="form-control"value="<?=$employee['email'];?>">
                        </div>
                        <div class="mb-4">
                            <label>Employee Phone</label>
                            <input type="text" name="phone" class="form-control"value="<?=$employee['phone'];?>">
                        </div>
                        <div class="mb-4">
                            <label>Employee Designation</label>
                            <input type="text" name="designation" class="form-control"value="<?=$employee['designation'];?>">
                        </div>
                        <div class="mb-4">
                            <label>Employee Salary</label>
                            <input type="text" name="salary" class="form-control"value="<?=$employee['salary'];?>">
                        </div>
                        <div class="mb-4">
                            <label>Employee Address</label>
                            <input type="text" name="address" class="form-control"value="<?=$employee['address'];?>">
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="update_emoloyee" class="btn btn-primary"> Update Employee</button>
                        </div>

                     </form>

                                <?php
                            }
                            else{
                                echo" <h4>NO Data Found</h4>";
                            }

                        }
                        ?>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    









        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>
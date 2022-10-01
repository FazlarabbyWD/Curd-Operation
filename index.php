<?php
require'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee Details </title>
  </head>
  <body>
   <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="curd">
                <div class="curd-header">
                    <h2>Employee Details 
                        <a href="employee-create.php" class="btn btn-primary float-end"> ADD Employee</a>
                    </h2>
                    
                </div>
                <div class="curd-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employee Name</th>
                                <th> Email</th>
                                <th>Phone</th>
                                <th>Designation</th>
                                <th>Salary</th>
                                <th>Address</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                             $query = "SELECT * FROM employee";
                             $query_run = mysqli_query($con, $query);
                             if(mysqli_num_rows($query_run) > 0)
                             {
                             foreach($query_run as $employee)
                             {
                             ?>
                                <tr>
                                <td><?=$employee["id"];?></td>
                                <td><?=$employee["name"];?></td>
                                <td><?=$employee["email"];?></td>
                                <td><?=$employee["phone"];?></td>
                                <td><?=$employee["designation"];?></td>
                                <td><?=$employee["salary"];?></td>
                                <td><?=$employee["address"];?></td>
                                <td>
                                    <a href=""class="btn btn-info btn-sm" >view</a>
                                     <a href="employee-edit.php?id=<?= $employee['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href=""class="btn btn-danger btn-sm" >Delete</a>
                                </td>
                                </tr>
                                <?php
                            
                                }
                             }
                            else
                            {
                                echo " <h4>NO DATA FOUND</h4>";
                            }

                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
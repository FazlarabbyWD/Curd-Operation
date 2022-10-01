<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee Create</title>
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
                    <h4>Employee ADD</h4>
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div>
                    <div class="curd-body">
                     <form action="code.php" method="POST">
                        <div class="mb-4">
                            <label>Employee Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Employee Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Employee Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Employee Designation</label>
                            <input type="text" name="designation" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Employee Salary</label>
                            <input type="text" name="salary" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Employee Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="save_emoloyee" class="btn btn-primary"> Save Employee</button>
                        </div>

                     </form>
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
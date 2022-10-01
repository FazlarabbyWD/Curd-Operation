<?php
session_start();
require 'dbcon.php';
if(isset($_POST['save_emoloyee']))
{
    $name= mysqli_real_escape_string ($con, $_POST['name']) ;
    $email= mysqli_real_escape_string ($con, $_POST['email']) ;
    $phone= mysqli_real_escape_string ($con, $_POST['phone']) ;
    $designation= mysqli_real_escape_string ($con, $_POST['designation']) ;
    $salary= mysqli_real_escape_string ($con, $_POST['salary']) ;
    $address= mysqli_real_escape_string ($con, $_POST['address']) ;
    
    $query= "INSERT INTO employee (	name,email,phone,designation,salary,address) value('$name','$email','$phone','$designation','$salary','$address') ";

    $query_run = mysqli_query($con,$query);
    if( $query_run)
    {$_SESSION['message']="Employee Added Successfully";
        header("Location: employee-create.php");
        exit (0);
    }
    else{
        $_SESSION['message']="Employee NOT Added Successfully";
        header("Location: employee-create.php");
        exit (0);
    }

}
?>
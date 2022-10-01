<?php

$con = mysqli_connect("localhost","root","","employee");

if(!$con){
    die('Failed To Connect To Server'. mysqli_connect_error());
}

?>
<?php
$con = new mysqli('localhost', 'root','', 'sia2_users');

if(!$con){
    die(mysqli_error($con));
}


?>
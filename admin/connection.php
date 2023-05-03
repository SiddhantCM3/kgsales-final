<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "mygenic";

   $con = new mysqli($servername, $username, $password, $dbname);

if(!$con){
    die(mysqli_error($con));
}
?>

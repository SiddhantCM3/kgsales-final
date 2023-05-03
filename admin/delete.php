<?php
    include 'connect.php';

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `products` where Id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:viewproducts.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

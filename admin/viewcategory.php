<?php
include_once 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
 <div class="container-fluid float-right">
    <!-----------------Navbar------------------------>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:  #39A6A3;">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="index.php">MyGenic</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     Categories
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="addcategory .php">Add Category</a></li>
                                        <li><a class="dropdown-item" href="viewcategory .php">View Category</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Product
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="addproducts.php">Add Product</a></li>
                                        <li><a class="dropdown-item" href="viewproducts.php">View Products</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
   <!-----------------Navbar-End----------------------->   
    <button class="btn btn-primary my-5"><a href="addcategory.php" class="text-light">Add Products</a>
    </button>
    <table class="table">
        <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Category_Name</th>
                <th scope="col">Category_Image</th>
                <th scope="col">Category_id</th>
                </tr>
        </thead>
        <tbody>
            <?php

            $sql=" SELECT * FROM `categories`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $Id=$row['id'];
                    $Category_Name=$row['category_name'];
                    $Category_Image=$row['category_image'];
                    $Category_id=$row['category_id'];

                    echo '<tr>
                            <td scope="row">'.$Id.'</td>
                            <td>'.$Category_Name.'</td>
                            <td>'.$Category_Image.'</td>
                            <td>'.$Category_id.'</td>
                        </tr>';
                }
            }
            ?>
        </tbody>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
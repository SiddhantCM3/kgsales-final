<?php
include_once 'connection.php';

$Id=$_GET['updateid'];
$sql="Select * from `products` where id=$Id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$product_image=$row['product_image'];
$product_name=$row['product_name'];
$product_chemical=$row['product_chemical'];
$product_form=$row['product_form'];
$company_name=$row['company_name'];
$product_storage=$row['product_storage'];
$product_packing=$row['product_packing'];
$product_category=$row['product_category'];

if(isset($_POST['submit'])){
    $ProductImage=$_POST['product_image'];
    $ProductName=$_POST['Product_Name'];
    $ProductChemical=$_POST['Product_Chemical'];
    $ProductForm=$_POST['Product_Form'];
    $CompanyName=$_POST['Company_Name'];
    $ProductStorage=$_POST['Product_Storage'];
    $ProductPacking=$_POST['Product_Packing'];
    $ProductCategory=$_POST['Product_Category'];


    $sql="update `products` set Id=$Id,product_image='$ProductImage',Product_Name='$ProductName',Product_Chemical='$ProductChemical',
      Product_Form='$ProductForm',Company_Name='$CompanyName',Product_Storage='$ProductStorage',
      Product_Packing='$ProductPacking',Product_Category='$ProductCategory' where id=$Id";

    $result=mysqli_query($con,$sql);
    if($result){
        header('location:viewproducts.php');
    }
    else{
        die(mysqli_error($con));
    }

}

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
  <div class="container my-5">
        <form method="post">
            <div class="form-group">
               <label>Product Name</label>
               <input type="text" class="form-control" name="Product_Name" value="<?php echo $product_name?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Name" autocomplete="off">
            </div>  
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="product_image" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Select Product Image" autocomplete="off">
                </div>
            <div class="form-group">
                <label>Product Chemical</label>
                <input type="text" class="form-control" name="Product_Chemical" value="<?php echo $product_chemical?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Chemical" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Product Form</label>
                <input type="text" class="form-control" name="Product_Form" value="<?php echo $product_form?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Form" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control" name="Company_Name" value="<?php echo $company_name?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Company Name" autocomplete="off">
            </div>
            <div class="form-group">
            <label>Product Storage</label>
            <input type="text" class="form-control" name="Product_Storage" value="<?php echo $product_storage?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Storage" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Product Packing</label>
                <input type="text" class="form-control" name="Product_Packing" value="<?php echo $product_packing?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Packing" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Product Category</label>
                <input type="text" class="form-control" name="Product_Category" value="<?php echo $product_category?>" id="exampleInputProduct" aria-describedby="emailHelp" placeholder="Enter Product Category" autocomplete="off">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
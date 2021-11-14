<?php 
include('../conection.php');

$id=$_GET['id'];

$sql=mysqli_query($conn,"select * from productlist where product_id='$id' ");
$res=mysqli_fetch_assoc($sql);

$img=$res['product_pic'];

unlink("image/products/$img");

if(mysqli_query($conn,"delete from productlist where product_id='$id' "))
{
header('location:dashboard.php?option=product');	
}

?>
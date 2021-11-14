<?php 
include('../conection.php');

$oid=$_GET['id'];

$sql=mysqli_query($con,"select * from testimonials where S.no='$oid' ");
$res=mysqli_fetch_assoc($sql);

$img=$res['image'];

unlink("image/testimonials/$img");

if(mysqli_query($con,"delete from testimonials where S.no='$oid' "))
{
header('location:dashboard.php?option=testimonials');	
}

?>
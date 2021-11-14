<?php 
include('../conection.php');
$oid=$_GET['booking_id'];
$q=mysqli_query($con,"delete from  testimonials where id='$oid' ");
if($q)
{
header('location:dashboard.php?option=testimonials');
}
?>
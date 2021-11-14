<?php 
include('../conection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from enquiry where id='$id'");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($con,"delete from enquiry where id='$id'"))
{
header('location:dashboard.php?option=enquiry');	
}

?>
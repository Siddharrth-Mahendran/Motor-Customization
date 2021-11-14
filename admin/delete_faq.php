<?php 
include('../conection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from faq where s.no='$id' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from faq where s.no='$id' "))
{
header('location:dashboard.php?option=faq');	
}

?>
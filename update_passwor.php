<?php 
session_start();
$user_id = $_SESSION["user_id"];
if(isset($update))
{
$sql=mysqli_query($connection,"select * from register_user where register_user_id = '$user_id' and user_password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update register_user set user_password='$np' where register_user_id = '$user_id' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h1>Update Password</h1><hr>
	<tr style="height:40">
		<th>Enter Your old Password</th>
		<td><input type="password" name="op" class="form-control"required/></td>
	</tr>
	
	<tr>	
		<th>Enter Your New Password</th>
		<td><input type="password" name="np" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th>Enter Your Confirm Password</th>
		<td><input type="password" name="cp" class="form-control"required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
		</td>
	</tr>
</table> 
</form>
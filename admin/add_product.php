<?php 
if(isset($add))
{
	$sql=mysqli_query($conn,"select * from productlist where product_name='$name'");
	if(mysqli_num_rows($sql))
	{
	echo "This Product is already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($conn,"insert into productlist values('','$name','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"image/products/".$_FILES['img']['name']);
	echo "Events added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Product Name</th>
		<td><input type="text" name="name"  class="form-control"/>
		</td>
	</tr>

	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>

	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Event Details" name="add"/>
		</td>
	</tr>
</table> 
</form>
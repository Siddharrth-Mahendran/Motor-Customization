<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from testimonials where name='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "This Data is already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into testimonials values('','$rno','$img','$des','$feedback')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"image/testimonials/".$_FILES['img']['name']);
	echo "Events added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Name</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Designation</th>
		<td><input type="text" name="des"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Feedback</th>
		<td><textarea name="feedback"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Event Details" name="add"/>
		</td>
	</tr>
</table> 
</form>
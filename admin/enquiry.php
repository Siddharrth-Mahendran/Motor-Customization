<script>
	function delEnquiry(id)
	{
		if(confirm("You want to delete this Enquiry ?"))
		{
		window.location.href='delete_enquiry.php?id='+id;	
		}
	}
	function viewEnquiry(id)
	{
		window.location.href='view_enquiry.php?id='+id;	
	}
</script>
<table class="table table-striped table-hover">
	<h1>Enquiry</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($conn,"select * from enquiry");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name=$res['name'];
$email=$res['email'];
$mobile	=$res['mobile'];
$message=$res['message'];
?>
	<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['message']; ?></td>
		<td><a href="#"onclick="delEnquiry('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a>
		<a href="#"onclick="viewEnquiry('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:blue'></span></a>
		</td>
	</tr>
<?php 	
}
?>	
	
</table>
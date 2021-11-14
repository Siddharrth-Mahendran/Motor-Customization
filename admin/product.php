<script>
	function delproduct(id)
	{
		if(confirm("You want to delete this product ?"))
		{
		window.location.href='delete_product.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Product Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_product" class="btn btn-primary">Add New Product</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Image</th>
		<th>product Name</th>
		<th>Details</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($conn,"select * from productlist");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['product_id'];	
$img=$res['product_pic'];
$path="image/products/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['product_name']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard.php?option=update_product&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delproduct('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>
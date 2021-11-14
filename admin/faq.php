<script>
	function delfaq(id)
	{
		if(confirm("You want to delete this Question ?"))
		{
		window.location.href='delete_faq.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>F.A.Q</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_testi" class="btn btn-primary">Add New F.A.Q</a></td>
	</tr>
	<tr>
        <th>S.no</th>
		<th>Question</th>
        <th>Answer</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from faq");
while($res=mysqli_fetch_assoc($sql))
{
$did=$res['s.no'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['question']; ?></td>
		<td><?php echo $res['answer']; ?></td>
		<td><a style="color:red" href="delete_faq.php?s.no=<?php echo $did; ?>">delete</a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>
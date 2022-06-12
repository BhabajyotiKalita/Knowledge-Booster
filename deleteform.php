<?php

include('dbcon.php');

$id=$_REQUEST['sid'];

$qry= " DELETE FROM `registration` where `id`='$id' ";

$run=mysqli_query($con,$qry);

if($run == TRUE)
{
	?>
	<script>
	alert('Data deleted Successfully !!!');
	window.open('dstudent.php','_self');
	</script>
	<?php
}

?>

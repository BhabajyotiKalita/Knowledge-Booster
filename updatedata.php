<?php

include('dbcon.php');

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$security= $_POST['security'];
$id= $_POST['sid'];
$qry = "UPDATE `registration` SET `fname`='$fname',`sname`='$sname',`email`='$email',`mobile`='$mobile',`security`='$security' WHERE id='$id'";
$run=mysqli_query($con,$qry);

if($run == TRUE)
{
	?>
	<script>
	alert('Data updated Successfully !!!');
	window.open('updateform.php?sid=<?php echo $id;?>','_self');
	</script>
	<?php
}

?>
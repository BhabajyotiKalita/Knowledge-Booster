<?php

session_start();
		
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else{
			header('location: 2adminlogin.php');
		}
?>
<?php

	include('header.php');
	include('titlehead.php');
?>

<table align="center">
<form action="dstudent.php" method="post">

<tr>

<th>Enter Email</th>
<td><input type="text" name="email" placeholder="EMAIL" required="required";/></td>


<th>Mobile</th>
<td><input type="number" name="mobile" placeholder="MOBILE" required="required";/></td>


<td colspan="2"><input type="submit" name="submit" value="submit"/></td>

</tr>
</form>
</table>


<table align="center" width="80%" border="1" style="margin-top:10px;">
     <tr style="background-color:black; color:white;">
	    <th>NO</th>
		<th>First Name</th>
		<th>Second Name</th>
		<th>SECURITY</th>
		<th>EDIT</th>
	  </tr>


<?php

if(isset($_POST['submit']))
{
	include('dbcon.php');

$email=$_POST['email'];
$mobile=$_POST['mobile'];


$sql="SELECT * FROM `registration` WHERE `email`='$email' AND `mobile` like '%$mobile%'";
$run=mysqli_query($con,$sql);

  if(mysqli_num_rows($run)<1)
   {
	echo"<tr><td colspan='5'>No Records Found</td></tr>";
   }
  else
   {
    $count=0;
    while($data=mysqli_fetch_assoc($run))
     {
	$count++;
	?>
	 <tr align="center">
	    <td><?php echo $count; ?></td>
		<td><?php echo $data['fname']; ?></td>
		<td><?php echo $data['sname']; ?></td>
		<td><?php echo $data['security']; ?></td>
		<td><a href="deleteform.php?sid=<?php echo $data['id'] ?>">DELETE</a></td>
      </tr>
	  
<?php
     }
   }	
}

?>

</table>

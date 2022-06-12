<?php
session_start();

if(isset($_SESSION['uid']))
{
	echo "";

}
else
{
	header('location: 2adminlogin.php');
}
?>

<?php


include('header.php');
include('titlehead.php');
include('dbcon.php');

$sid = $_GET['sid'];

$sql="SELECT * FROM `registration` WHERE id ='$sid'";

$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">

<tr>
<th> First Name </th>
<td><input type="text" name="fname" value=<?php echo $data['fname']; ?> required></td>
</tr>


<tr>
<th> Second name </th>
<td><input type="text" name="sname" value=<?php echo $data['sname']; ?> required></td>
</tr>


<tr>
<th> EMAIL </th>
<td><input type="text" name="email" value=<?php echo $data['email']; ?> required></td>
</tr>


<tr>
<th> Mobile </th>
<td><input type="text" name="mobile" value=<?php echo $data['mobile']; ?> required></td>
</tr>


<tr>
<th> Password </th>
<td><input type="number" name="pswd" value=<?php echo $data['pswd']; ?> ></td>
</tr>


<tr>
<th> Re-Password </th>
<td><input type="number" name="rpswd" value=<?php echo $data['rpswd']; ?> ></td>
</tr>

<tr>
<th> Security </th>
<td><input type="text" name="security" value=<?php echo $data['security']; ?>  required></td>
</tr>

<tr>
   <td colspan="2" align="center"> 
   <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
   <input type="submit" name="submit" value="submit"></td>
</tr>

</table>
</form>
</body>
</html>

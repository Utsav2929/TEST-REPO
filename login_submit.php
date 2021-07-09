<?php




$con =mysqli_connect("localhost","root","","loginform") or die (mysqli_error($con));
$username =$_POST['username'];
$password=$_POST['password'];
$username =mysqli_real_escape_string($con,$username);

$password =mysqli_real_escape_string($con,$password);
$select_query="SELECT *from  `users` where username='$username' and password='$password' ";
$result=mysqli_query($con,$select_query);
if($num= mysqli_num_rows($result))

 header ("location: homepg.php");

else

header ("location: error.php");
?>
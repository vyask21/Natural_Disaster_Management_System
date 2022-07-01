<?php

$host="localhost";
$username="root";
$password="";
$db_name="dmt";
$con=mysqli_connect($host,$username,$password,$db_name)or die("cannot connect"); 
$uid = $_POST["uid"];
$pid = $_POST["passid"];
$SQL = "SELECT * FROM sqlinj WHERE email = '$uid' and password = '$pid' ";

$result = mysqli_query($con,$SQL);


if(mysqli_num_rows($result)>0){
echo "SUCCESSFULLY LOGGED IN";
}
else
echo "Invalid user id or password";

?>
<!DOCTYPE html>
<html>
<body>
	<div>
		<br><p><a href="isql.php">Retry injection</a></p>
		<br><p>Go back to <a href="index.html">Landing</a> page</p>
	</div>
</body>
</html>
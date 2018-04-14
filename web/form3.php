

<?php
$con = mysqli_connect('127.0.0.1','root','','collegedata');
if(!$con )
{
die("Could not Connect to the SQL Database" .mysql_error());
}
else
echo "connected";   

$name = $_POST['userid'];
$mobile = $_POST['mobno'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$marital = $_POST['status'];
$bloodgroup = $_POST['bloodgrp'];
$religion = $_POST['cast'];
$sql = "INSERT INTO persons (name,mobile,age,weight,marital,bloodgroup,religion)
VALUES ('$name', $mobile,$age,$weight,'$marital','$bloodgroup','$religion')";

if(!mysqli_query($con,$sql))
{
  echo ' not inserted';
}
else
{
	echo '   inserted';
}

mysqli_close($con);
?>


<?php
session_start();
$con = mysqli_connect('127.0.0.1','root','','collegedata');
if(!$con )
{
die("Could not Connect to the SQL Database" .mysql_error());
}
else
echo "connected";   

$name = $_POST['userid'];
$mobile = $_POST['mobno'];
$email = $_POST['email'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$marital = $_POST['status'];
$bloodgroup = $_POST['bloodgrp'];
$religion = $_POST['cast'];
$cookiename=$name;
$cookievalue=$mobile;
$_SESSION['name']=$name;
$_SESSION['id']=$mobile;
$sql = "INSERT INTO persons(name,mobile,age,weight,marital,bloodgroup,religion,email)
VALUES ('$name','$mobile','$age','$weight','$marital','$bloodgroup','$religion','$email')";
$res=mysqli_query($con,$sql);
$message = "Form is submitted";
header('Location:webform.php');
mysqli_close($con);
?>

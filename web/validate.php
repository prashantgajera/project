<?php

$con = mysqli_connect('127.0.0.1','root','','collegedata');
if(!$con )
{
die("Could not Connect to the SQL Database" .mysql_error());
}

$value=$_GET['str'];
$myfield=$_GET['field'];
if($myfield=="userid")
{
	if (strlen($value) < 4) 
		{
		 echo "<span style='color:#ff0000;'>Must be 3+ letters</span>";
		} 	
		else 
		{
		 echo "<span style='color:#00ff00;'>Valid</span>";
		}
		$var=1;
		$sql="SELECT *FROM persons WHERE name = '$value'";
}
if($myfield=="mobno")
{
	if(strlen($value) <10)
	{
		echo "<span style='color:#ff0000;'>mob must be 10 no</span>";
	}
	else
	{
		echo "<span style='color:#00ff00;'>Valid</span>";
	}
	$var=2;
	$sql="SELECT *FROM persons WHERE mobile= $value";
}
if($myfield=="email")
{
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
	echo "<span style='color:#ff0000;'>Invalid email</span>";
	}
	 else 
	{
	echo "<span style='color:#00ff00;'>Valid</span>";
	}
	$var=3;
	$sql="SELECT *FROM persons WHERE email= '$value'";
}
//$res=mysqli_query($con,$sql);
if($myfield=="userid")
{

}

//if($rowcount==1)
error_reporting(E_ALL ^ E_WARNING);
if($myfield== "email" ||$myfield== "mobno" ||$myfield== "userid")
{   
	$res=mysqli_query($con,$sql);
 if($res==mysqli_query($con,$sql))    
{	
	
	$rowcount=mysqli_num_rows($res);
	if($rowcount>1)
	{
	if($var==1 && $value != "")
	{
		echo "<span style='color:#ff0000;'> | Name is present in Database</span>";
	}
	else if($var==2 && $value != "")
	{
		echo "<span style='color:#ff0000;'> | Mobile no is already present</span>";
	}
	else if($var==3 && $value != "")
	{
		echo "<span style='color:#ff0000;'> | Email is already present</span>"; 	
	}
    
}
	if(isset($result) && $result!=null){
     mysqli_free_result($res);
 }
}
}
mysqli_close($con);
	
?>
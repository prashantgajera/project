<?php
error_reporting(E_ALL ^ E_WARNING);
if(isset($_SESSION['name']))
{
	$cookie_name=$_SESSION['name'];
	$cookie_value=$_SESSION['id'];

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}

?>
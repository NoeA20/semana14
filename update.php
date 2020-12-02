<?php
require_once("conexion.php");

if(isset($_POST['update']))
{
	$UserID = $_GET['ID'];
	$UserName = $_POST['name'];
	$UserMail = $_POST['mail'];
	$UserClave = md5($_POST['password']);

	$query = "UPDATE users SET username = '".$UserName."', email='".$UserMail."', password ='".$UserClave."' WHERE id='".$UserID."'";
	$result = mysqli_query($con,$query);

	if($result)
	{
		header("location: view.php");
	}
	else
	{
		echo "Por favor revise su consulta";
	}
}
else
{
	header("location: view.php");
}
?>
<?php
require_once("conexion.php");

if(isset($_GET['Del']))
{
	$UserID = $_GET['Del'];

	$query = "DELETE FROM users WHERE id = '".$UserID."'";

	$result = mysqli_query($con, $query);

	if($result)
	{
		header("location: view.php");
	}
	else
	{
		echo 'Por favor verifica la consulta';
	}
}
else
{
	header("location: view.php");
}
?>
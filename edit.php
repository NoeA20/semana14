<?php
session_start();
if(!isset($_SESSION['username'])){
	$_SESSION['msg']="Debes iniciar sesión primero";
	header('location: login.php');
}
?>

<?php
require_once('conexion.php');
$UserID = $_GET['GetID'];
$query = "SELECT * FROM users WHERE id='".$UserID."'";
$result = mysqli_query($con, $query);

while($row=mysqli_fetch_assoc($result))
{
	$UserID = $row['id'];
	$UserName = $row['username'];
	$UserMail = $row['email'];
	$UserClave = $row['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Registro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark">
	<div class="container">
		<div class="col-lg6 m-auto">
			<div class="card-title">
				<form action="update.php?ID=<?php echo $UserID ?>" method="POST">
<input type="text" class="form-control mb-2" name="name" value="<?php echo $UserName ?>" placeholder="Nombre de Usuario">

<input type="email" class="form-control mb-2" name="mail" value="<?php echo $UserMail ?>" placeholder="Correo Electrónico">

<input type="password" class="form-control mb-2" name="password" value="<?php echo $UserClave ?>" placeholder="Password">

<button class="btn btn-primary" name="update">Actualizar</button>
					
				</form>
				
			</div>
			
		</div>
	</div>
	
</body>
</html>
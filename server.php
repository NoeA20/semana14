<?php 
	session_start();

	// declaración de variable
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// conectarse a la base de datos
$db = mysqli_connect('localhost', 'root', '', 'practica13');

	// REGISTRAR USUARIO
if (isset($_POST['reg_user'])) {
// recibir todos los valores de entrada desde el formulario
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

/* validación del formulario: asegúrese de que el formulario esté correctamente rellenado */
if (empty($username)) { array_push($errors, " Se requiere nombre de usuario "); }
if (empty($email)) { array_push($errors, " correo electronico es requerido "); }
if (empty($password_1)) { array_push($errors, " se requiere contraseña "); }

if ($password_1 != $password_2) {
array_push($errors, " Las dos contraseñas no coinciden ");
		}

// Registrar usuario si no hay errores en el formulario
if (count($errors) == 0) {
$password = md5($password_1);
//encriptar la contraseña antes de guardar en la base de datos
$query = "INSERT INTO users (username, email, password) 
VALUES('$username', '$email', '$password')";
	mysqli_query($db, $query);

	$_SESSION['username'] = $username;
	$_SESSION['success'] = "Ahora está conectado";
	header('location: index.php');
}

}

	// INICIAR SESION DE USUARIO
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Se requiere nombre de usuario");
		}
		if (empty($password)) {
			array_push($errors, "Se requiere contraseña");
		}

		if (count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Ahora está conectado";
				header('location: index.php');
			}else {
array_push($errors, "Nombre de usuario incorrecto/combinación de contraseña");
			}
		}
	}

?>

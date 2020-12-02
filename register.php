<?php include('server.php') ?>
<?php require_once('header.php') ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto">
			<div class="card mt.5">
				<div class="card-title">
					<h3 class="bg-success text-white text-center py-3">Formulario de Registro</h3>
				</div>
				
				<div class="card-body">
				
				<form action="register.php" method="POST">
					<?php include('errors.php'); ?>
					<label>UserName:</label>
					<input type="text" name="username" placeholder="Nombre de Usuario" value="<?php echo $username; ?>" class="form-control mb-2">
					<label>Correo Electrónico:</label>
					<input type="mail" name="email" placeholder="Correo Electrónico" value="<?php echo $email; ?>" class="form-control mb-2">
					<label>Contraseña:</label>
					<input type="password" name="password_1" placeholder="Contraseña"  class="form-control mb-2">
					<label>Repite Contraseña:</label>
					<input type="password" name="password_2" placeholder="Repite la contraseña" class="form-control mb-2"><br>
					<button class="btn btn-primary" name="reg_user">Registro</button>
				</form>

				</div>

			</div>
		</div>
	</div>
</div>
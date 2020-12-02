<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sistema LOGIN en PHP</title>
</head>
<body style="background:#CCC;">
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"><h3>Práctica Sem-14</h3></a>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">

                </ul>
            </div>                

        </div>
    </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3">Iniciar Sesión</h3>
                        </div>
                        <div class="card-body">

                            <form action="login.php" method="post">
                            			<?php include('errors.php'); ?>
                                <input type="text" class="form-control mb-2" placeholder=" Nombre de Usuario " name="username">
                                <input type="password" class="form-control mb-2" placeholder=" Password " name="password">
                                <button type="submit" class="btn btn-primary" name="login_user">Iniciar Sesión</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>

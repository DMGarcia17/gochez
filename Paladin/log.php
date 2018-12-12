<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Iniciar Sesi&oacute;n</title>
    <?php require_once 'templates/head.php'; ?>
    <link rel="stylesheet" href="../assets/css/log.css">
</head>

<body>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <img src="../assets/img/logo.png" class="img-fluid" alt="">
                        <h5 class="card-title text-center">Iniciar Sesi&oacute;n</h5>
                        <?php
                        if(isset($_GET['err']) && $_GET['err'] == 'lf'){
                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            Usuario o contrase&ntilde;a incorrecta
                                        </div>";
                        }
                        ?>
                        <form class="form-signin" method="post" action="procedimientos/val_log.php">
                            <div class="form-label-group">
                                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputEmail">Nombre de usuario</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Contrase&ntilde;a</label>
                            </div>
                            <button class="btn btna btn-lg btn-block text-uppercase" type="submit" style="width: 100% !important;">Iniciar Sesi&oacute;n</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

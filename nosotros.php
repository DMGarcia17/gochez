<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quienes Somos</title>
    <?php require_once 'templates/head.php'; require_once 'core/proc.php' ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body id="cue" class="body">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            if (screen.width < 720) {
                $("#cue").addClass("body2");
                $("#img_lat").css({
                    "padding-right": "5%",
                    "padding-left": "5%",
                    "width": "100%"
                });
                $(".contenido").css({
                    "box-shadow": "none",
                    "height": "100%"
                });
                $("#navBot").css("display", "none");
            }
        });

    </script>
    <div class="contenido">
        <div class="nava">
            <?php 
            require_once 'templates/nav.php';
            $db = new procedimientos();
            ?>
        </div>
        <div class="content">
            <div class="row">
            <div class="col-lg-12"><br>
                <img src="assets/img/linea.png" alt="" class="marcador">
                <span class="font-weight-bold" style="font-size: 22px;">QUIENES SOMOS</span><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12">
               <i><h4>Misi&oacute;n</h4></i>
                Su prop&oacute;sito fundamental es participar en el negocio de Asesor&iacute;a, Dise&ntilde;o, Supervisi&oacute;n y Ejecuci&oacute;n en el &aacute;rea de la Construcci&oacute;n. Su &aacute;mbito de acci&oacute;n geogr&aacute;fica abarcar&aacute; todo el territorio nacional brindando servicios que se caracterizar&aacute;n por su precio competitivo, calidad, respaldo y cobertura.
                <br><br>
                <i><h4>Visi&oacute;n</h4></i>
                Posicionarse fuertemente en el mercado, con una imagen que sea sin&oacute;nimo de calidad, responsabilidad y eficiencia. La satisfacci&oacute;n del cliente ser&aacute; siempre lo primero.
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="assets/img/esp.png" alt="" class="img-fluid">
            </div>
        </div>
        <br>
        <div class="row">
           <div class="col-lg-5 col-md-12">
                <img src="assets/img/esp.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-12">
               <br>
                <i><h4>&Aacute;mbito de Productos y Servicios</h4></i>
                Dise&ntilde;o arquitect&oacute;nico, Construcciones y Remodelaciones, Estudio de suelos, Levantamiento y Dise&ntilde;o Topogr&aacute;ficos, Reparaciones y mantenimiento en todos los campos de la construcci&oacute;n como: mec&aacute;nica, alba&ntilde;iler&iacute;a, fontaner&iacute;a, carpinter&iacute;a, etc.
                <br><br>
                <i>
                    <h4>Factores de Competitividad</h4>
                </i>
                Precio, calidad, eficiencia, responsabilidad, y diferenciaci&oacute;n.
            </div>
        </div>
        </div>
        <br>
        <nav class="navbar navbar-expand-lg navbar-light" id="navBot" style="background: #FFF !important;">
                <a class="navbar-brand" href="index.php" id="branbd" style="width: 200px;">
                    <img src="assets/img/logo.png" class="img-fluid d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" id="inicio">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php" id="quienes">QUIENES SOMOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyectos.php" id="proyectos">PORTAFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contac.php" id="contacto">CONT&Aacute;CTENOS</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="contac.php" id="contacto"><img src="assets/img/face.jpg" style="width: 40px;" alt="" class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </nav>
    </div>

</body>

</html>

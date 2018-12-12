<!DOCTYPE html>
<html lang="es">

<head>
    <title>G&oacute;chez - Manc&iacute;a</title>
    <?php require_once 'templates/head.php'; require_once 'core/proc.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="assets/css/compact-gallery.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body id="cue" class="body">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/cust.js"></script>
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
                $("#btns").css({
                    "padding-right":"5%",
                    "padding-left":"15%"
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
        <div style="margin-right: 2%; margin-left: 3%;">
           <div class="row">
                    <div class="col-lg-12"><br>
                        <img src="assets/img/linea.png" class="marcador">
                        <span class="font-weight-bold" style="font-size: 22px;">CONTÁCTANOS</span><br><br>
                    </div>
                </div>
            <div class="contactenos">
                <div class="conte" style="margin-bottom: 8px !important;">
                    <div class="form-group">
                        <form action="email.php" method="post">
                            <div class="row">
                                <div class="col-lg-2"><label for="nom">Nombre *:</label></div>
                                <div class="col-lg-10"><input type="text" name="nom" id="nom" required></div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-2"><label for="mail">Email *:</label></div>
                                <div class="col-lg-10"><input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="mail" id="mail" required></div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-2"><label for="tel">Teléfono:</label></div>
                                <div class="col-lg-10"><input type="tel" pattern="[0-9]{8}" name="tel" id="tel"></div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-2"><label for="messa">Comentario: *</label></div>
                                <div class="col-lg-10"><textarea required name="messa" id="messa" cols="20" rows="3"></textarea></div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="comentarop">Puede contactarnos directamente a nuestras oficinas <br>centrales (503) 24402634</span>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btna btn-lg btn-block" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                        <a class="nav-link" href="contac.php" id="contacto">COT&Aacute;CTENOS</a>
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

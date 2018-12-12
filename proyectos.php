<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proyectos</title>
    <?php require_once 'templates/head.php'; require_once 'core/proc.php' ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/compact-gallery.css">
</head>

<body id="cue" class="body">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
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
                $("#navBot").css("display", "none");
            }
            cargarGaleria("*", "1");
        });

    </script>

    <div class="contenido">
        <div class="nava">
            <?php 
            require_once 'templates/nav.php';
            $db = new procedimientos();
            ?>
        </div>
                <div class="row">
                    <div class="col-lg-12"><br>
                        <img src="assets/img/linea.png" alt="" class="marcador">
                        <span class="font-weight-bold" style="font-size: 22px;">PORTAFOLIO</span><br><br>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col" style="height: 30px !important;">
                        <span class="categoria actcat" id="todos" onclick="cargarGaleria('*', '1')">Todos</span>
                    </div>
                    <?php
                    require_once('core/proc.php');
                    $db = new procedimientos();
                    $res = $db->blankect_query("categorias", "*");
                    foreach($res as $r){
                        echo "<div class=\"col\" style=\"height: 30px !important;\"><span class=\"categoria\" id=\"{$r['id_cat']}\" onclick=\"cargarGaleria('{$r['id_cat']}', '1')\">{$r['categoria']}</span></div>";
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="gallery-block compact-gallery" style="padding-bottom: 0 !important;">
                            <div class="row no-gutters" id="gallery">

                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <div id="pag">

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

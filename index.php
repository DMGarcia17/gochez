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
            $("#btn1")  .mouseover(function() {
                $("#btn1").attr("src", "assets/img/btn1H.png");
              })
              .mouseout(function() {
                $("#btn1").attr("src", "assets/img/btn1.png");
              });
            $("#btn2")  .mouseover(function() {
                $("#btn2").attr("src", "assets/img/btn2H.png");
              })
              .mouseout(function() {
                $("#btn2").attr("src", "assets/img/btn2.png");
              });
            $("#btn3")  .mouseover(function() {
                $("#btn3").attr("src", "assets/img/btn3H.png");
              })
              .mouseout(function() {
                $("#btn3").attr("src", "assets/img/btn3.png");
              });
        });
    </script>
    <div class="contenido">
        <div class="nava">
            <?php 
            require_once 'templates/nav.php';
            $db = new procedimientos();
            $res = $db->query("select img from img_sli");
            ?>
            
        </div>
        <div class="rbody">
            <div class="row">
                <div class="col">
                    <img src="<?=$res[0]['img']?>" alt="" class="img-fluid banner">
                </div>
            </div>

            <div class="content">
                <br><br>
                <div class="row">
                    <div class="col-lg-7">
                        <img src="assets/img/linea.png" alt="" class="marcador" style="margin-bottom: 0 !important; margin-top: 0 !important;">
                        <span class="font-weight-bold" style="font-size: 22px;">NOS ESPECIALIZAMOS EN</span><br>
                        <div style="width: 80% !important;  text-align: justify; padding-left: 5% !important; font-size:  17px;">
                            <span class="font-weight-bold">
                                Somos una empresa dedicada al dise&ntilde;o, construcci&oacute;n, y supervisi&oacute;n de proyectos.
                            </span>
                            <br>
                            <div style="padding-top: 5%;" id="btns">
                                <div class="row">
                                    <div class="col-lg-4"><img src="assets/img/btn1.png" id="btn1" class="img-fluid btn"></div>
                                    <div class="col-lg-4"><img src="assets/img/btn2.png" id="btn2" class="img-fluid btn"></div>
                                    <div class="col-lg-4"><img src="assets/img/btn3.png" id="btn3" class="img-fluid btn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <br>
                        <img src="assets/img/esp.png" alt="" style="width: 80%;" id="img_lat" class="img-fluid">
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="assets/img/linea.png" alt="" class="marcador">
                        <span class="font-weight-bold" style="font-size: 22px;">PORTAFOLIO</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="gallery-block compact-gallery" style="padding-bottom: 0 !important;">
                            <div class="row  no-gutters" id="gallery">
                            
                            </div>
                        </section>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="assets/img/linea.png" class="marcador">
                        <span class="font-weight-bold" style="font-size: 22px;">CONT&Aacute;CTANOS</span><br>
                    </div>
                </div>
                <br>
                <div class="contactenos">
                    <div class="conte">
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
                                    <div class="col-lg-2"><label for="tel">Tel&eacute;fono:</label></div>
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
                <br>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
//        baguetteBox.run('.compact-gallery', {
//            animation: 'slideIn'
//        });
        $(document).ready(function() {
            loadG();
            $('.ir-arriba').click(function() {
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('.ir-arriba').slideDown(300);
                } else {
                    $('.ir-arriba').slideUp(300);
                }
            });

        });

    </script>
    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-angle-up"></i></span>
    
    
    
    <div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Alerta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        switch($_GET['er']){
                            case 1:
                                echo "<div class=\"alert alert-success\" role=\"alert\">Mensaje enviado exitosamente</div>";
                                break;
                            case 2:
                                echo "<div class=\"alert alert-danger\" role=\"alert\">No se pudo enviar su mensaje, por favor intentelo de nuevo</div>";
                                break;
                            case 3:
                                echo "<div class=\"alert alert-danger\" role=\"alert\">No estan definidas las variables</div>";
                                break;
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <script>
    <?php
            if(isset($_GET['er'])){
                echo "$(\"#error\").modal(\"show\");";
            }
            ?>
    </script>
</body>

</html>

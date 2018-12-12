<?php
if(isset($_POST['nom']) && isset($_POST['mail'])){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $subject = "Contacto - {$_POST['nom']}";
    if(isset($_POST['tel']) && $_POST['tel'] != ''){
        $mes = "Nombre: {$_POST['nom']}
                <br/>Correo: {$_POST['mail']}
                <br/>Tel&eacute;fono: {$_POST['tel']}
                <br/>Mensaje: {$_POST['messa']}";
    }else{
         $mes = "Nombre: {$_POST['nom']}
                <br/>Correo: {$_POST['mail']}
                <br/>Tel&eacute;fono: -- No Proporcionado --
                <br/>Mensaje: {$_POST['messa']}";
    }
    $message = "
    <!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='iso-8859-1'>
    <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <link rel='stylesheet' href='http://gochez.portalelsalvador.com/assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://gochez.portalelsalvador.com/assets/css/bootstrap-grid.min.css'>
    <link rel='stylesheet' href='http://gochez.portalelsalvador.com/assets/css/bootstrap-reboot.min.css'>
</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12 col-md-12'>
                <div class='text-center' style='text-align: center;'>
                    <div style='color: #666666;'>
                        <h1>Contacto</h1>
                    </div>
                    <img src='http://gochez.portalelsalvador.com/assets/img/banner.png' class='img-fluid' alt='Banner'>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class='col-lg-12 col-md-12'>
                $mes
            </div>
        </div>
    </div>
</body>

</html>
    ";
    $from = "no-reply@gochezmancia.com";
    $to = "Contacto <daniel.moreno17101998@gmail.com>, Institucional <daniel.moreno@oportunidades.org.sv>";
//    $to = "daniel.moreno@oportunidades.org.sv";
//    $to = "daniel.moreno17101998@gmail.com";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    $headers[] = 'From: Contactenos <contactanos@gochezmancia.com>';
    try{
        if(mail($to,$subject,$message, implode("\r\n", $headers))){
            header("location: index.php?er=1");
        }else{
            header("location: index.php?er=2");
        }
    }catch(Exception $e){
        echo 'Excepciones: '.$e->getMessage();
    }
}else{
    header("location: index.php?er=3");
}
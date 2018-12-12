<?php
date_default_timezone_set('America/El_Salvador');
header("Content-Type: text/html;charset=iso-8859-1");
require_once '../core/proc.php';

$db = new procedimientos();
$id = 0;

    $desd = 'LIMIT 6 OFFSET 0';
	$res = $db->query( "select * from proyectos order by p_rank $desd");
if(count($res)>=5){
    
    #imagen 1

echo "<div class='gallery0 col-lg-5'>
<div class='col-md-6 col-lg-12 item zoom-on-hover' style='height: 100% !important; width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;'>
    <a class='lightbox' href='{$res[0]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
        <img class='img-fluid image' src='{$res[0]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
    </a>
    <div class=\"d-none d-print-block\">";
    $res0 = $db->filtered_query("img_proy", "img", "proyectos={$res[0]['id_proyecto']}");
    foreach($res0 as $r0){
        echo "<a href='{$r0['img']}'  style='height: 100% !important; width: 100% !important;>
        <img src='{$r0['img']}' style='height: 100% !important; width: 100% !important;'>
        </a>";
    }
    echo "</div></div></div>";
    
    # imagen 2
    echo "<div class='col-lg-3'>
                        <div class='gallery1 col-md-6 col-lg-12 item zoom-on-hover' style='height: 50% !important; width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;'>
                            <a class='lightbox' href='{$res[1]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                                <img class='img-fluid image' src='{$res[1]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                            </a> <div class='d-none d-print-block'>";
    $res1 = $db->filtered_query("img_proy", "img", "proyectos={$res[1]['id_proyecto']}");
    foreach($res1 as $r1){
        echo "<a href='{$r1['img']}'  style='height: 100% !important; width: 100% !important;>
        <img src='{$r1['img']}' style='height: 100% !important; width: 100% !important;'>
        </a>";
    }
    echo    "</div></div>
                        <div class='gallery2 col-md-6 col-lg-12 item zoom-on-hover' style='height: 50% !important; width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;'>
                            <a class='lightbox' href='{$res[2]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                                <img class='img-fluid image' src='{$res[2]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                            </a><div class='d-none d-print-block'>";
    $res2 = $db->filtered_query("img_proy", "img", "proyectos={$res[2]['id_proyecto']}");
    foreach($res2 as $r2){
        echo "<a href='{$r2['img']}'  style='height: 100% !important; width: 100% !important;>
        <img src='{$r2['img']}' style='height: 100% !important; width: 100% !important;'>
        </a>";
    }
    echo "</div></div></div>";
    
        
    # imagen 3
    echo "<div class='col-lg-4'>
                        <div class='gallery3 col-md-6 col-lg-12 item zoom-on-hover' style='height: 50% !important; width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;'>
                            <a class='lightbox' href='{$res[3]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                                <img class='img-fluid image' src='{$res[3]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                            </a> <div class='d-none d-print-block'>";
    $res3 = $db->filtered_query("img_proy", "img", "proyectos={$res[3]['id_proyecto']}");
    foreach($res3 as $r3){
        echo "<a href='{$r3['img']}'  style='height: 100% !important; width: 100% !important;>
        <img src='{$r3['img']}' style='height: 100% !important; width: 100% !important;'>
        </a>";
    }
    echo    "</div></div>
                        <div class='gallery4 col-md-6 col-lg-12 item zoom-on-hover' style='height: 50% !important; width: 100% !important; padding-right: 0 !important; padding-left: 0 !important;'>
                            <a class='lightbox' href='{$res[4]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                                <img class='img-fluid image' src='{$res[4]['img_proy']}' style='height: 100% !important; width: 100% !important;'>
                            </a><div class='d-none d-print-block'>";
    $res4 = $db->filtered_query("img_proy", "img", "proyectos={$res[4]['id_proyecto']}");
    foreach($res4 as $r4){
        echo "<a href='{$r4['img']}'  style='height: 100% !important; width: 100% !important;>
        <img src='{$r4['img']}' style='height: 100% !important; width: 100% !important;'>
        </a>";
    }
    echo "</div></div></div>";
	echo "<input type='hidden' id='cuantos' value='4'>";

}else{
    echo "No hay imagenes en la galer&iacute;a";
}
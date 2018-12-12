<?php
date_default_timezone_set('America/El_Salvador');
header("Content-Type: text/html;charset=iso-8859-1");
require_once '../core/proc.php';

$db = new procedimientos();
$id = 0;


if ( isset( $_POST[ 'data' ] ) && isset($_POST['act']) ) {
    if($_POST['act'] == 1){
        $desd = 'LIMIT 9 OFFSET 0';
    }else{
        $desd = 'LIMIT 9 OFFSET '.(($_POST['act']-1)*9);
    }
    if ($_POST[ 'data' ] !="*" ){
        $res = $db->query( "select * from proyectos where categoria='{$_POST['data']}' order by p_rank $desd" );
    }else{
        $res = $db->query( "select * from proyectos order by p_rank $desd");
    }
	foreach ( $res as $r ) {
		echo "<div class='gallery$id col-lg-4 col-md-4 col-sm-12 item zoom-on-hover'>
						<a class'lightbox' href='{$r['img_proy']}'>
			<img src='{$r['img_proy']}' class='img-fluid' style='overflow: hidden;height: 100%; width: 100%;'>
			<span class='description'>
                        <span class='description-heading'>{$r['n_proy']}</span>
                    </span>
					</a>
			<div class=\"d-none d-print-block\">";

$res2 = $db->filtered_query("img_proy", "img", "proyectos={$r['id_proyecto']}");
		foreach($res2 as $r2){
			echo "<a href='{$r2['img']}'>
			<img src='{$r2['img']}'>
			</a>";
		}
	

		echo "</div></div>";
		$id++;
		
	}
	echo "<input type='hidden' id='cuantos' value='$id'>";
} 

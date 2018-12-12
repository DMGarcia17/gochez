<nav aria-label="Page navigation example">
   <br>
   <ul class="pagination">
   <?php
    date_default_timezone_set('America/El_Salvador');
header("Content-Type: text/html;charset=iso-8859-1");
require_once '../core/proc.php';

$db = new procedimientos();
if($_POST['data'] == '*'){
    $id = $db->query("select count(id_proyecto) as 'tot' from proyectos");
}else{
    $id = $db->query("select count(id_proyecto) as 'tot' from proyectos where categoria='{$_POST['data']}'");
}
       
    if(count($id)){
         $cua = $id[0]['tot'];
        if(is_int($cua/9)){
            for($i = 1; $i<=($cua/9); $i++){
                echo '<li class="page-item"><btn class="page-link" id="pagi'.$i.'" onclick="cargarGaleria(\''.$_POST['data'].'\', \''.$i.'\')">'.$i.'</btn></li>';
            }
        }else{
             for($i = 1; $i<=(floor($cua/9)+1); $i++){
                 echo '<li class="page-item"><btn class="page-link" id="pagi'.$i.'" onclick="cargarGaleria(\''.$_POST['data'].'\', \''.$i.'\')">'.$i.'</btn></li>';
             }
        }
    }else{
        echo 'Error';
    }

    ?>
    </ul>
</nav>
<?php
require_once('../../core/proc.php');
$db = new procedimientos();
$archivo = $_GET['opt'];

function get_extension($str) 
{
        return end(explode(".", $str));
}

switch($archivo){
    case 1:
        if(is_uploaded_file($_FILES['slider']['tmp_name'])){
            if($_FILES['slider']['type'] == 'image/jpeg'){
                $f = getdate();
                $file = implode('-', $f);
                $fn = 'assets/img/slider/'.$file.'.'.get_extension($_FILES['slider']['name']);
                if(move_uploaded_file ( $_FILES['slider']['tmp_name'], '../../'.$fn)){
                    $db->insert("insert into img_sli values (null, '$fn')");
                    header('location: ../home.php?err=0');
                }else{
                    header('location: ../home.php?err=2&path='.$fn);
                }
            }else{
                header('location: ../home.php?err=1');
            }
        }
        break;
    case 2:
        if(is_uploaded_file($_FILES['sliderMod']['tmp_name'])){
            if($_FILES['sliderMod']['type'] == 'image/jpeg'){
                $f = getdate();
                $file = implode('-', $f);
                $fn = 'assets/img/slider/'.$file.'.'.get_extension($_FILES['sliderMod']['name']);
                if(move_uploaded_file ( $_FILES['sliderMod']['tmp_name'], '../../'.$fn)){
                    $db->insert("update img_sli set img='$fn' where id_ima='{$_POST['id_img2']}'");
                    if(unlink("../../{$_POST['img_rut2']}")){
                        header('location: ../home.php?err=0');
                    }
                }else{
                    header('location: ../home.php?err=2&path='.$fn);
                }
            }else{
                header('location: ../home.php?err=1');
            }
        }
        break;
    case 3:
        if(isset($_POST['id_img']) && $_POST['id_img'] != ''){
            if($db->delete("img_sli", "id_ima=".$_POST['id_img'])){
                if(unlink('../../'.$_POST['img_rut']) == 1){
                    header('location: ../home.php?err=0');
                }
            }
        }
        break;
}

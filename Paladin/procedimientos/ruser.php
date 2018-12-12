<?php

function procesar_password($password)
{
	$error_clave = "";
	if(strlen($clave) < 6){
      $error_clave += "La clave debe tener al menos 6 caracteres<br/>";
   }
   if(strlen($clave) > 16){
      $error_clave += "La clave no puede tener m&aacute;s de 16 caracteres<br/>";
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave += "La clave debe tener al menos una letra min&uacute;scula<br/>";
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave += "La clave debe tener al menos una letra may&uacute;scula<br/>";
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave += "La clave debe tener al menos un caracter num&eacute;rico<br/>";
   }
   if ($error_clave == ""){
   	  return true;
   }
   return $error_clave;
}

require_once('../../core/proc.php');
$db = new procedimientos();
session_start();
if(isset($_POST['uuser']) && isset($_POST['upass'])){
    if(procesar_password($_POST['upass'])){
        if($db->insert('insert into usuarios values (\''.$_POST['uuser'].'\', \''.md5($_POST['upass']).'\', \''.$_POST['uuser'].'\')')){
            header("location: ../home.php?wra=3");
        }else{
            header("location: ../home.php?wra=1");
        }
    }else{
        $_SESSION['wra'] = procesar_password($_POST['uuser']);
        header("location: ../home.php?wra=2");
    }
}
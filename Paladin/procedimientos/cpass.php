<?php
require_once('../../core/proc.php');
$db = new procedimientos();
session_start();
$res = $db->filtered_query('usuarios', 'pass', 'username=\''.$_SESSION['username'].'\' AND pass=\''.md5($_POST['opass']).'\'');
if(count($res)>=1){
     if(procesar_password($_POST['npass'])){
         $npass = md5($_POST['npass']);
         if($db->insert("update usuarios set pass='$npass' where username = '{$_SESSION['username']}'")){
            session_start();
            session_unset();
            session_destroy();
            header("location: ../log.php");
         }else{
             header("location: ../home.php?wra=1");
         }
     }else{
         header("location: ../home.php?wra=2");
         $_SESSION['wra'] = procesar_password($_POST['npass']);
     }
}else{
    header("location: ../home.php?wra=0");
    $_SESSION['wra'] = "La clave ingresada no concuerda con la clave antigua";
}
    
    
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
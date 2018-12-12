<?php
require_once('../../core/proc.php');
$db = new procedimientos();
session_start();
$res = $db->filtered_query('usuarios', 'username', 'username=\''.$_POST['ouser'].'\'');
if(count($res)>=1){
     if(strlen($_POST['nuser'])){
         $nuser = $_POST['nuser'];
         if($db->insert("update usuarios set username='$nuser' where username = '{$_POST['nuser']}'")){
            session_start();
            session_unset();
            session_destroy();
            header("location: ../log.php");
         }else{
             header("location: ../home.php?wra=1");
         }
     }else{
         header("location: ../home.php?wra=2");
     }
}else{
    header("location: ../home.php?wra=0");
    $_SESSION['wra'] = "El usuario ingresado no concuerda con el nombre de usuario antiguo";
}
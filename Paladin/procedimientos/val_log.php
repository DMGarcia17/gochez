<?php
require_once '../../core/proc.php';

$db = new procedimientos();
$pass=md5($_POST['pass']);

$res = $db->query("select * from usuarios where username='{$_POST['username']}' AND pass='$pass'");

if(count($res) > 0){
    session_start();
    header('Content-type: text/html; charset=ISO-8859-1');
    ini_set("session.cookie_lifetime","86400");
    ini_set("session.gc_maxlifetime","86400");
    date_default_timezone_set('Etc/GMT+6');
    $_SESSION['username'] = $_POST['username'];
    header('location: ../home.php');
}else{
    header('location: ../log.php?err=lf');
}

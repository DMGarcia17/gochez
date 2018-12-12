<?php
require_once('../../core/proc.php');
$db = new procedimientos();

$opt = $_GET['opt'];

switch($opt){
    case 0:
        $id = strtolower($_POST['cat']);
        $id = str_replace(" ", "", $id);
        $query ="insert into categorias values ('$id', '{$_POST['cat']}')";
        if($db->insert($query)){
//            echo "insert into categorias values ($id, '{$_POST['cat']}')";
            header("location: ../home.php?err=0&p=Y2F0ZWdvcmllcy5waHA=");
        }else{
//            echo "insert into categorias values ('$id', '{$_POST['cat']}')";
            header("location: ../home.php?err=1&p=Y2F0ZWdvcmllcy5waHA=");
        }
        
        break;
    case 1: 
        if(isset($_POST['id_cat'])){
            $query ="update categorias set categoria='{$_POST['cat']}' where id_cat='{$_POST['id_cat']}'";
            if($db->insert($query)){
                header("location: ../home.php?err=0&p=Y2F0ZWdvcmllcy5waHA=");
            }else{
                header("location: ../home.php?err=1&p=Y2F0ZWdvcmllcy5waHA=");
            }
        }
        break;
    case 2:
        if(isset($_GET['id_cat'])){
            $query ="delete from categorias where id_cat='{$_GET['id_cat']}'";
            if($db->insert($query)){
                header("location: ../home.php?err=0&p=Y2F0ZWdvcmllcy5waHA=");
            }else{
                header("location: ../home.php?err=1&p=Y2F0ZWdvcmllcy5waHA=");
            }
        }
        break;
}

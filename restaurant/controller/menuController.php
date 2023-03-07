<?php
// sesion_start();
include_once '../util/MySQLUtils.php';
include_once '../model/menu.php';
$menu = new menu (null, null, null, null, null);
$dsmenu=$menu->getAllData();
// hien menu
//if($_SERVER['REQUEST_METHOD']=="GET" and isset($_GET['idmenu']))
//{
//$menu=
//}
?>
<?php
// ------------ http:www.internetbizn.ru
switch ($_GET['viborp']) {

case "otchizm":
require_once("admvbtbl.php");
break;

case "izmadm":
require_once("admfspsw.php");
break;

case "otvfos":
require_once("adhvp.php");
break;
}

?>


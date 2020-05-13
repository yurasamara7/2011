<?php
@ session_start(); // открываем ссесию
// ------------ http:www.internetbizn.ru


$_SESSION['dathfirst']=$_GET['dathfirst']; //выбор первой даты
$_SESSION['dathsecnd']=$_GET['dathsecnd']; //выбор второй даты
$_SESSION['$filtr']=$_GET['filtr']; //выбор фильтра



echo " <frameset rows=25%,* border=3> ";
echo "<frame src=adhvfrm.php name=verhhFrame scrolling=No noresize=noresize id=verhhFrame />";


echo "<frame src=adhnfrm.php name=nizhFrame scrolling=yes noresize=noresize id=nizhFrame />";

echo "</frameset>";
echo "<noframes>";

echo "<body>";

echo "</body>";
echo "</noframes>";




?>
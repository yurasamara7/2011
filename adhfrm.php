<?php
@ session_start(); // ��������� ������
// ------------ http:www.internetbizn.ru


$_SESSION['dathfirst']=$_GET['dathfirst']; //����� ������ ����
$_SESSION['dathsecnd']=$_GET['dathsecnd']; //����� ������ ����
$_SESSION['$filtr']=$_GET['filtr']; //����� �������



echo " <frameset rows=25%,* border=3> ";
echo "<frame src=adhvfrm.php name=verhhFrame scrolling=No noresize=noresize id=verhhFrame />";


echo "<frame src=adhnfrm.php name=nizhFrame scrolling=yes noresize=noresize id=nizhFrame />";

echo "</frameset>";
echo "<noframes>";

echo "<body>";

echo "</body>";
echo "</noframes>";




?>
<?php
@ session_start(); // ��������� ������
// ------------ http:www.internetbizn.ru

$_SESSION['$vbrtbl']=$_GET['vbrtbl']; //����� �������
$_SESSION['$sort']=$_GET['sort']; //����� ����������
$_SESSION['$filtr']=$_GET['filtr']; //����� �������
$_SESSION['$datfirst']=$_GET['datfirst']; //����� ������ ����
$_SESSION['$datsecnd']=$_GET['datsecnd']; //����� ������ ����

if ($_GET['filtr']=="per") {

//if (!$_GET['$datfirst']||!$_GET['$datsecnd']) {
// echo "�� �� ����� ����(�).<br/>".
//       "��������� ����";
// exit;
//}

//if ($_GET['$datfirst']>!$_GET['$datsecnd']) {
// echo "���� ������ ������� ������ ���� ��������� �������.<br/>".
//       "��������� ����";
// exit;
//}

}



echo " <frameset rows=20%,* border=3> ";
echo "<frame src=admrobrt.php name=verhFrame scrolling=No noresize=noresize id=verhFrame />";

switch ($_GET['vbrtbl']) {

case "pls":
echo "<frame src=admotpl.php name=nizFrame scrolling=yes noresize=noresize id=nizFrame />";
break;

case "pt":
echo "<frame src=admotpt.php name=nizFrame scrolling=yes noresize=noresize id=nizFrame />";
break;

case "ps":
echo "<frame src=admotps.php name=nizFrame scrolling=yes noresize=noresize id=nizFrame />";
break;

}

echo "</frameset>";
echo "<noframes>";

echo "<body>";

echo "</body>";
echo "</noframes>";




?>
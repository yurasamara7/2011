<?php
@ session_start(); // ��������� ������

// ------------ http:www.internetbizn.ru
$nzp3=$_POST['nzp3'];
$nzp4=$_POST['nzp4'];

if (!$nzp3||!$nzp4) {
 echo "�� �� ����� ����� ������<br/>".
       "��������� ����";
 exit;
}

if (!get_magic_quotes_gpc()) {
$nzp3=addslashes($nzp3);
$nzp4=addslashes($nzp4);
}
require_once("confprg.php"); // ������ ����������

$db=new mysqli($host77,$user77,$passw77,$bazd77); // ����������� � ����� ������

// --------------------------------- ��������� ���������� � ����� ������
if (mysqli_connect_errno()) {
echo "������ ���������� � ����� ������.���������� �����";
exit;
}
// ----------------


switch ($_SESSION['$vbrtbl']) {

case "pls":
$tablica=$tabl31;
$polezap="Npor";
break;

case "pt":
$tablica=$tabl32;
$polezap="Nomzap";
break;

case "ps":
$tablica=$tabl33;
$polezap='Nomzap';
break;

}

$query1 = "Delete  from $bazd77.$tablica where ($tablica.$polezap>=$nzp3) AND ($tablica.$polezap<=$nzp4) "; // ������� ������ �� ��� �������

$result1=$db->query($query1);

if ($result1) {

switch ($_SESSION['$vbrtbl']) {

case "pls":
require_once("admotpl.php");
break;

case "pt":
require_once("admotpt.php");
break;

case "ps":
require_once("admotps.php");
break;

}


}
else {
echo "������������ ����� ������";

}


?>
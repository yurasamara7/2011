<?php
@ session_start(); // ��������� ������
// ------------ http:www.internetbizn.ru
require_once("confprg.php"); // ������ ����������

$db=new mysqli($host77,$user77,$passw77,$bazd77); // ����������� � ����� ������

// --------------------------------- ��������� ���������� � ����� ������
if (mysqli_connect_errno()) {
  echo "������ ���������� � ����� ������.���������� �����";
exit;
}
// ----------------

$osntext1=$_POST['osntext1'];
$logint1=$_SESSION['$logint1'];
$nompor=$_SESSION['$nompor'];

if (!$osntext1) {
 echo "�� �� ����� ���������.<br/>".
       "��������� ����";
 exit;
}

if (!get_magic_quotes_gpc()) {
$osntext1=addslashes($osntext1);
}
$nprv="������";
$tekdat=date('c');
$tektime=date("H:i:s",time());

$tablica=$tabl36; 

$query1 = "INSERT INTO  $bazd77.$tabl36 (`Nomzap`, `Npor`, `Datasoob`,`Timesoob`, `Soob`, `Naprav`) VALUES (NULL, '".$nompor."', '".$tekdat."', '".$tektime."', '".$osntext1."', '".$nprv."');";


$result1=$db->query($query1);

$db->close();
require_once("helptbls.php");

// ---------------------------------------------

?>
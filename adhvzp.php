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

$osntext11=$_POST['osntext11'];
$nompor11=$_POST['nompor11'];

if (!$osntext11||!$nompor11) {
 echo "�� �� ����� ��������� �/��� N ������������.<br/>".
       "��������� ����";
 exit;
}

if (!get_magic_quotes_gpc()) {
$osntext11=addslashes($osntext11);
$nompor11=addslashes($nompor11);
}
$nprv="�����";
$tekdat=date('c');
$tektime=date("H:i:s",time());

$tablica=$tabl36; 

$query1 = "INSERT INTO  $bazd77.$tabl36 (`Nomzap`, `Npor`, `Datasoob`,`Timesoob`, `Soob`, `Naprav`) VALUES (NULL, '".$nompor11."', '".$tekdat."', '".$tektime."', '".$osntext11."', '".$nprv."');";


$result1=$db->query($query1);

$db->close();
require_once("adhnfrm.php");

// ---------------------------------------------

?>
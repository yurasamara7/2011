<?php
$Passwordmen=$_POST['Passwordmen'];
// ------------ http:www.internetbizn.ru
require_once("confprg.php"); // ������ ����������

$db=new mysqli($host77,$user77,$passw77,$bazd77); // ����������� � ����� ������

// --------------------------------- ��������� ���������� � ����� ������
if (mysqli_connect_errno()) {
echo "������ ���������� � ����� ������.���������� �����";
exit;
}
// ----------------

// ----------------  ���������� ������

$query1 = "UPDATE $bazd77.$tabl35 SET `Passwordadm` = '".$Passwordmen."' where  `Nomzap`='1'";
$result1=$db->query($query1);
if ($result1) {
echo "������ ������������ �������";
}
else {
echo "�� ���������� �������� ������";
}

?>
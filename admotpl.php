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

$vbrtbl=$_SESSION['$vbrtbl'];
$sort=$_SESSION['$sort'];
$filtr=$_SESSION['$filtr'];
$datfirst=$_SESSION['$datfirst'];
$datsecnd=$_SESSION['$datsecnd'];

$tablica=$tabl31; 
if ($filtr=="vse") {
$filtr1="";
}
else {
$filtr1="where (Datarazr >= '$datfirst') AND (Datarazr <= '$datsecnd')"; //
}


if ($sort=="podat") {
$sort1="Datarazr";
}
else {
$sort1="Npor";
}

$query1 = "select * from $bazd77.$tablica $filtr1 order by $sort1"; // ������� ������

$result1=$db->query($query1);

$res_array=array(); // ������� ������

// ������ ������� �� �� � ��������� ������
for ($count=0; $row=$result1->fetch_assoc();$count++) {
$res_array[$count][0]=$row['Npor'];
$res_array[$count][1]=$row['IdUser'];
$res_array[$count][2]=$row['IdPassword'];
$res_array[$count][3]=$row['Priznakrazr'];
$res_array[$count][4]=$row['Datarazr'];
$res_array[$count][5]=$row['EmailUser'];
}
// ----- end

// -------- ������� �������� �������
echo "<table border=2 align=center>";

if ($filtr=="vse") {
echo "<CAPTION> ����� �� ������������� �� ���� ������ </CAPTION>";
} else {
echo "<CAPTION> ����� �� ������������� � $datfirst �� $datsecnd </CAPTION>";
}

echo "<tr>
<td align=center>���������� �����</td>
<td align=center>������������</td>
<td align=center>������</td>
<td align=center>������� ����������</td>
<td align=center>���� ����������</td>
<td align=center>Email</td>
</tr>";
// ----- end


// ----- ������� ������ �� ������� � ��������� ����
for ($kstr=0; $kstr<$count; $kstr++) {
echo "<tr>
<td align=center>".$res_array[$kstr][0]."</td>
<td align=center>".$res_array[$kstr][1]."</td>
<td align=center>".$res_array[$kstr][2]."</td>
<td align=center>".$res_array[$kstr][3]."</td>
<td align=center>".$res_array[$kstr][4]."</td>
<td align=center>".$res_array[$kstr][5]."</td>
</tr>";
}
echo "</table>";
// ----- end

$db->close();

?>
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



$tablica=$tabl32; 
if ($filtr=="vse") {
$filtr1="";
}
else {
$filtr1="where (Dataplat >= '$datfirst') AND (Dataplat <= '$datsecnd')"; //
}


if ($sort=="podat") {
$sort1="Dataplat";
}
else {
$sort1="Nomzap";
}

$query1 = "select * from $bazd77.$tablica $filtr1 order by $sort1"; // ������� ������

$result1=$db->query($query1);

$res_array=array(); // ������� ������

// ������ ������� �� �� � ��������� ������
for ($count=0; $row=$result1->fetch_assoc();$count++) {
$res_array[$count][0]=$row['Nomzap'];
$res_array[$count][1]=$row['Dataplat'];
$res_array[$count][2]=$row['EmailUser'];
$res_array[$count][3]=$row['Summaplat'];
$res_array[$count][4]=$row['Summareal'];
$res_array[$count][5]=$row['Tipplat'];
}
// ----- end
echo "<table border=0 align=center>";
echo "<tr>
<td align=center>";

// -------- ������� �������� �������
echo "<table border=2 align=center>";
if ($filtr=="vse") {
echo "<CAPTION> ����� �� �������� �� ���� ������ </CAPTION>";
} else {
echo "<CAPTION> ����� �� �������� � $datfirst �� $datsecnd </CAPTION>";
}
echo "<tr>
<td align=center>����� ������</td>
<td align=center>���� �������</td>
<td align=center>Email ������������</td>
<td align=center>����� �������������</td>
<td align=center>����� �����������</td>
<td align=center>��� �������</td>
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
echo "</td>";
echo "<td>";


echo "</td>";
echo "</tr>";
echo "</table>";

$db->close();

?>
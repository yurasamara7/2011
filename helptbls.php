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

$logint1=$_SESSION['$logint1'];


$tablica=$tabl36; 
$nompor=$_SESSION['$nompor'];

//$filtr1="where Npor = '$logint1'"; //
$filtr1="where Npor = '$nompor'"; //



$sort1="Nomzap";


$query1 = "select * from $bazd77.$tablica $filtr1 order by $sort1 DESC "; // ������� ������

$result1=$db->query($query1);

$res_array=array(); // ������� ������

// ������ ������� �� �� � ��������� ������
for ($count=0; $row=$result1->fetch_assoc();$count++) {
$res_array[$count][0]=$row['Nomzap'];
$res_array[$count][1]=$row['Npor'];
$res_array[$count][2]=$row['Datasoob'];
$res_array[$count][3]=$row['Timesoob'];
$res_array[$count][4]=$row['Soob'];
$res_array[$count][5]=$row['Naprav'];
}
// ----- end

// -------- ������� �������� �������
echo "<table border=2 align=center>";
echo "<CAPTION> ���������� ��������� </CAPTION>";

echo "<tr>
<td align=center>���� ���������</td>
<td align=center>����� ���������</td>
<td align=center>������/�����</td>
<td align=center>���������</td>
</tr>";
// ----- end


// ----- ������� ������ �� ������� � ��������� ����
for ($kstr=0; $kstr<$count; $kstr++) {
echo "<tr>
<td align=center>".$res_array[$kstr][2]."</td>
<td align=center>".$res_array[$kstr][3]."</td>
<td align=center>".$res_array[$kstr][5]."</td>
<td align=center>".$res_array[$kstr][4]."</td>
</tr>";
}
echo "</table>";
// ----- end

$db->close();

?>
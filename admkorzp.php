<?php
@ session_start(); // ��������� ������
// ------------ http:www.internetbizn.ru
$nzp1=$_POST['nzp1'];
$_SESSION['$nzp1']=$nzp1;

if (!$nzp1) {
 echo "�� �� ����� ����� ������<br/>".
       "��������� ����";
 exit;
}

if (!get_magic_quotes_gpc()) {
$nzp2=addslashes($nzp1);
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


$query1 = "select * from $bazd77.$tablica where $tablica.$polezap=$nzp1 "; // ������� ������ �� ��� �������

$result1=$db->query($query1);
$row = $result1->fetch_assoc();
//$user1=$row['IdUser'];

if ($result1) {

switch ($_SESSION['$vbrtbl']) {

case "pls":

// ------------ ��������� ������ ������� ������������
echo "<h4 align=center> ����� �������������� </h4>";

echo "<form action=admsohzp.php target=nizFrame method=post>";
echo "<table align=center border=0 with=70>";

echo  "<tr>";
echo  "<td>����� ������ </td>";
echo  "<td> $row[Npor] </td>";
echo "</tr>";

echo "<tr>";
echo  "<td>������������ </td>";
echo  "<td><input type=text name=pols10 maxlength=25 size=25 value=$row[IdUser]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>������ </td>";
echo  "<td><input type=text name=psw10 maxlength=25 size=25 value=$row[IdPassword]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>������� ���������� </td>";
echo  "<td><input type=text name=prr10 maxlength=1 size=1 value=$row[Priznakrazr]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>���� ����� ����������� �������� </td>";
echo  "<td><input type=date name=dkr10 maxlength=12 size=12 value=$row[Datarazr]></td>";
echo "</tr>";


echo "<tr>";
echo  "<td>Email </td>";
echo  "<td><input type=text name=eml10 maxlength=25 size=25 value=$row[EmailUser]></td>";
echo "</tr>";

echo "<tr>";
echo "<td><input type=submit value=���������></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
// ------------ ����� ��������� ������ ������� ������������
break;

case "pt":

// ------------ ��������� ������ ������� ��������
echo "<h4 align=center> ����� �������������� </h4>";

echo "<form action=admsohzp.php target=nizFrame method=post>";
echo "<table align=center border=0 with=70>";

echo  "<tr>";
echo  "<td>����� ������ </td>";
echo  "<td> $row[Nomzap] </td>";
echo "</tr>";

echo "<tr>";
echo  "<td>���� ������� </td>";
echo  "<td><input type=date name=dpl10 maxlength=12 size=12 value=$row[Dataplat]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>Email </td>";
echo  "<td><input type=text name=eml10 maxlength=25 size=25 value=$row[EmailUser]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>����� ������� </td>";
echo  "<td><input type=text name=spl10 maxlength=10 size=10 value=$row[Summaplat]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>����� ����������� </td>";
echo  "<td><input type=text name=szl10 maxlength=10 size=10 value=$row[Summareal]></td>";
echo "</tr>";

echo "<tr>";
echo  "<td>��� ������� </td>";
echo  "<td><input type=text name=tpl10 maxlength=25 size=25 value=$row[Tipplat]></td>";
echo "</tr>";

echo "<tr>";
echo "<td><input type=submit value=���������></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
// ------------ ����� ��������� ������ ������� �������

break;

case "ps":
echo "������ ��� ������������� ��������� �����!";
break;

}


}
else {
echo "������������ ����� ������";

}


?>
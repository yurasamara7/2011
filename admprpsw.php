<?php
// ------------ http:www.internetbizn.ru
$Password1=$_POST['Password1'];

if (!$Password1) {
echo "�� �� ����� ������ <br/>";
echo  "�������� ���� � ��������� ����";
exit;
}


if (!get_magic_quotes_gpc()) {
$Password1=addslashes($Password1);
}


require_once("adm1psw.php"); // ������ ������ ������
require_once("confprg.php"); // ������ ����������


$db=new mysqli($host77,$user77,$passw77,$bazd77); // ����������� � ����� ������

// --------------------------------- ��������� ���������� � ����� ������
if (mysqli_connect_errno()) {
echo "������ ���������� � ����� ������.���������� �����";
exit;
}
// ----------------


// ---------------- ���� ��� �� ������� ������� ������

$sql = "\n"
    . " CREATE TABLE  IF NOT EXISTS $bazd77.$tabl35 ( `Nomzap` int( 11 ) NOT NULL ,\n"
    . " `Passwordadm` text NOT NULL ,\n"
    . " PRIMARY KEY ( `Nomzap` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);

// ---------------- ��������� ���� �� ������ ������ � ���� ������ � ���� ���� ��������� ������ � ������
$query1 = "select * from $bazd77.$tabl35 where  `Nomzap`='1'";

$result1=$db->query($query1);

$row = $result1->fetch_assoc();

$Nomzap1=$row['Nomzap'];
$Password2=$row['Passwordadm'];
// ------------------------------------


// --- ������ ������ � ���� ����, �������� ��������� �� ����� ������ ----
if ($Nomzap1=="1") {

if ($Password1==$Password2) {   
echo <<<vibradm11

<form action="admvpmn.php" BORDER="0" metod="post">
<fieldset>
<TABLE BORDER="0" FRAME="BORDER" align="center">
<CAPTION> �������� ����� ����������������� </CAPTION>

<TR>
<TD>
<input type="radio" name="viborp" checked="checked" value="otchizm" id="izmotch">
</TD>
<TD>
<label for="izmotch">������ �� �������� � �� ���������</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="viborp" value="izmadm" id="admizm">
</TD>
<TD>
<label for="admizm">��������� ������ ��������������</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="viborp" value="otvfos" id="otvfos">
</TD>
<TD>
<label for="otvfos">������ �� ����� �������� �����</label>
</TD>
</TR>


<TR>
<TD>
<input type="submit" value="����">
</TD>
</TR>

</TABLE>
</fieldset>
</form>

vibradm11;
}
else {
echo "������������ ������<br/>";
echo "�������� ���� � ��������� ����";

exit;
}
// -------------------------------------------------------------------------
}
// --- ������ ������ � ���� ���, �������� ������������� �� ��������� ������ ��������������� ������ --------
// ������ ����� ������
else {
if ($Password1==$admpas1) {       
echo <<<platn71
<form action="admmpsw.php" method="post">
<table align="center" border="0" >

<tr>
<td> ������� � ��������� ����� ������ </td>
<td> <input type="text" name="Passwordnew" maxlength="15" size="15"></td>
</tr>  

<tr>
<td colspan="2" align="center"><input type="submit" value="����"  size="35"></td>
</tr> 

</table>
</form>
<h4 align="center"> ���� �� �������, �� ����� ������� ������� �������������, ��������, ��������� ����� 
</h4>
platn71;

}
else {
echo "������������ ������ <br/>";
echo "�������� ���� � ���������� ��� ���";
exit;
}
}


$db->close();
?>

<?php
@ session_start(); // ��������� ������
$_SESSION['$per']="987654321����������������"; // ���� ��� ���������� ������ =1, �� ����� ������ ��������, ����� ��������
// ------------ http:www.internetbizn.ru
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html >
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<title> ��� ����</title>

<meta name="description" content=" ">
<meta name="keywords" content="">



<style>
table { background-image: url(wood25.jpg);}
div { background-image: url(wood25.jpg);}
form { background-image: url(wood25.jpg);}
p { background-image: url(wood25.jpg);}



</style>


</head>
<body>

<table align="center"   border="0" width="980px"> <! 0>

<! ---------- ��������� ----------->
<tr height="120px">
<td colspan="2">

<table align="center" border="0" width="100%">
<tr>
<td>
<h3 align="center"> �������� ������ �����</h3>
</td>
</tr>
</table>

</td>
</tr>
<! ---------- ����� ��������� ----------->

<! ---------- �������� ���� ------------------------------->
<tr>


<! ---------- ����� ����� �������� ���� ----------->
<td width="200px" valign="top">


<TABLE BORDER="0" align="left">           <! 1.1>
<TR>
<TD>
<div>
<TABLE BORDER="0" >                       <! 1.1.1>
<CAPTION> ���� � ������  </CAPTION>
<TR>
<TD>

<form action="Plprvh.php" target="mainFrame" align="left" method="post">
 <table align="center" border="0" >  <! 1.1.1.1>

  <tr>
   <td> ������������ </td>
   <td> <input type="text" name="login1" maxlength="15" size="15"></td>
  </tr>

  <tr>
   <td> ������ </td>
   <td> <input type="text" name="Password1" maxlength="15" size="15"></td>
  </tr>  

  <tr>
  <td colspan="2" align="center"><input type="submit" value="����"  size="35"></td>
  </tr> 

 </table>                                    <! k 1.1.1.1>
</form>

</TD>
</TR>

<TR>
<TD>
<a href="Plreg.php" align="left" target="mainFrame">�����������</a>&nbsp;&nbsp;
<a href="Plfzp.php" target="mainFrame">������ ������?</a></br>
</TD>
</TR>

</TABLE>                                     <! k 1.1.1>

</div>

</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
<a href="oproekte.php" target="mainFrame">O �������</a></br>
</TD>
</TR>

<TR>
<TD>
<?php
require_once("confprg.php"); // ������ ����������
echo "<a href=".$osnfreim." target=mainFrame>������</a></br>";
?>
</TD>
</TR>

<TR>
<TD>
<a href="Oplokno.html" target="mainFrame">������</a></br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR

<TR>
<TD>
</br>
</TD>
</TR

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR

<TR>
<TD>
</br>
</TD>
</TR

<TR>
<TD>
<a href="mailto:librarian@nxt.ru" target="_blank">Email ��������������:   librarian@nxt.ru</a></br>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR

<TR>
<TD>
<a href="helpa1.php" target="_blank">�������� ������������</a></br>
</TD>
</TR>



<TR>
<TD>
</br>
</TD>
</TR

<TR>
<TD>
<a href="admvpsw.php" target="mainFrame">����� ����</a></br>
</TD>
</TR>

</TABLE>                                      <! k 1.1>


</td>
<! ---------- ����� ����� ����� �������� ���� ----------->

<! ---------- ������ ����� �������� ���� ----------->
<td width="80%">
<table align="center" border="0" width="100%">
<TR>
<TD>
<?php
require_once("confprg.php"); // ������ ����������
echo "<iframe  name=mainFrame src=".$osnfreim." width=770px  height=700px>";
?>
</iframe>
</TD>
</TR>
</table>
</td>
<! ---------- ����� ������ ����� �������� ���� ----------->

</tr>
<! ---------- ����� �������� ���� ----------->

<! ---------������ --------------------------->
<tr height="120px">
<TD>

</td>
</tr>
<! --------- ����� ������ --------------------------->

</table>   <! K 0>

<?php
// ------------ ������ ������ � ��: ip � ���� ����� ----------------
$ip=getenv('REMOTE_ADDR'); //��������� �������� ip
$dat=date('c'); //��������� ����� ����� ip
require_once("confprg.php"); // ������ ����������
$db=new mysqli($host77,$user77,$passw77,$bazd77); // ����������� � ����� ������

if (mysqli_connect_errno()) {
}
else {
$query1 = "INSERT INTO $bazd77.$tabl33 (`Nomzap`,`Ip1`, `Datsession`) VALUES (NULL,'".$ip."', '".$dat."');";
$db->query($query1);
$db->close();
}
?>

</body>
</html>




 

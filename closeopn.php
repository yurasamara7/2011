<?php
@ session_start();

// ------------ http:www.internetbizn.ru

if ($_SESSION['$per']==1) {

// ---------------------- ������ ������� ��������� ������� ------------------------------------------------
echo <<<platn11


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<title> ��� ����</title>

<meta name="description" content=" ">
<meta name="keywords" content="">


</head>
<body bgcolor="#f6f6f6" text="black">


<h4 align="center"> �������� ������ </h4></br>

<table align="center" border="2" width="100%">
<CAPTION> ������� ������������� ��������� �������  </CAPTION>

<! --- ��� ����� --------->
<tr>
<td>
<h4 align="center">��� �����</h3>
</td>
<td>
<p align="center">
��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� �����
��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� �����
��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� ����� ��� �����
</p>
</td>
</tr>

<! --- ���� ������� --------->
<tr>
<td>
<h4 align="center">���� �������</h3>
</td>

<td>
<table align="center" border="2" width="70%">
<tr>
<td>
<h4 align="center">N1</h3>
</td>
<td>
<h4 align="center"> ������</h3>
</td>
</tr>
<tr>
<td>
<h4 align="center">N2</h3>
</td>
<td>
<h4 align="center"> ������</h3>
</td>
</tr>
</table>
</td>
</tr>

<! --- ���� ������ �� ���� --------->
<tr>
<td>
<h4 align="center">���� ������ �� ����</h3>
</td>
<td align="center">
<a href="1.zip" align="center">������</a>
</td>
</tr>

<! --- ���� �������� --------->
<tr>
<td>
<h4 align="center">���� ��������</h3>
</td>
<td>
<img src="1.jpg" align="center">

</td>
</tr>


</table>




</body>
</html>
platn11;
// --------------------- ����� ������� ��������� �������---------------------------

}else {

// ------------------------------------ ������ ������� ��������� ������� ------------------------------------------------------------------------------------------------------------------------------------------------

echo <<<platn21


<html>
<head>
</head>
<body text="red">

 <h4 align="center"> �������� ������ </h4></br>




</body>
</html>
platn21;
// ------------------------- ����� ������� ��������� �������-------------------------------

}



?>


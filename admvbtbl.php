<?php
echo <<<platn51
<!----------  http://internetbizn.ru/ ----------->
<html>
<head>
<title> </title>
</head>
<body>

</br>
 
</br>
<! ----------------------------------------------------  �����---->
<form action="admfrmtb.php" BORDER="1" metod="post">

<TABLE BORDER="0" FRAME="BORDER" align="center">

<! -------------------------------------------------- ������ ������---->
<TR>

<! ----------------------------------------------------1.1 ������ ������ ����� ������---->
<TD>

<! ----------------------------------------------------  �������---->
<fieldset>
<TABLE BORDER="0" FRAME="BORDER" align="center">
<CAPTION> ������ </CAPTION>

<TR>
<TD>
<input type="radio" name="vbrtbl" checked="checked" value="pls" id="vtpl">
</TD>
<TD>
<label for="vtpl">������������</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="vbrtbl" value="pt" id="vtpt">
</TD>
<TD>
<label for="vtpt">�������</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="vbrtbl" value="ps" id="vtps">
</TD>
<TD>
<label for="vtps">��������� �����</label>
</TD>
</TR>

</TABLE>
</fieldset>
</TD>
<! ---------------------------------------------------- �����  ������ ����� ������---->



<! ----------------------------------------------------1.2  ������ ������ ������ ������� ������---->
<TD>

<TABLE BORDER="0" FRAME="BORDER" align="center">

<TR>

<TD>
<! ---------------------------------------------------- 1.2.1 ---->
<! ----------------------------------------------------   ����������---->
<fieldset>
<TABLE BORDER="0" align="center">
<CAPTION> ���������� </CAPTION>

<TR>
<TD>
<input type="radio" name="sort" checked="checked" value="poryad" id="sortpr">
</TD>
<TD>
<label for="sortpr">�� �������</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="sort" value="podat" id="sortpd">
</TD>
<TD>
<label for="sortpd">�� ����</label>
</TD>
</TR>

</TABLE>
</fieldset>
<! ---------------------------------------------------- ����� ����������---->
</TD>
<! ----------------------------------------------------����� 1.2.1 ---->

<TD>
<! ---------------------------------------------------- 1.2.2 ---->
<! ----------------------------------------------------   ������---->
<fieldset>
<TABLE BORDER="0" align="center">
<CAPTION> ������ </CAPTION>

<TR>
<TD>
<input type="radio" name="filtr" checked="checked" value="vse" id="filtrvse">
</TD>
<TD>
<label for="filtrvse">���</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="filtr" value="per" id="filtper">
</TD>
<TD>
<label for="filtper">������</label>
</TD>
</TR>

</TABLE>
</fieldset>
<! ---------------------------------------------------- ����� ������---->
</TD>

<! ----------------------------------------------------����� 1.2.2 ---->

</TD>


</TR>
</TABLE>
<! ---------------------------------------------------- 1.2 �����   ������ ������ ������� ������---->

</TR>
<! -------------------------------------------------- ����� ������ ������---->


<! -------------------------------------------------- ������ ������---->
<TR>
<TD colspan="2">
</br>
</TD>
</TR>

<TR>
<TD colspan="2">
<p align="center"> ������ </p>
<p align="center"> c: <input type="date" name="datfirst" size="12">  �� <input type="date" name="datsecnd" size="12"></p>
</TD>
</TR>

<TR>
<TD colspan="2" align="center">
<input type="submit"  value="������������ �����">
</TD>
</TR>

<TR>
<TD colspan="2">
<h4 align="center"> ������ ����� ���� ����-��-��  (��������: 2011-02-21 , �.�.  21 ������� 2011 ���) </h4>
</TD>
</TR>

</TABLE>
</form>


</body>
</html>
platn51;

?>


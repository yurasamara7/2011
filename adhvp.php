<html>
<head>
<title> </title>
</head>
<body>

<form action="adhfrm.php" BORDER="0" metod="post">

<TABLE BORDER="0" align="center">
<TR>
<TD>

<fieldset>
<TABLE BORDER="0" align="center" width="330px">
<CAPTION> Отображение таблицы сообщений </CAPTION>

<TR>
<TD>
<input type="radio" name="filtr" checked="checked" value="vse" id="filtrvse">
</TD>
<TD>
<label for="filtrvse"> За все время</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="filtr" value="per" id="filtper">
</TD>
<TD>
<label for="filtper">За период</label>
</TD>
</TR>

</TABLE>
</fieldset>


</TD>
</TR>


<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
<p align="center"> c: <input type="date" name="dathfirst" size="12">  по <input type="date" name="dathsecnd" size="12"></p>
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD align="center">
<input type="submit" value="Отобразить">
</TD>
</TR>

<TR>
<TD>
</br>
</TD>
</TR>

<TR>
<TD>
<h4> Формат ввода даты ГГГГ-ММ-ДД  (Например: 2011-02-21 , т.е.  21 февраля 2011 год) </h4>

</TD>
</TR>

</TABLE>

</form>

</body>
</html>
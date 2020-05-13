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
<! ----------------------------------------------------  форма---->
<form action="admfrmtb.php" BORDER="1" metod="post">

<TABLE BORDER="0" FRAME="BORDER" align="center">

<! -------------------------------------------------- первая строка---->
<TR>

<! ----------------------------------------------------1.1 начало первая левая ячейка---->
<TD>

<! ----------------------------------------------------  таблицы---->
<fieldset>
<TABLE BORDER="0" FRAME="BORDER" align="center">
<CAPTION> Отчеты </CAPTION>

<TR>
<TD>
<input type="radio" name="vbrtbl" checked="checked" value="pls" id="vtpl">
</TD>
<TD>
<label for="vtpl">Пользователи</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="vbrtbl" value="pt" id="vtpt">
</TD>
<TD>
<label for="vtpt">Платежи</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="vbrtbl" value="ps" id="vtps">
</TD>
<TD>
<label for="vtps">Посещения сайта</label>
</TD>
</TR>

</TABLE>
</fieldset>
</TD>
<! ---------------------------------------------------- конец  первая левая ячейка---->



<! ----------------------------------------------------1.2  начало первая правая большая ячейка---->
<TD>

<TABLE BORDER="0" FRAME="BORDER" align="center">

<TR>

<TD>
<! ---------------------------------------------------- 1.2.1 ---->
<! ----------------------------------------------------   сортировка---->
<fieldset>
<TABLE BORDER="0" align="center">
<CAPTION> Сортировка </CAPTION>

<TR>
<TD>
<input type="radio" name="sort" checked="checked" value="poryad" id="sortpr">
</TD>
<TD>
<label for="sortpr">По порядку</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="sort" value="podat" id="sortpd">
</TD>
<TD>
<label for="sortpd">По дате</label>
</TD>
</TR>

</TABLE>
</fieldset>
<! ---------------------------------------------------- конец сортировка---->
</TD>
<! ----------------------------------------------------конец 1.2.1 ---->

<TD>
<! ---------------------------------------------------- 1.2.2 ---->
<! ----------------------------------------------------   фильтр---->
<fieldset>
<TABLE BORDER="0" align="center">
<CAPTION> Фильтр </CAPTION>

<TR>
<TD>
<input type="radio" name="filtr" checked="checked" value="vse" id="filtrvse">
</TD>
<TD>
<label for="filtrvse">Все</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="filtr" value="per" id="filtper">
</TD>
<TD>
<label for="filtper">Период</label>
</TD>
</TR>

</TABLE>
</fieldset>
<! ---------------------------------------------------- конец фильтр---->
</TD>

<! ----------------------------------------------------конец 1.2.2 ---->

</TD>


</TR>
</TABLE>
<! ---------------------------------------------------- 1.2 конец   первая правая большая ячейка---->

</TR>
<! -------------------------------------------------- конец первая строка---->


<! -------------------------------------------------- вторая строка---->
<TR>
<TD colspan="2">
</br>
</TD>
</TR>

<TR>
<TD colspan="2">
<p align="center"> Фильтр </p>
<p align="center"> c: <input type="date" name="datfirst" size="12">  по <input type="date" name="datsecnd" size="12"></p>
</TD>
</TR>

<TR>
<TD colspan="2" align="center">
<input type="submit"  value="сформировать отчет">
</TD>
</TR>

<TR>
<TD colspan="2">
<h4 align="center"> Формат ввода даты ГГГГ-ММ-ДД  (Например: 2011-02-21 , т.е.  21 февраля 2011 год) </h4>
</TD>
</TR>

</TABLE>
</form>


</body>
</html>
platn51;

?>


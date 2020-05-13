<html>
<head>
<!----------  http://internetbizn.ru/ ----------->
</head>


<body>

<TABLE BORDER="1" FRAME="BORDER" align="center">

<TR>
<! ------ режим редактирования>
<TD>

<h4 align="center"> Режим редактирования </h4>

<form action="admkorzp.php" target="nizFrame" method="post">
 <table align="center" border="0" with="70">

  <tr>
   <td>Введите номер записи </td> 
   <td><input type="text" name="nzp1" maxlength="5" size="5"></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" value="Редактировать"></td>
  </tr>
 </table>
</form>

</TD>
<! ------ конец режим редактирования>


<! ------ режим удаления>
<TD>
<h4 align="center"> Режим Удаления </h4>

<form action="admdelzap.php" target="nizFrame" method="post">
 <table align="center" border="0" with="70">

  <tr>
   <td>Введите номер записи </td> 
   <td><input type="text" name="nzp2" maxlength="5" size="5"></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" value="Удалить"></td>
  </tr>
 </table>
</form>

</TD>

<! ------конец режим удаления>

<! ------ режим очистки>
<TD>
<h4 align="center"> Режим очистки таблиц </h4>

<form action="admchistt.php"  target="nizFrame" method="post">
 <table align="center" border="0" with="70">

  <tr>
   <td>Введите номер начальной записи </td> 
   <td><input type="text" name="nzp3" maxlength="5" size="5"></td>
  </tr>

  <tr>
   <td>Введите номер конечной записи </td> 
   <td><input type="text" name="nzp4" maxlength="5" size="5"></td>
  </tr>

  <tr>
   <td colspan="2"><input type="submit" value="Очищать"></td>
  </tr>


 </table>
</form>

</TD>

<! ------конец режим очистки>



</TR>
</TABLE>

</body>
</html>

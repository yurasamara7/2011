<?php
@ session_start();

// ------------ http:www.internetbizn.ru

if ($_SESSION['$per']==1) {

// ---------------------- Начало раздела открытого доступа ------------------------------------------------
echo <<<platn11


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

<title> Ваш сайт</title>

<meta name="description" content=" ">
<meta name="keywords" content="">


</head>
<body bgcolor="#f6f6f6" text="black">


<h4 align="center"> Открытый доступ </h4></br>

<table align="center" border="2" width="100%">
<CAPTION> Примеры использования открытого доступа  </CAPTION>

<! --- Ваш текст --------->
<tr>
<td>
<h4 align="center">Ваш текст</h3>
</td>
<td>
<p align="center">
Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст
Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст
Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст Ваш текст
</p>
</td>
</tr>

<! --- Ваша таблица --------->
<tr>
<td>
<h4 align="center">Ваша таблица</h3>
</td>

<td>
<table align="center" border="2" width="70%">
<tr>
<td>
<h4 align="center">N1</h3>
</td>
<td>
<h4 align="center"> Иванов</h3>
</td>
</tr>
<tr>
<td>
<h4 align="center">N2</h3>
</td>
<td>
<h4 align="center"> Петров</h3>
</td>
</tr>
</table>
</td>
</tr>

<! --- Ваша ссылка на файл --------->
<tr>
<td>
<h4 align="center">Ваша ссылка на файл</h3>
</td>
<td align="center">
<a href="1.zip" align="center">Ссылка</a>
</td>
</tr>

<! --- Ваша картинка --------->
<tr>
<td>
<h4 align="center">Ваша картинка</h3>
</td>
<td>
<img src="1.jpg" align="center">

</td>
</tr>


</table>




</body>
</html>
platn11;
// --------------------- конец раздела открытого доступа---------------------------

}else {

// ------------------------------------ начало раздела закрытого доступа ------------------------------------------------------------------------------------------------------------------------------------------------

echo <<<platn21


<html>
<head>
</head>
<body text="red">

 <h4 align="center"> Закрытый доступ </h4></br>




</body>
</html>
platn21;
// ------------------------- конец раздела закрытого доступа-------------------------------

}



?>


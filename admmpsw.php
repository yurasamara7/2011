<?php
// ------------ http:www.internetbizn.ru
$Passwordnew=$_POST['Passwordnew'];
if (!$Passwordnew) {
 echo "�� �� ����� ������<br/>".
       "��������� ��� ������";
 exit;
}

if (!get_magic_quotes_gpc()) {
$Passwordnew=addslashes($Passwordnew);
}

require_once("confprg.php"); // ������ ����������

$db=new mysqli($host77,$user77,$passw77,$bazd77); // ����������� � ����� ������

// --------------------------------- ��������� ���������� � ����� ������
if (mysqli_connect_errno()) {
  echo "������ ���������� � ����� ������.���������� �����";
exit;
}
// ----------------


$query2 = "INSERT INTO $bazd77.$tabl35 (`Nomzap`, `Passwordadm`) VALUES ('1', '".$Passwordnew."');";
$result2=$db->query($query2);

echo " ����� ������ ������������ � ���� ������ <br/> ";

// ---- ���� ���, �� ������� ������� �������������
$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl31 ( `Npor` int( 11 ) NOT NULL AUTO_INCREMENT ,\n"
    . " `IdUser` text NOT NULL ,\n"
    . " `IdPassword` text NOT NULL ,\n"
    . " `Priznakrazr` int( 11 ) NOT NULL ,\n"
    . " `Datarazr` date NOT NULL ,\n"
    . " `EmailUser` text NOT NULL ,\n"
    . " KEY `Npor` ( `Npor` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);
// ------------------------------------------------------

// ---- ���� ���, �� ������� ������� ��������

$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl32 ( `Nomzap` int( 11 ) NOT NULL AUTO_INCREMENT ,\n"
    . " `Dataplat` date NOT NULL ,\n"
    . " `EmailUser` text NOT NULL ,\n"
    . " `Summaplat` double NOT NULL ,\n"
    . " `Summareal` double NOT NULL ,\n"
    . " `Tipplat` text NOT NULL ,\n"
    . " PRIMARY KEY ( `Nomzap` ) ,\n"
    . " KEY `Dataplat` ( `Dataplat` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);
//-----------------------------------------------------------------

// ---- ���� ���, �� ������� ������� ���������
$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl33 ( `Nomzap` int( 11 ) NOT NULL AUTO_INCREMENT ,\n"
    . " `Ip1` text NOT NULL ,\n"
    . " `Datsession` datetime NOT NULL ,\n"
    . " PRIMARY KEY ( `Nomzap` ) ,\n"
    . " KEY `Datsession` ( `Datsession` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);
//-----------------------------------------------------------------

// ---- ���� ���, �� ������� ������� ����� �������� �����
$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl36 (`Nomzap` INT NOT NULL AUTO_INCREMENT ,\n"
    . " `Npor` INT NOT NULL ,\n"
    . " `Datasoob` DATE NOT NULL ,\n"
    . " `Timesoob` TIME NOT NULL ,\n"
    . " `Soob` TEXT NOT NULL ,\n"
    . " `Naprav` TEXT NOT NULL ,\n"
    . " PRIMARY KEY (`Nomzap`), INDEX (`Npor`, `Datasoob`)) ENGINE = MyISAM;";

$result1=$db->query($sql);
//-----------------------------------------------------------------

echo " �������� ���� � ������ ������� ����� ����������������� � ����� ������� <br/> ";

$db->close();

?>
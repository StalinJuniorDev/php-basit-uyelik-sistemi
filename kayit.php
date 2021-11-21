<?php
include ("ayar.php");
if ($_POST) {
$kullanici = $_POST['kullanici'];
$sifre     = $_POST['sifre'];
$hakkinda  = $_POST['hakkinda'];

$veriekle = $db->prepare("INSERT INTO uyeler SET kullanici=?, sifre=?, hakkinda=?");
$veriekle ->execute(array($kullanici,$sifre,$hakkinda));
}
?>
<form action="" method="POST">
<input placeholder="Kullanıcı Adı" type="text" name="kullanici"><br>
<input placeholder="sifre" type="password" name="sifre"><br>
<textarea placeholder="Hakkında..." name="hakkinda"></textarea><br>
<input type="submit" value="Kayıt Ol!">
</form>
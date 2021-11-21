<?php
include ("ayar.php");
if ($_POST) {
	$GelenKullanici = $_POST['kullanici'];
	$GelenSifre     = $_POST['sifre'];

	if ($GelenKullanici != "" and $GelenSifre != "") {
		$KullaniciKontrol = $db->prepare("SELECT * FROM uyeler WHERE kullanici=? and sifre=?");
		$KullaniciKontrol->execute([$GelenKullanici, $GelenSifre]);
		$KullaniciKontrolSayisi = $KullaniciKontrol->rowCount();

		if ($KullaniciKontrolSayisi > 0) {
			$_SESSION['kullanici'] = $GelenKullanici;
			echo "Giriş Başarılı!";
			header("refresh:2; url=index.php");
		}else{
			echo "Kullanıcı Bulunamadı!";
		}
	}else{
		echo "Lütfen Boş Bırakmayın!";
	}
}
?>

<form action="" method="POST">
<input placeholder="Kullanıcı Adı" type="text" name="kullanici"><br>
<input placeholder="Şifre" type="password" name="sifre"><br>
<input type="submit" value="Giriş Yap!">
</form>
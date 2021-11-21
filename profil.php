<?php
include ("ayar.php");
$p = @$_GET['@kullanici'];

$veri = $db->prepare("SELECT * FROM uyeler where id=?");
$veri->execute(array($p));
while($row = $veri->fetch(PDO::FETCH_ASSOC)){
    echo "Kullanıcı Adı: ".$row["kullanici"]."<br>";
    echo "Hakkında: ".$row["hakkinda"]."<br>";
    echo "Kayıt Olduğu Tarih: ".$row["tarih"];

}


<?php
include "hafta11.php";
$kayit=$db->exec("INSERT INTO deneme SET
id='4',ad='gelisim',soyad='üniversitesi'");
if($kayit)
{
    echo "kayıt başarılı";
}
else{
    echo "kayıt işlemi başarısız";
}

//veritabanı prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET
id=?,
ad=?,
soyad=?
");
$sorgu->execute(array("5","Tuğba","Saray Çetinkaya"));
if($kayit)
{
    echo "kayıt işlemi başarılı";
}
else
{
    echo "kayıt işlemi başarısız";
}

//veritabanı prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET
id=:id
ad=:ad
soyad=:soyad
");
$kayit=$sorgu->execute(array(
    "soyad"=>"benli",
    "id"=> "8",
    "ad"=> "Sena Nur"));
if($kayit)
{
    echo "kayıt işlemi başarılı";
}
else{
    echo "kayıt işlemi başarısız";
}
?>
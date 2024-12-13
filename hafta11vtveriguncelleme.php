<?php
include "hafta11.php";
$guncelle=$db->exec("UPDATE deneme SET adi='gülçin'
WHERE soyad='DENEME' ");
if($guncelle)
{
    echo "güncelleme başarılı";
}
else{
    echo "güncelleme başarısız";
}
//veritabanından prepare ile veri güncelleme
$sorgu$db->prepare("UPDATE deneme SET
ad=?,
soyad=?
");
$guncelle=$sorgu->execute(array("çisem","atıcı"));
if($guncelle)
{
    echo "güncelleme başarılı";
}
else{
    echo "güncelleme başarısız";
}
?>
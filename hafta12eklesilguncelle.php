<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>EKLE SİL GÜNCELLE</title>
</head>

<body>
    <form name="form" action="" method="post">
        <table>
            <tr>
                <td>TC NUMARASI</td>
                <td><input type="text" name="tc"></td>
            </tr>
            <tr>
                <td>ADI</td>
                <td><input type="text" name="adi"></td>
            </tr>
            <tr>
                <td>SOYADI</td>
                <td><input type="text" name="soyadi"></td>
            </tr>
                <tr>
            <td colspan="3">
                <input type="submit" name="kaydet" value="KAYDET"> 
                <input type="submit" name="guncelle" value="GÜNCELLE">
                <input type="submit" name="sil" value="SİL">
                </tr>
            </td>
        </table>
    </form>
</body>
</html> 

<?php
$db=new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root","");
if(isset($_POST["kaydet"]))
{
    $ktc=$_POST["tc"];
    $kadi=$_POST["adi"];
    $ksoyadi=$_POST["soyadi"];
    if($db)
    {
        echo "Veritabanı bağlantısı gerçekleşti"."<br>";
        $kaydet=$db->exec("INSERT INTO ogrencidurum(ad,soyad,tc) VALUES('$kadi','$ksoyadi','$ktc')");
        if($kaydet)
        {
            echo "Kayıt ekleme başarılı";
        }
        else{
            echo "Kayıt ekleme başarısız";
        }
    }
}
if(isset($_POST["guncelle"]))
 {
    $ktc=$_POST["tc"];
    $kadi=$_POST["ad"];
    $Ksoyad=$_POST["soyad"];
    if($db)
    {
       echo "Veritabanı bağlantısı gerçekleşti"."<br>";
       $guncelle=$db->exec("UPDATE ogrencidurum SET ad='$kadi',soyad='$ksoyadi' WHERE tc='$ktc'");
       if($guncelle)
       {
        echo "günelleme başarı ile tamamlandı";
       }
       else
       {
        echo "güncelleme tamamlanmadı";
       }
    }
}

if(isset($_POST["sil"]))
$ktc=$_POST["tc"];
$kadi=$_POST["adi"];
$ksoyadi=$_POST["soyadi"];
if($db)
{
    echo "Veri tabanı bağlantısı gerçekkleşti"."<br>";
  $sil=$db->exec("DELETE FROM ogrencidurum WHERE ad='$kadi'");
  if($sil)
  {
    echo "Silme işlemi başrılı";
  }
  else
  {
    echo "Silme işlemi başarısız";
  }
}
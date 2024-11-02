<?php 
if(isset($_POST["hesapla"]))
{
    $kadi=$_POST["ad"];
    $ksoyadi=$_POST["soyad"];
    $kyas=2024-$_POST["dogum_yili"];
    $kboy=$_POST["boy"];
    $kkilo=$_POST["kilo"];
    $bki=$kkilo/($kboy*$kboy);
    echo "Merhaba".$kadi." ".$ksoyadi."<br>". 
    "Yaşınız:".$yas."<br>". 
    "Beden kitle indeksi ölçüleriniz:".$bki."<br>";

if($bki<18)
{
    echo "Zayıf Kategorisindesiniz";
}
else if($bki<19 && $bki<25)
{
    echo "Normal Kategorisindesiniz";

}
else if($bki>26 && $bki>29)
{
    echo "Kilolu Kategorrisindesiniz";

}
else 
{
    echo "Obez Kategorisindesiniz ";
}  

}


?>
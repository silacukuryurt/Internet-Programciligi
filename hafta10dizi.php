<?php

// Dizilerde Ekle Çıkar Fonksiyonları

// echo"<h3>Array_unshift() Kullanımı</h3>"."<br>";
// $diller=array("PHP","C#");
// array_unshift($diller,"Javascript","Phyton");
// print_r($diller);
// echo"<h3>Array_shift() kullanımı</h3>";
// array_shift($diller);
// print_r($diller)
// echo"<h3>Array_push() kullanımı</h3>";
// array_push($diller,"Vue","Laravel");
// print_r($diller);
// echo "<h3>Array_pop Kullanımı</h3>";
// array_pop($diller);
// print_r($diller)
// echo "<h3>Unset Kullanımı</h3>";
// unset($diller["2"]);



 //Dizi Birleştirme

// echo"<h3>Dizi Elemanlarını Birleştirme</h3>"; 
// $marmara_bolge=array("balıkesir","istanbul","bursa");
// $ege_bolge=array("izmir","manisa","aydın");
// $tum_iller=array_merge($marmara_bolge,$ege_bolge);
// echo "<pre>";
// print_r($tum_iller);
// echo"</pre>";

//Dizideki Ortak Elemanı Bulma

// echo"<h3>Dizideki Ortak Eleman</h3>";
// $dizi1=array("Araba","Kalem","Ev");
// $dizi2=array("Araba","Kalem","Masa");
// $dizi3=array("Kalem","Araba","Sandalye");
// $dizi4=array("Kasa","Kalem","Araba");
// $ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
// echo"<pre>";
// print_r($ortak_bul);
// echo"</pre>";

//Dizi Elemanlarını Tek Seferde Çıktı Alma

// echo"<h3>İmplode Kulllanımı</h3>";
// $programlamadilleri=array("PHP","HTML","CSS","javascript");
// $duzenle=implode("|",$programlamadilleri);
// echo $duzenle;

//Dizi Elemanlarından Rastgele Seçim

// echo"<h3>Diziden rastgele eleman seçme</h3>";
// $sehir=array("Giresun","İstanbul","İzmir","SİVAS","Erzurum","Muğla");
// $rastgele=array_rand($sehir);
// echo $sehir[$rastgele];



?>


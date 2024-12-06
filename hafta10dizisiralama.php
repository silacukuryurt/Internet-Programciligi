<?php
// echo"<h3>Dizilerde Sıralama</h3>";
// $iller=array(
//     "Ankara"=>6,
//     "İstanbul"=>34,
//     "İzmir"=>35,
//     "Balıkesir"=>10,
//     "Kocaeli"=>41,
//     "Kırklareli"=>39

// );
// echo"<h3>Dizi elemanlarını anahtar değerlerini koruyarak küçükten büyüğe sıralama</h3>";
// echo"<pre>";
// asort($diller);
// print_r($iller);
// echo"</pre>";
// echo"<h3>Dizi elemanlarını anahtar değerlerini koruyarak büyükten küçüğe sıralama</h3>";
// echo"<pre>";
// arsort($diller);
// print_r($iller);
// echo"</pre>";


// $sayi=array(
//     "1"=>10,
//     "2"=>30,
//     "3"=>5,
//     "4"=>85,
//     "5"=>126
// );
// echo"<h3>Dizi elemanlarını küçükten büyüğe doğru sıralama</h3>";
// echo"<pre>";
// sort($sayi);
// print_r($sayi);
// echo"</pre>";

// echo"<h3>Dizi elemanlarını büyükten küçüğe doğru sıralama</h3>";
// echo"<pre>";
// rsort($sayi);
// print_r($sayi);
// echo"</pre>";

// echo"<h3>Dizi elemanlarını rastgele sıralama</h3>";
// echo"<pre>";
// shuffle($sayi);
// print_r($sayi);
// echo"</pre>";

// echo"<h3>Dizi elemanlarını indis değerine göre küçükten büyüğe sıralama</h3>";
// echo"<pre>";
// ksort($sayi);
// print_r($sayi);
// echo"</pre>";
// echo"<h3>Dizi elemanlarını indis değerine göre büyükten küçüğe doğru sıralama</h3>";

// echo"<pre>";
// krsort($sayi);
// print_r($sayi);
// echo"</pre>";


//Dizi Elemanlarını Tersine Çevirme
// echo"<h3>Dizi elemanlarını tersine çevirme</h3>";
// $isim=array("Sıla","Pınar","Aysima","Ceren");
// $ters_cevir=array_reverse($isim);
// echo"İlk hali"."<br>";
// echo"<pre>";
// print_r($isim);
// echo"</pre>";
// echo"Ters hali"."<br>";
// echo"<pre>";
// print_r($ters_cevir);
// echo"</pre>";

//Dizi Sayıcıları
echo"<h3>Dizi Sayıcıları</h3>";
$sayi=array(6,2,4,1,1,3,5,6);
echo"eleman sayısı:".count($sayi)."<br>".
"dizideki elemanların çarpım sonucu:".array_product($sayi)."<br>"
"dizideki tekrar eden elemanlar:";
print_r(array_count_values($sayi));
?>

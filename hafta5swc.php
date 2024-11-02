<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case Uygulama</title>
</head>
<body>
    <form  name="form" action="" method="post">
        Sayı Giriniz:
        <input type="text" name="gun">
        <input type="submit" name="gonder" value="Gönder">

    </form>

</body>
</html>

<?php
if(isset($_POST["gonder"]))
{
    $kgun=$_POST["gun"];
    switch($kgun){
           case 1: echo "Bugün günlerden Pazartesi";
           break;
           case 2: echo "Bugün günlerden Salı";
           break;
           case 3: echo "Bugün günlerden Çarşamba";
           break;
           case 4: echo "Bugün günlerden Perşembe";
           break;
           case 5: echo "Bugün günlerden Cuma";
           break;
           case 6: echo "Bugün günlerden Cumartesi";
           break;
           case 7: echo "Bugün günlerden Pazar";
           break;
           default: echo "Böyle bir gün olamaz";

    }
}
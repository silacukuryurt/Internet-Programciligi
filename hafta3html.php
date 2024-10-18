<!DOCTYPE html>
<html lang="en">
<kafa>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=cihaz-genişliği, başlangıç-ölçeği=1.0">
    <title>Kullanıcı Formu</title>
</başlık>
<gövde>
    <form adı="form" eylem=" " yöntem="gönderi">
        <tablo>
<tr>
<td>Adı:</td>
<td><input type="text" name="adi">
</td>
</tr>

<tr>
<td>Soyadı:</td>
<td><input type="text" name="soyadi"></td>
</tr>

<tr>
    <td><input type="submit" name="gonder" value="Kaydet"></td>
</tr>
        </tablo>
</gövde>
</html>

<?php
if(isset($_POST["gonder"]))
{
$kadi=$_POST["adi"];
$ksoyadi=$_POST["soyadi"];
echo "Merhaba" .$kadi. " ".$ksoyadi;


}

?>

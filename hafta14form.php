<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FONKSİYON</title>
</head>
<body>
    <form name="form" action="" method="post">
        <table>
            <tr>
                <td>Adınızı Giriniz</td>
                <td><input type="text" name="ad"></td>
            </tr>
            <tr>
                <td>1.Sayıyı Giriniz</td>
                <td><input type="number" name="s1"></td>
            </tr>
            <tr>
            <td>2.Sayıyı Giriniz</td>
            <td><input type="number" name="s2"></td>
            </tr>
            <tr>
                <td>Seçim Yapınız</td>
                <td><select name="secim">
                    <option value="ad">ADINI YAZDIR</option>
                    <option value="topla">TOPLAMA</option>
                    <option value="carp">ÇARPMA</option>
                    <option value="cikar">ÇIKARMA</option>
                    <option value="bol">BÖLME</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" name="gonder"
                value="Gönder"></td>
            </tr>
        </table>
    </form>
</body>
</html>
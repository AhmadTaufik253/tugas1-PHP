<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun Datar Jajar Genjang</title>
</head>
<body>
    <h1>Bangun Datar Jajar Genjang</h1>
    <form action="" method="POST"> 
        <table>
            <tr>
                <td>Alas</td>
            <td>
                    <input type="number" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>
                    <input type="number" name="tinggi" require>
                </td>
            </tr>
            <tr>
                <td>Sisi Miring</td>
                <td>
                    <input type="number" name="sisimiring" require>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="hitung"></td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $sisimiring = $_POST['sisimiring'];

            // rumus untuk menghitung luas dan keliling jajar genjang
            $luasJajarGenjang = $alas * $tinggi;
            $kelilingJajarGenjang = 2 * ($alas + $sisimiring);

            echo '<br>Hasil perhitungan Luas Jajar Genjang';
            echo '<br> Diketahui : ';
            echo '<br> Alas : '.$alas;
            echo '<br> Tinggi : '.$tinggi;
            
            echo '<br> Maka Luasnya : '.$luasJajarGenjang;
            echo '<br> Maka Kelilingnya : '.$kelilingJajarGenjang;


        }
    ?>
</body>
</html>
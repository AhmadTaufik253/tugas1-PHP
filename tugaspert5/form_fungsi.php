<?php 
$ar_prodi = ["SI"=>"Sistem Informasi","TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10,"Javascript"=>20,"RWD bootstrap"=>20,"PHP"=>30,"MySQL"=>30,"Laravel"=>40];

$domisili = ["Jakarta","bandung","Bekasi","Malang","Surabaya"];

?>
<fieldset style="background-color: #f2f2f2;">
    <legend>Form Registrasi Kelompok</legend>
    <form action="" method="POST">
    <table>
        <thead>
            <th>Form Registrasi</th>
        </thead>
        <tbody>
                <tr>
                    <td>NIM : </td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                        <input type="radio" name="jk" id="" value="laki-laki">Laki-Laki &nbsp;
                        <input type="radio" name="jk" id="" value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi : </td>
                    <td>
                        <select name="prodi" id="">
                            <?php
                                foreach($ar_prodi as $prodi => $v){
                                    ?>
                                    <option value="<?= $prodi ?>"><?= $v ?></option>
                                <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming : </td>
                    <td>
                        <?php
                            foreach ($ar_skill as $skill => $s) {
                                ?>
                                <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili : </td>
                    <td>
                        <select name="domisili" id="">
                            <?php
                                foreach($domisili as $d){
                                    ?>
                                    <option value="<?= $d ?>"><?= $d ?></option>
                                <?php } ?>
                        </select>
                    </td>
                </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button name="proses">Submit</button>
                </th>
            </tr>
        </tfoot>
    </table>
    </form>
</fieldset>

<?php
    error_reporting(0);

    if(isset($_POST['proses'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $skill = $_POST['skill'];
        $domisili = $_POST['domisili'];
    }
    
?>
<br><br>
<table style="border: 1px solid #000; font-weight: bold;">
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?= $nim ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?= $jk ?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td>:</td>
        <td><?= $prodi ?></td>
    </tr>
    <tr>
        <td>Skill</td>
        <td>:</td>
        <td>
        <?php
        foreach ($skill as $s) { ?>
            <?= $s ?>
        <?php } ?>
        </td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td>:</td>
        <td><?= $domisili ?></td>
    </tr>
    <tr>
        <td>Skor Skill</td>
        <td>:</td>
        <td>
            <?php
            foreach ($skill as $s) {
            $skor_skill += $ar_skill[$s];
            } ?>
            <?= $skor_skill ?>
        </td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td>:</td>
        <td><?= kategori_skill($skor_skill) ?></td>
    </tr>
</table>
<?php
    // function untuk menentukan kategori skill
    function kategori_skill($skor_skill)
    {
        if ($skor_skill == 0 ) {
            return "Tidak Memadai";
        } elseif ($skor_skill > 0 && $skor_skill <= 40) {
            return "Kurang";
        } elseif ($skor_skill > 40 && $skor_skill <= 60) {
            return "Cukup";
        } elseif ($skor_skill > 60 && $skor_skill <= 100) {
            return "Baik";
        } elseif ($skor_skill > 100 && $skor_skill <= 160) {
            return "Sangat Baik";
        } else {
            return "";
        }
    }
    
?>

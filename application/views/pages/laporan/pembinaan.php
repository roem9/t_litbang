<?php
    function searchForPresensi($tgl, $array) {
        $data = "";
        foreach ($array as $key => $val) {
            if ($val['tgl'] == $tgl) {
                $data = $key;
            }
        }

        if($data == ""){
            return "no";
        } else {
            return $data;
        }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($kelas as $kelas) :?>
        <h3>Pembinaan <?= $kelas['program']?></h3>
        <table border=1>
            <thead>
                <tr>
                    <td>No.</td>
                    <td><center>Pemateri</center></td>
                    <td colspan=5><center>Tgl</center></td>
                    <td colspan=3><center>Program</center></td>
                    <td>Materi</td>
                    <td>Tugas</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    foreach ($kelas['kbm'] as $kbm) :?>
                    <tr>
                        <td><center><?= $i++?></center></td>
                        <td><?= $kbm['kpq']['nama_kpq']?></td>
                        <td colspan=5><?= date("d-m-Y", strtotime($kbm['tgl']))?></td>
                        <td colspan=3><?= $kbm['program_kbm']?></td>
                        <td><?= $kbm['materi']?></td>
                        <td><?= $kbm['tugas']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <br>

        <table border=1>
            <thead>
                <tr>
                    <td rowspan=2>No</td>
                    <td rowspan=2>Nama</td>
                    <td colspan=5><center>Tgl Kbm</center></td>
                    <td colspan=3><center>Rekap</center></td>
                </tr>
                <tr>
                    <!-- tgl kbm -->
                        <?php for ($i=0; $i < 5; $i++) :?>
                            <td>
                                <center>
                                    <?php 
                                        if(isset($kelas['kbm'][$i])) echo date("j", strtotime($kelas['kbm'][$i]['tgl']));
                                        else echo "-";
                                    ?>
                                </center>
                            </td>
                        <?php endfor;?>
                    <!-- tgl kbm -->

                    <!-- rekap -->
                        <td><center>H</center></td>
                        <td><center>I</center></td>
                        <td><center>S</center></td>
                    <!-- rekap -->
                </tr>
            </thead>

            <tbody>
                <?php foreach ($kelas['peserta'] as $i => $peserta) :?>
                    <tr>
                        <td><center><?= $i+1?></center></td>
                        <td><?= $peserta['nama_kpq']?></td>
                        <?php 
                            $hadir = 0;
                            $izin = 0;
                            $sakit = 0;

                            for ($i=0; $i < 5; $i++) :?>
                            <td>
                                <center>
                                    <?php
                                        if(isset($kelas['kbm'][$i])) {
                                            date("j", strtotime($kelas['kbm'][$i]['tgl']));
                                            foreach ($peserta['kbm'] as $kbm) {
                                                if($kbm['tgl'] == $kelas['kbm'][$i]['tgl']){
                                                    if($kbm['keterangan'] == "hadir") {
                                                        echo "H";
                                                        $hadir++;
                                                    }
                                                    else if($kbm['keterangan'] == "izin") {
                                                        echo "I";
                                                        $izin++;
                                                    }
                                                    else if($kbm['keterangan'] == "sakit") {
                                                        echo "S";
                                                        $sakit++;
                                                    }
                                                }
                                            }
                                        } else {
                                            echo "-";
                                        }
                                    ?>
                                </center>
                            </td>
                        <?php endfor;?>
                        <td><center><?= $hadir?></center></td>
                        <td><center><?= $izin?></center></td>
                        <td><center><?= $sakit?></center></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    <?php endforeach;?>
</body>
</html>
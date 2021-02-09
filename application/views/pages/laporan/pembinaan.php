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
                    <th>No.</th>
                    <th><center>Hari</center></th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Pemateri</th>
                    <th>Materi</th>
                    <th>Tugas</th>
                    <th>Jumlah KPQ Hadir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    foreach ($kelas['kbm'] as $kbm) :?>
                    <tr>
                        <td><center><?= $i++?></center></td>
                        <td><?= $kbm['hari']?></td>
                        <td><?= date("d-m-Y", strtotime($kbm['tgl']))?></td>
                        <td><?= $kbm['jam']?></td>
                        <td><?= $kbm['nama_kpq']?></td>
                        <td><?= $kbm['materi']?></td>
                        <td><?= $kbm['tugas']?></td>
                        <td><center><?= $kbm['peserta']?></center></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <br><br>
    <?php endforeach;?>
</body>
</html>
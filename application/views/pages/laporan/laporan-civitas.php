<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>No. KTP</th>
                <th>Status</th>
                <th>Nama Civitas</th>
                <th>No. Hp</th>
                <th>Jenis Kelamin</th>
                <th>Tgl Masuk</th>
                <th>Tgl Keluar</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Pendidikan</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach ($civitas as $civitas) :?>
                <tr>
                    <td><?= $no++?></td>
                    <td>'<?= $civitas['nip']?></td>
                    <td>'<?= $civitas['no_ktp']?></td>
                    <td><?= $civitas['status']?></td>
                    <td><?= $civitas['nama_kpq']?></td>
                    <td>'<?= $civitas['no_hp']?></td>
                    <td><?= $civitas['jk']?></td>
                    <td><?= $civitas['tgl_masuk']?></td>
                    <td><?= $civitas['tgl_keluar']?></td>
                    <td><?= $civitas['t4_lahir'] . ", " . date("d-m-Y", strtotime($civitas['tgl_lahir']))?></td>
                    <td><?= $civitas['alamat']?></td>
                    <td><?= $civitas['pendidikan']?></td>
                    <td><?= $civitas['jurusan']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
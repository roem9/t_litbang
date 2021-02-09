<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="d-flex justify-content-begin mt-3">
                    <h1 class="h3 mb-0 text-gray-800 mr-3"><?= $title?></h1>
                </div>
            </div>

            <table border=1 style="padding-top: 1px">
                <thead>
                    <tr>
                        <th style="padding:10px">No.</th>
                        <th style="padding:10px">Status</th>
                        <th style="padding:10px">Pengajar</th>
                        <th style="padding:10px">Materi</th>
                        <th style="padding:10px">Tugas</th>
                        <th style="padding:10px">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach ($pembinaan as $pembinaan) :?>
                        <tr>
                            <td style="padding:10px"><center><?= $no++?></center></td>
                            <td style="padding:10px"><?= $pembinaan['status']?></td>
                            <td style="padding:10px"><?= $pembinaan['nama_kpq']?></td>
                            <td style="padding:10px"><?= $pembinaan['materi']?></td>
                            <td style="padding:10px"><?= $pembinaan['tugas']?></td>
                            <td style="padding:10px"><?= date("d-m-Y", strtotime($pembinaan['tgl'])) . ", " . $pembinaan['jam']?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $("#sidebarRekap").addClass("active");
</script>
<table class="table text-xs" style="padding-top: 1px">
    <thead>
        <tr>
            <th style="padding:10px">No.</th>
            <th style="padding:10px">Tgl</th>
            <th style="padding:10px">Waktu</th>
            <th style="padding:10px">Status</th>
            <th style="padding:10px">Program</th>
            <th style="padding:10px">Pengajar</th>
            <th style="padding:10px">Materi</th>
            <th style="padding:10px">Tugas</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach ($pembinaan as $pembinaan) :?>
            <tr>
                <td style="padding:10px"><center><?= $no++?></center></td>
                <td style="padding:10px"><?= date("d-m-Y", strtotime($pembinaan['tgl']))?></td>
                <td style="padding:10px"><?= $pembinaan['jam']?></td>
                <td style="padding:10px"><?= $pembinaan['status']?></td>
                <td style="padding:10px"><?= $pembinaan['program_kbm']?></td>
                <td style="padding:10px"><?= $pembinaan['nama_kpq']?></td>
                <td style="padding:10px"><?= $pembinaan['materi']?></td>
                <td style="padding:10px"><?= $pembinaan['tugas']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?= footer()?>
<script>
    $("#sidebarRekap").addClass("active");
</script>
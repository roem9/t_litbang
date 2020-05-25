<!-- modal detail -->
    <div class="modal fade" id="modalCivitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title" id="exampleModalScrollableTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-1" data-id=""><i class="fas fa-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-2" data-id=""><i class="fas fa-book"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-3" data-id=""><i class="fas fa-user-cog"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-4" data-id=""><i class="fas fa-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body fo-13">
                            <form action="<?= base_url()?>civitas/editcivitas" method="POST" enctype="multipart/form-data">
                                <div class="form-detail" id="form-1">
                                    <div class="form-group">
                                        <label for="nama">Nama KPQ <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm form-1" name="nama" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Gender <span class="text-danger">*</span></label>
                                        <select name="jk" id="jk" class="form-control form-control-sm form-1">
                                            <option value="">Pilih Gender</option>
                                            <option value="Pria">Ikhwan</option>
                                            <option value="Wanita">Akhwat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="t4_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm form-1" name="t4_lahir" id="t4_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tgl Lahir <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control form-control-sm form-1" name="tgl_lahir" id="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No. HP <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm form-1" name="no_hp" id="no_hp">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                        <textarea name="alamat" id="alamat" class="form-control form-control-sm form-1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan <span class="text-danger">*</span></label>
                                        <select name="pendidikan" id="pendidikan" class='form-control form-control-sm form-1'>
                                            <option value="">Pilih Pendidikan</option>
                                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                                            <option value="DI">DI</option>
                                            <option value="DII">DII</option>
                                            <option value="DIII">DIII</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm form-1" name="jurusan" id="jurusan">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_ktp">No. KTP <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm form-1" name="no_ktp" id="no_ktp">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-success btn-sm" id="btn-next-1"><i class="fas fa-arrow-right"></i> Data Akademik</button>
                                    </div>
                                </div>
                                <div class="form-detail" id="form-2">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="status" class="form-control form-control-sm form-1">
                                            <option value="">Pilih Status</option>
                                            <option value="aktif">Aktif</option>
                                            <option value="cuti">Cuti</option>
                                            <option value="resign">Resign</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIK <span class="text-danger">*</span></label>
                                        <input type="text" name="nip" id="nip" class="form-control form-control-sm form-1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_masuk">Tgl Bergabung <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control form-control-sm form-1" name="tgl_masuk" id="tgl_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_kelas">Tgl Kelas Pertama <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control form-control-sm form-1" name="tgl_kelas" id="tgl_kelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_keluar">Tgl Keluar <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control form-control-sm form-1" name="tgl_keluar" id="tgl_keluar">
                                    </div>
                                    <div class="form-group">
                                        <label for="lama_bergabung">Lama Bergabung <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm form-1" id="lama_bergabung" readonly>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-success btn-sm" id="btn-back-2"><i class="fas fa-arrow-left"></i> Data Diri</button>
                                        <button type="submit" class="btn btn-primary btn-sm" id="btn-submit-1">Update</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-detail" id="form-3">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-info">Kemampuan Civitas <span class="badge badge-warning" id="jumlah-kemampuan"></span></li>
                                    <li class="list-group-item" id="no-data"><i class="fa fa-exclamation-circle text-warning"></i> Tidak ada kemampuan</li>
                                    <div id="list-kemampuan"></div>
                                </ul>
                            </div>
                            <div class="form-detail" id="form-4">
                                <form action="<?=base_url()?>civitas/tambahkemampuan" method="post">
                                    <input type="hidden" name="nip" id="nip_kemampuan">
                                    <div class="form-group">
                                        <label for="kemampuan">Kemampuan</label>
                                        <select name="kemampuan" id="kemampuan" class="form-control form-control-sm" required>
                                            <option value="">Pilih Kemampuan</option>
                                            <?php foreach ($program as $program) :?>
                                                <option value="<?=$program['nama_program']?>">
                                                    <?=$program['nama_program']?>
                                                </option>
                                                <?php endforeach;?>
                                        </select>
                                        <div class="form-group d-flex justify-content-end mt-3">
                                            <input type="submit" value="Tambah Kemampuan" class="btn btn-sm btn-success" id="btn-submit-2">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
        </form>
    </div>
<!-- modal detail -->

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 mt-3"><?= $header?></h1>
            </div>
            <?php if( $this->session->flashdata('pesan') ) : ?>
                <div class="row">
                    <div class="col-6">
                        <?= $this->session->flashdata('pesan');?>
                        </div>
                </div>
            <?php endif; ?>
            <div class="card shadow mb-4" style="max-width: 1000px">
                <div class="card-body">
                    <table id="dataTable" class="table table-sm fo-13">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>NIK</th>
                                <th>Nama KPQ</th>
                                <th>No. Hp</th>
                                <th>Alamat</th>
                                <th><center>Detail</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 0;
                                foreach ($civitas as $civitas) :?>
                                <tr>
                                    <td><center><?=++$no?></center></td>
                                    <td><?= $civitas['status']?></td>
                                    <td><?= $civitas['nip']?></td>
                                    <td style="width: 25%"><?= $civitas['nama_kpq']?>
                                    <td><?= $civitas['no_hp']?></td>
                                    <td><?= $civitas['alamat']?></td>
                                    <td><center><a href="#" class="badge badge-warning modalCivitas" data-toggle="modal" data-target="#modalCivitas" data-id="<?= $civitas['nip']?>">detail</a></center></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
</div>

<script>
    $("#civitas").addClass("active");
    
    $("#btn-form-1").addClass("active")
    $("#form-2").hide();
    $("#form-3").hide();
    $("#form-4").hide();

    $(".modalCivitas").click(function(){
        const id = $(this).data('id');
        $.ajax({
            url : "<?=base_url()?>civitas/getcivitasbynip",
            method : "POST",
            data : {nip : id},
            async : true,
            dataType : 'json',
            success : function(data){
                // console.log(data)
                $(".nama-title").html(data.nama_kpq);
                $("#status").val(data.status);
                $("#nip").val(data.nip);
                $("#nip_kemampuan").val(data.nip);
                $("#nama").val(data.nama_kpq);
                $("#jk").val(data.jk);
                $("#t4_lahir").val(data.t4_lahir);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#no_hp").val(data.no_hp);
                $("#alamat").val(data.alamat);
                $("#tgl_masuk").val(data.tgl_masuk);
                $("#tgl_kelas").val(data.tgl_kelas);
                $("#tgl_keluar").val(data.tgl_keluar);
                $("#pendidikan").val(data.pendidikan);
                $("#jurusan").val(data.jurusan);
                $("#no_ktp").val(data.no_ktp);
                
                if(data.tgl_keluar != "0000-00-00"){
                    let oneDay = 24*60*60*1000;
                    let tgl_masuk = new Date(data.tgl_masuk);
                    let tgl_keluar = new Date(data.tgl_keluar);
                    let gabung = Math.round(Math.round((tgl_keluar.getTime() - tgl_masuk.getTime()) / (oneDay)));
                    let tahun = Math.floor(gabung/365);
                    let sisa = gabung % 365;
                    let bulan = Math.floor(sisa / 30);
                    sisa = sisa % 30;
                    let hari = sisa;
                    $("#lama_bergabung").val(tahun + ' Tahun ' + bulan + ' Bulan ' + hari + ' Hari')
                } else if (data.tgl_masuk == "0000-00-00"){
                    let gabung = "Belum menginputkan tanggal bergabung";
                    $("#lama_bergabung").val(gabung)
                } else if (data.tgl_masuk != "0000-00-00" && data.tgl_keluar == "0000-00-00"){
                    let oneDay = 24*60*60*1000;
                    let tgl_masuk = new Date(data.tgl_masuk);
                    let tgl_keluar = new Date();
                    let gabung = Math.round(Math.round((tgl_keluar.getTime() - tgl_masuk.getTime()) / (oneDay)));
                    let tahun = Math.floor(gabung/365);
                    let sisa = gabung % 365;
                    let bulan = Math.floor(sisa / 30);
                    sisa = sisa % 30;
                    let hari = sisa;
                    $("#lama_bergabung").val(tahun + ' Tahun ' + bulan + ' Bulan ' + hari + ' Hari')
                }
            }
        })

        $.ajax({
            url : "<?=base_url()?>civitas/getkemampuanbynip",
            method : "POST",
            data : {nip : id},
            async : true,
            dataType : 'json',
            success : function(data){
            //   console.log(data)
                if(data.length == 0){
                    $("#no-data").show()
                } else {
                    $("#no-data").hide()
                }
                
                $("#jumlah-kemampuan").html(data.length);

                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<li class="list-group-item">'+data[i].kemampuan+'</li>';
                }

                $('#list-kemampuan').html(html);
            }
        })
    })

    $("#btn-form-1").click(function(){
        $("#btn-form-1").addClass("active")
        $("#btn-form-2").removeClass("active")
        $("#btn-form-3").removeClass("active")
        $("#btn-form-4").removeClass("active")

        $("#form-1").show();
        $("#form-2").hide();
        $("#form-3").hide();
        $("#form-4").hide();
    })
    
    $("#btn-next-1").click(function(){
        $("#btn-form-1").removeClass("active")
        $("#btn-form-2").addClass("active")
        $("#btn-form-3").removeClass("active")
        $("#btn-form-4").removeClass("active")

        $("#form-1").hide();
        $("#form-2").show();
        $("#form-3").hide();
        $("#form-4").hide();
    })

    $("#btn-form-2").click(function(){
        $("#btn-form-1").removeClass("active")
        $("#btn-form-2").addClass("active")
        $("#btn-form-3").removeClass("active")
        $("#btn-form-4").removeClass("active")

        $("#form-1").hide();
        $("#form-2").show();
        $("#form-3").hide();
        $("#form-4").hide();
    })
    
    $("#btn-back-2").click(function(){
        $("#btn-form-1").addClass("active")
        $("#btn-form-2").removeClass("active")
        $("#btn-form-3").removeClass("active")
        $("#btn-form-4").removeClass("active")

        $("#form-1").show();
        $("#form-2").hide();
        $("#form-3").hide();
        $("#form-4").hide();
    })

    $("#btn-form-3").click(function(){
        $("#btn-form-1").removeClass("active")
        $("#btn-form-2").removeClass("active")
        $("#btn-form-3").addClass("active")
        $("#btn-form-4").removeClass("active")

        $("#form-1").hide();
        $("#form-2").hide();
        $("#form-3").show();
        $("#form-4").hide();
    })
    
    $("#btn-form-4").click(function(){
        $("#btn-form-1").removeClass("active")
        $("#btn-form-2").removeClass("active")
        $("#btn-form-3").removeClass("active")
        $("#btn-form-4").addClass("active")

        $("#form-1").hide();
        $("#form-2").hide();
        $("#form-3").hide();
        $("#form-4").show();
    })

    $("#btn-submit-1").click(function(){
        var c = confirm("Yakin akan mengubah data civitas?");
        return c;
    })

    $("#btn-submit-2").click(function(){
        var c = confirm("Yakin akan menambahkan kemampuan civitas?");
        return c;
    })
</script>


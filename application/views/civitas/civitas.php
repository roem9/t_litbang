<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 mt-3"><?= $header?></h1>
            </div>
          <div class="row">
            <div class="col-7">
              <?php if( $this->session->flashdata('civitas') ) : ?>
                  <div class="row">
                      <div class="col-12">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              Data civitas <strong>berhasil</strong> <?= $this->session->flashdata('civitas');?>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                  </div>
              <?php endif; ?>
              <?php if( $this->session->flashdata('kemampuan') ) : ?>
                  <div class="row">
                      <div class="col-12">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              Data kemampuan civitas <strong>berhasil</strong> <?= $this->session->flashdata('kemampuan');?>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                  </div>
              <?php endif; ?>
            </div>
          </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4" style="max-width: 1000px">
                <!-- <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="<?= base_url()?>kpq/listkpq" class="nav-link active">KPQ</a>
                        </li>
                    </ul>
                </div> -->
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
<!-- End of Content Wrapper -->

<script>
    $("#<?=$sidebar?>").addClass("active");
    
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


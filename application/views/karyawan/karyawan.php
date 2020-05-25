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
              <?php if( $this->session->flashdata('kpq') ) : ?>
                  <div class="row">
                      <div class="col-12">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              Data KPQ <strong>berhasil</strong> <?= $this->session->flashdata('kpq');?>
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
            <div class="card shadow mb-4" style="max-width: 700px">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a href="<?= base_url()?>kpq/listkpq" class="nav-link active">KPQ</a>
                    </li>
                        <a href="<?=base_url()?>kpq/tambahkpq" class="nav-link btn btn-success btn-sm">Tambah KPQ</a>
                    </ul>
                </div>
                <div class="card-body">
                    <table id="dataTable" class="table table-sm fo-13">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>NIK</th>
                                <th>Nama Kpq</th>
                                <th>JK</th>
                                <th><center>Detail</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 0;
                                foreach ($kpq as $kpq) :?>
                                <tr>
                                    <td><center><?=++$no?></center></td>
                                    <td><?= $kpq['status']?></td>
                                    <td><?= $kpq['nip']?></td>
                                    <td><?= $kpq['nama_kpq']?>
                                    <td><?= $kpq['jk']?></td>
                                    <td><center><a href="#" class="badge badge-warning modalKpq" data-toggle="modal" data-target="#modalKpq" data-id="<?= $kpq['nip']?>">detail</a></center></td>
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
    $("#sidebarKpq").addClass("active");
    
    $("#btn-form-1").addClass("active")
    $("#form-2").hide();
    $("#form-3").hide();
    $("#form-4").hide();

    $(".modalKpq").click(function(){
        const id = $(this).data('id');
        $.ajax({
            url : "<?=base_url()?>kpq/getkpqbynip",
            method : "POST",
            data : {nip : id},
            async : true,
            dataType : 'json',
            success : function(data){
                // console.log(data)
                $(".nama-title").html(data.nama_kpq);
                $("#status").val(data.status);
                $("#nip").val(data.nip);
                $("#nama").val(data.nama_kpq);
                $("#jk").val(data.jk);
                $("#t4_lahir").val(data.t4_lahir);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#no_hp").val(data.no_hp);
                $("#alamat").val(data.alamat);
                $("#tgl_masuk").val(data.tgl_masuk);
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
    })

    $("#btn-form-1").click(function(){
        $("#btn-form-1").addClass("active")
        $("#btn-form-2").removeClass("active")
        $("#btn-form-3").removeClass("active")

        $("#form-1").show();
        $("#form-2").hide();
        $("#form-3").hide();
    })
    
    $("#btn-form-2").click(function(){
        $("#btn-form-1").removeClass("active")
        $("#btn-form-2").addClass("active")
        $("#btn-form-3").removeClass("active")

        $("#form-1").hide();
        $("#form-2").show();
        $("#form-3").hide();
    })
    
    $("#btn-form-3").click(function(){
        $("#btn-form-1").removeClass("active")
        $("#btn-form-2").removeClass("active")
        $("#btn-form-3").addClass("active")

        $("#form-1").hide();
        $("#form-2").hide();
        $("#form-3").show();
    })

    $("#btn-submit").click(function(){
        var c = confirm("Yakin akan mengubah data KPQ?");
        return c;
    })
</script>


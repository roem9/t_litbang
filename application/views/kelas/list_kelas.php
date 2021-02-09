<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-0 text-gray-800 mt-3"><?= $header?></h1>
            </div>
            <div class="">
                <a href="#modalAdd" data-toggle="modal" class="btn btn-success btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Kelas</a>
                <a href="#modalLaporan" data-toggle="modal" class="btn btn-success btn-sm mb-3"><i class="fa fa-download"></i> Download</a>
                <a onclick="reload_table()" data-toggle="modal" class="btn btn-sm btn-info mb-3 text-light"><i class="fa fa-sync"></i> Reload</a>
            </div>
            <div class="notification">
            </div>
            <div class="card shadow mb-4" style="max-width: 1200px">
                <div class="card-body">
                    <div id="reload">
                        <table id="dataTable" class="table table-sm fo-13">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="7%">Status</th>
                                    <th width="9%">Tgl. Mulai</th>
                                    <th width="9%">Tgl. Selesai</th>
                                    <th width="18%">Program</th>
                                    <th width="20%">Waktu & Tempat</th>
                                    <th>Pengajar</th>
                                    <th width="5%">Peserta</th>
                                    <th width=7%>Detail</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal add kelas baru -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Tambah Kelas Pembinaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-add">
                    <div class="msg-add-data">
                    </div>
                    <form id="formAdd" method="POST">
                        <div class="form-group">
                            <label for="tgl_mulai">Tgl Mulai</label>
                            <input type="date" name="tgl_mulai" id="tgl_mulai_add" class="form-control form-control-sm" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tgl Selesai</label>
                            <input type="date" name="tgl_selesai" id="tgl_selesai_add" class="form-control form-control-sm" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <select name="program" id="program_add" class="form-control form-control-sm" required>
                                <option value="">Pilih Program</option>
                                <?php foreach ($program as $data) :?>
                                    <option value="<?= $data['nama_program']?>"><?= $data['nama_program']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nip">Pengajar</label>
                            <select name="nip" id="nip_add" class="form-control form-control-sm" required>
                                <option value="">Pilih Pengajar</option>
                                <?php foreach ($kpq as $data) :?>
                                    <option value="<?= $data['nip']?>"><?= $data['nama_kpq']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <select name="tempat" id="tempat_add" class="form-control form-control-sm" required>
                                <option value="">Pilih Tempat</option>
                                <?php foreach ($tempat as $data) :?>
                                    <option value="<?= $data['nama_ruangan']?>"><?= $data['nama_ruangan']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" id="hari_add" class="form-control form-control-sm" required>
                                <option value="">Pilih Hari</option>
                                <option value="Ahad">Ahad</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <select name="jam" id="jam_add" class="form-control form-control-sm" required>
                                <option value="">Pilih Jam</option>
                                <?php foreach ($jam as $data) :?>
                                    <option value="<?= $data?>"><?= $data?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea name="catatan" id="catatan_add" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-sm btn-primary" id="btnModalAdd">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- modal add kelas baru -->

<!-- modal add kelas baru -->
    <div class="modal fade" id="modalLaporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Download Laporan Pembinaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-add">
                    <div class="msg-add-data">
                    </div>
                    <form action="<?= base_url()?>laporan/pembinaan" method="post">
                        <div class="form-group">
                            <label for="tgl_awal">Tgl Awal</label>
                            <input type="date" id="tgl_awal" name="tgl_awal" value="" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_akhir">Tgl Akhir</label>
                            <input type="date" id="tgl_akhir" name="tgl_akhir" value="" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <input type="submit" value="Download Laporan" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- modal add kelas baru -->

<!-- modal edit kelas -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Detail Kelas Pembinaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-edit">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-1"><i class="fas fa-book"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-2"><i class="fas fa-users"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class='nav-link' id="btn-form-3"><i class="fas fa-user-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="card" id="form-1">
                                <div class="card-header text-primary"><h6><strong>Data Kelas</strong></h6></div>
                                <div class="card-body">
                                    <div class="msg-edit-data">
                                    </div>
                                    <form id="formEdit" method="POST">
                                        <input type="hidden" name="id_kelas" id="id_kelas_edit">
                                        <div class="form-group">
                                            <label for="tgl_mulai">Tgl Mulai</label>
                                            <input type="date" name="tgl_mulai" id="tgl_mulai_edit" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_selesai">Tgl Selesai</label>
                                            <input type="date" name="tgl_selesai" id="tgl_selesai_edit" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group">
                                            <label for="program">Program</label>
                                            <select name="program" id="program_edit" class="form-control form-control-sm" required>
                                                <option value="">Pilih Program</option>
                                                <?php foreach ($program as $data) :?>
                                                    <option value="<?= $data['nama_program']?>"><?= $data['nama_program']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nip">Pengajar</label>
                                            <select name="nip" id="nip_edit" class="form-control form-control-sm" required>
                                                <option value="">Pilih Pengajar</option>
                                                <?php foreach ($kpq as $data) :?>
                                                    <option value="<?= $data['nip']?>"><?= $data['nama_kpq']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat">Tempat</label>
                                            <select name="tempat" id="tempat_edit" class="form-control form-control-sm" required>
                                                <option value="">Pilih Tempat</option>
                                                <?php foreach ($tempat as $data) :?>
                                                    <option value="<?= $data['nama_ruangan']?>"><?= $data['nama_ruangan']?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <select name="hari" id="hari_edit" class="form-control form-control-sm" required>
                                                <option value="">Pilih Hari</option>
                                                <option value="Ahad">Ahad</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam">Jam</label>
                                            <select name="jam" id="jam_edit" class="form-control form-control-sm" required>
                                                <option value="">Pilih Jam</option>
                                                <?php foreach ($jam as $data) :?>
                                                    <option value="<?= $data?>"><?= $data?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan</label>
                                            <textarea name="catatan" id="catatan_edit" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <div class="form-group d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary" id="btnModalEdit">Edit Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="card" id="form-2">
                                <div class="card-header text-primary"><h6><strong>List Peserta <span id="jumPeserta" class="badge badge-info btn-sm">0</span></strong></h6></div>
                                <div class="card-body">
                                    <div class="msg-delete-peserta">
                                    </div>
                                    <form id="formPeserta" method="POST">
                                        <!-- <input type="checkbox" name="" id=""> -->
                                        <input type="hidden" name="id_kelas" id="id_kelas_peserta">
                                        <ul class="list-group">
                                            <div class="listPeserta"></div>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                            <div class="card" id="form-3">
                                <div class="card-header text-primary"><h6><strong>Tambah Peserta Pembinaan</strong></h6></div>
                                <div class="card-body">
                                    <form id="formCalonPeserta" method="POST">
                                        <!-- <input type="checkbox" name="" id=""> -->
                                        <input type="hidden" name="id_kelas" id="id_kelas_calon_peserta">
                                        <ul class="list-group">
                                            <div class="listCalonPeserta"></div>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- akhir modal edit kelas -->

<!-- modal edit status kelas -->
    <div class="modal fade" id="modalEditStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Nonaktifkan Kelas Pembinaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEditStatus" method="POST">
                        <input type="hidden" name="id_kelas" id="id_kelas_edit_status">
                        <div class="form-group">
                            <label for="tgl_mulai">Tgl Mulai</label>
                            <input type="date" name="tgl_mulai" id="tgl_mulai_edit_status" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <input type="text" name="program" id="program_edit_status" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nip">Pengajar</label>
                            <input type="text" name="nip" id="nip_edit_status" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" name="tempat" id="tempat_edit_status" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" id="hari_edit_status" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" id="jam_edit_status" class="form-control form-control-sm" readonly>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea name="catatan" id="catatan_edit_status" class="form-control form-control-sm" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tgl Selesai</label>
                            <input type="date" name="tgl_selesai" id="tgl_selesai_edit_status" class="form-control form-control-sm" value="<?= date("Y-m-d")?>" required>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-sm btn-danger" id="btnModalEditStatus">Nonaktifkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- akhir modal edit status kelas -->

<script>
    $("#kelas").addClass("active");
    table = $('#dataTable').DataTable({ 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?= base_url()?>kelas/ajax_list/<?= $status?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0, 1, 2, 3, 5, 7, 8  ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
    });

    // untuk peserta 
    let a = [];

    // untuk calon peserta 
    let b =[];

    $("#formAdd").submit(function(){
        if(confirm("Yakin akan menambahkan kelas pembinaan baru?")){
            var tgl_mulai = $("#tgl_mulai_add").val();
            var tgl_selesai = $("#tgl_selesai_add").val();
            var program = $("#program_add").val();
            var status = "aktif";
            var nip = $("#nip_add").val();
            var catatan = $("#catatan_add").val();
            var tempat = $("#tempat_add").val();
            var hari = $("#hari_add").val();
            var jam = $("#jam_add").val();
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/add_kelas",
                dataType : "JSON",
                data : {tgl_mulai:tgl_mulai, tgl_selesai:tgl_selesai, program : program,status : status,nip : nip,catatan : catatan,tempat : tempat,hari : hari,jam : jam},
                success : function(data){
                    $("#formAdd").trigger("reset");
                    var msg = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil menambahkan kelas pembinaan baru<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>`;
                    $('.msg-add-data').html(msg);
                    $("#modal-add").scrollTop(0);
                    // var msg = `
                    //     <span class="fas icon-msg fa-check-circle"></span>
                    //     <span class="msg">Berhasil menambahkan kelas baru</span>
                    //     <span class="close-msg">
                    //         <span class="fas fa-times"></span>
                    //     </span>`;
                    // $('.notification').html(msg);
                    // $('.notification').addClass("show");
                    // $('.notification').addClass("success");
                    // $('.notification').removeClass("hide");
                    // $('.notification').addClass("showAlert");
                    // setTimeout(function(){
                    //     $('.notification').removeClass("show");
                    //     $('.notification').addClass("hide");
                    // },5000);
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    var msg = `
                        <span class="fas icon-msg fa-times-circle"></span>
                        <span class="msg">Gagal menambahkan kelas baru</span>
                        <span class="close-msg">
                            <span class="fas fa-times"></span>
                        </span>`;
                    $('.notification').html(msg);
                    $('.notification').addClass("show");
                    $('.notification').addClass("danger");
                    $('.notification').removeClass("hide");
                    $('.notification').addClass("showAlert");
                    setTimeout(function(){
                        $('.notification').removeClass("show");
                        $('.notification').addClass("hide");
                    },5000);
                }
            })
        }
        return false;
    })

    $("#dataTable").on("click", ".detail", function(){
        a = [];
        b = [];
        btn_1();
        let id = $(this).data("id");
        data_kelas(id);
        data_peserta(id);
        data_calon_peserta(id);
        delete_msg();
    })
    
    $("#dataTable").on("click", ".peserta", function(){
        a = [];
        b = [];
        btn_2()
        let id = $(this).data("id");
        data_kelas(id);
        data_peserta(id);
        data_calon_peserta(id);
        delete_msg();
    })

    $("#formEdit").submit(function(){
        if(confirm("Yakin akan mengubah data kelas ini?")){
            var id_kelas = $("#id_kelas_edit").val()
            var tgl_mulai = $("#tgl_mulai_edit").val()
            var tgl_selesai = $("#tgl_selesai_edit").val()
            var program = $("#program_edit").val();
            var nip = $("#nip_edit").val();
            var catatan = $("#catatan_edit").val();
            var tempat = $("#tempat_edit").val();
            var hari = $("#hari_edit").val();
            var jam = $("#jam_edit").val();
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/edit_kelas",
                dataType : "JSON",
                data : {id_kelas: id_kelas, tgl_mulai : tgl_mulai, tgl_selesai : tgl_selesai, program : program,nip : nip,catatan : catatan,tempat : tempat,hari : hari,jam : jam},
                success : function(data){
                    // $("#modalEdit").modal("hide");
                    var msg = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil merubah data kelas pembinaan<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>`;
                    $('.msg-edit-data').html(msg);
                    reload_table();
                    data_kelas(id_kelas);
                    $("#modal-edit").scrollTop(0);
                }
            })
        }
        return false;
    })

    $("#dataTable").on("click", ".status", function(){
        let data = $(this).data("id");
        data = data.split("|");
        let id = data[0];
        let status = data[1];

        if(status == "aktif"){
            msg = "Yakin akan mengaktifkan kelas ini?";
            alert = "Berhasil mengaktifkan kelas pembinaan"
        } else {
            msg = "Yakin akan menonaktifkan kelas ini?"
            alert = "Berhasil menonaktifkan kelas pembinaan"
        }

        if(confirm(msg)){
            $.ajax({
                url: "<?= base_url()?>kelas/edit_status",
                dataType: "JSON",
                data: {id_kelas: id, status:status},
                method: "POST",
                success: function(data){
                    var msg = `
                        <span class="fas icon-msg fa-check-circle"></span>
                        <span class="msg">`+alert+`</span>
                        <span class="close-msg">
                            <span class="fas fa-times"></span>
                        </span>`;
                    $('.notification').html(msg);
                    $('.notification').addClass("show");
                    $('.notification').addClass("success");
                    $('.notification').removeClass("hide");
                    $('.notification').addClass("showAlert");
                    setTimeout(function(){
                        $('.notification').removeClass("show");
                        $('.notification').addClass("hide");
                    },5000);
                    reload_table();
                }
            })
        }
    })

    $("#formEditStatus").submit(function(){
        if(confirm("Yakin akan menonaktifkan kelas ini?")){
            var id_kelas = $("#id_kelas_edit_status").val()
            var tgl_selesai = $("#tgl_selesai_edit_status").val();
            $.ajax({
                type : "POST",
                url : "<?= base_url()?>kelas/nonaktif_kelas",
                dataType : "JSON",
                data : {id_kelas:id_kelas,tgl_selesai:tgl_selesai},
                success : function(data){
                    $("#modalEditStatus").modal("hide");
                    var msg = `
                        <span class="fas icon-msg fa-check-circle"></span>
                        <span class="msg">Berhasil menonaktifkan kelas pembinaan</span>
                        <span class="close-msg">
                            <span class="fas fa-times"></span>
                        </span>`;
                    $('.notification').html(msg);
                    $('.notification').addClass("show");
                    $('.notification').addClass("success");
                    $('.notification').removeClass("hide");
                    $('.notification').addClass("showAlert");
                    setTimeout(function(){
                        $('.notification').removeClass("show");
                        $('.notification').addClass("hide");
                    },5000);
                    reload_table();
                }
            })
        }
        return false;
    })

    $('.notification').on('click', '.close-msg', function(){
        $('.notification').removeClass("show");
        $('.notification').addClass("hide");
    });
    
    // add peserta 
        $(".listCalonPeserta").on("click", ".add_peserta", function(){
            if(confirm("Yakin akan menambahkan peserta?")){
                let id_kelas = $("#id_kelas_calon_peserta").val();
                let nip = $(this).data("id");

                $.ajax({
                    type: "POST",
                    url: "<?= base_url()?>kelas/add_peserta",
                    dataType: "JSON",
                    data: {id_kelas: id_kelas, nip: nip},
                    success: function(data){
                        reload_table()
                        data_peserta(data);
                        data_calon_peserta(data);
                    }
                })
            }
        })
    // add peserta
    
    // delete peserta 
        $(".listPeserta").on("click", ".delete_peserta", function(){
            if(confirm("Yakin akan menghapus peserta?")){
                let id_kelas = $("#id_kelas_peserta").val();
                let nip = $(this).data("id");

                $.ajax({
                    type: "POST",
                    url: "<?= base_url()?>kelas/delete_peserta",
                    dataType: "JSON",
                    data: {id_kelas: id_kelas, nip: nip},
                    success: function(data){
                        reload_table()
                        data_peserta(data);
                        data_calon_peserta(data);
                    }
                })
            }
        })
    // delete peserta

    // detail
        $("#btn-form-1").click(function(){
            btn_1();
            delete_msg();
        })
        
        $("#btn-form-2").click(function(){
            btn_2();
            delete_msg();
        })
        
        $("#btn-form-3").click(function(){
            btn_3();
            delete_msg();
        })

    // detail

    function btn_1(){
        $("#btn-form-1").addClass('active');
        $("#btn-form-2").removeClass('active');
        $("#btn-form-3").removeClass('active');
        
        $("#form-1").show();
        $("#form-2").hide();
        $("#form-3").hide();
    }

    function btn_2(){
        $("#btn-form-1").removeClass('active');
        $("#btn-form-2").addClass('active');
        $("#btn-form-3").removeClass('active');
        
        $("#form-1").hide();
        $("#form-2").show();
        $("#form-3").hide();
    }
    
    function btn_3(){
        $("#btn-form-1").removeClass('active');
        $("#btn-form-2").removeClass('active');
        $("#btn-form-3").addClass('active');
        
        $("#form-1").hide();
        $("#form-2").hide();
        $("#form-3").show();
    }

    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }

    function data_kelas(id){
        $.ajax({
            type: 'POST',
            url: '<?= base_url()?>kelas/get_kelas',
            async: true,
            data: {id_kelas: id},
            dataType: 'json',
            success: function(data){
                $("#id_kelas_edit").val(data.id_kelas);
                $("#tgl_mulai_edit").val(data.tgl_mulai);
                $("#tgl_selesai_edit").val(data.tgl_selesai);
                $("#tgl_selesai_edit").val(data.tgl_selesai);
                $("#program_edit").val(data.program);
                $("#nip_edit").val(data.nip);
                $("#tempat_edit").val(data.tempat);
                $("#hari_edit").val(data.hari);
                $("#jam_edit").val(data.jam);
                $("#catatan_edit").val(data.catatan);
            }
        })
    }

    function data_peserta(id){
        $.ajax({
            type: 'POST',
            url: '<?= base_url()?>kelas/get_peserta',
            async: true,
            data: {id_kelas: id},
            dataType: 'json',
            success: function(data){
                var html = "";
                if(data.length != 0){
                    $("#id_kelas_peserta").val(id);
                    for (let i = 0; i < data.length; i++) {
                        html += `<li class="list-group-item d-flex justify-content-between">
                                    <span>
                                       `+data[i].nama_kpq+` 
                                    </span>
                                    <span>
                                        <a href="#" data-id="`+data[i].nip+`" class="delete_peserta"><i class="fa fa-minus-circle text-danger"></i></a>
                                    </span>
                                </li>`;
                        $("#jumPeserta").html(data.length)
                    }
                } else {
                    html = `<span class="text-danger"><center>tidak ada list peserta</center></span>`;
                    $("#jumPeserta").html(data.length)
                }
                $(".listPeserta").html(html);
            }
        })
    }
    
    function data_calon_peserta(id){
        $.ajax({
            type: 'POST',
            url: '<?= base_url()?>kelas/get_calon_peserta',
            async: true,
            data: {id_kelas: id},
            dataType: 'json',
            success: function(data){
                var html = "";
                if(data.length != 0){
                    $("#id_kelas_calon_peserta").val(id);
                    for (let i = 0; i < data.length; i++) {
                        html += `<li class="list-group-item d-flex justify-content-between">
                                    <span>
                                       `+data[i].nama_kpq+` 
                                    </span>
                                    <span>
                                        <a href="#" data-id="`+data[i].nip+`" class="add_peserta"><i class="fa fa-plus-circle text-success"></i></a>
                                    </span>
                                </li>`;
                    }
                } else {
                    html = `<span class="text-danger"><center>tidak ada list peserta</center></span>`;
                }
                $(".listCalonPeserta").html(html);
            }
        })
    }    

    function delete_msg(){
        $('.msg-edit-data').html("");
        $('.msg-delete-peserta').html("");
    }
</script>


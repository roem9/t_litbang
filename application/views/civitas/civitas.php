<!-- modal detail -->
    <div class="modal fade" id="modalCivitas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title" id="exampleModalScrollableTitle"></h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="card">
                        <div class="card-body fo-13"> -->
                            <span class="badge bg-gradient-secondary btn-navigation active" data-menu="menu-profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            </span>
                            <span class="badge bg-gradient-secondary btn-navigation" data-menu="menu-akademik">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                    <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                    <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                                </svg>
                            </span>
                            <span class="badge bg-gradient-secondary btn-navigation" data-menu="menu-skill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                                    <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                                </svg>
                            </span>
                            <span class="badge bg-gradient-secondary btn-navigation" data-menu="menu-tambah-skill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                            </span>
                            <span class="badge bg-gradient-secondary btn-navigation" data-menu="menu-foto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                                </svg>
                            </span>

                            <div class="mt-3">
                                <form action="<?= base_url()?>civitas/editcivitas" method="POST" enctype="multipart/form-data">
                                    <div class="form-detail menu-navigation" id="menu-profile">
                                        <div class="form-group">
                                            <label for="nama">Nama KPQ <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-md form-1" name="nama" id="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="jk">Gender <span class="text-danger">*</span></label>
                                            <select name="jk" id="jk" class="form-control form-control-md form-1">
                                                <option value="">Pilih Gender</option>
                                                <option value="Pria">Ikhwan</option>
                                                <option value="Wanita">Akhwat</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="t4_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-md form-1" name="t4_lahir" id="t4_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tgl Lahir <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control form-control-md form-1" name="tgl_lahir" id="tgl_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No. HP <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-md form-1" name="no_hp" id="no_hp">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                            <textarea name="alamat" id="alamat" class="form-control form-control-md form-1"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan <span class="text-danger">*</span></label>
                                            <select name="pendidikan" id="pendidikan" class='form-control form-control-md form-1'>
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
                                            <input type="text" class="form-control form-control-md form-1" name="jurusan" id="jurusan">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_ktp">No. KTP <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-md form-1" name="no_ktp" id="no_ktp">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-success btn-sm btn-navigation" data-menu="menu-akademik"><i class="fas fa-arrow-right"></i> Data Akademik</button>
                                        </div>
                                    </div>
                                    <div class="form-detail menu-navigation" id="menu-akademik">
                                        <div class="form-group">
                                            <label for="status">Status <span class="text-danger">*</span></label>
                                            <select name="status" id="status" class="form-control form-control-md form-1">
                                                <option value="">Pilih Status</option>
                                                <option value="aktif">Aktif</option>
                                                <option value="cuti">Cuti</option>
                                                <option value="resign">Resign</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nip">NIK <span class="text-danger">*</span></label>
                                            <input type="text" name="nip" id="nip" class="form-control form-control-md form-1" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_masuk">Tgl Bergabung <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control form-control-md form-1" name="tgl_masuk" id="tgl_masuk">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_kelas">Tgl Kelas Pertama <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control form-control-md form-1" name="tgl_kelas" id="tgl_kelas">
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_keluar">Tgl Keluar <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control form-control-md form-1" name="tgl_keluar" id="tgl_keluar">
                                        </div>
                                        <div class="form-group">
                                            <label for="lama_bergabung">Lama Bergabung <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-md form-1" id="lama_bergabung" readonly>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-success btn-sm btn-navigation" data-menu="menu-profile"><i class="fas fa-arrow-left"></i> Data Diri</button>
                                            <button type="submit" class="btn btn-success btn-sm" id="btn-submit-1">Update</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="form-detail menu-navigation" id="menu-skill">
                                    <ul class="list-group text-sm">
                                        <li class="list-group-item list-group-item-info">Kemampuan Civitas <span class="badge bg-gradient-info" id="jumlah-kemampuan"></span></li>
                                        <li class="list-group-item" id="no-data"><i class="fa fa-exclamation-circle text-warning"></i> Tidak ada kemampuan</li>
                                        <div id="list-kemampuan"></div>
                                    </ul>
                                </div>
                                <div class="form-detail menu-navigation" id="menu-tambah-skill">
                                    <form action="<?=base_url()?>civitas/tambahkemampuan" method="post">
                                        <input type="hidden" name="nip" id="nip_kemampuan">
                                        <div class="form-group">
                                            <label for="kemampuan">Kemampuan</label>
                                            <select name="kemampuan" id="kemampuan" class="form-control form-control-md" required>
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
                                <div class="form-detail menu-navigation" id="menu-foto">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <img src="" class='img-rounded img-fluid' id="fotoKpq">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
        </form>
    </div>
<!-- modal detail -->

    <div class="card shadow mb-4 overflow-auto">
        <div class="card-header pb-0 d-flex justify-content-between">
            <div class="d-lg-flex">
                <div>
                <h5 class="mb-0"><?= $title ?></h5>
                <p class="text-sm mb-0">
                    <?= $deskripsi?>
                </p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="tableData" class="table table-hover align-items-center mb-0 text-dark">
                <thead>
                    <tr>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 none">Status</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 none">Login</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 all">NIK</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder all">Nama KPQ</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 desktop">No. Hp</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder desktop">Alamat</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder all">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

<?= footer()?>
<script>
    $(document).ready(function() {
        <?php if( $this->session->flashdata('pesan') ) : ?>
            Toast.fire({
                icon: "<?= ($this->session->flashdata('pesan') == 'success') ? 'success' : 'error'?>",
                title: "<?= ($this->session->flashdata('pesan') == 'success') ? 'Berhasil mengubah data' : 'Gagal mengubah data'?>"
            });
        <?php endif; ?>

        // DataTable initialization
        var dataTable = $('#tableData').DataTable({
            initComplete: function () {
                var api = this.api();
                $("#mytable_filter input")
                    .off(".DT")
                    .on("input.DT", function () {
                        api.search(this.value).draw();
                    });
            },
            oLanguage: {
                sProcessing: "loading...",
            },
            language: {
                paginate: {
                    first: '<<',
                    previous: '<',
                    next: '>',
                    last: '>>'
                }
            },
            processing: true,
            serverSide: true,
            ajax: { url: `<?= base_url()?>civitas/getListCivitas/<?= $kode?>`, type: "POST" },
            columns: [
                { data: "status", orderable: true, searchable: true, className: "text-sm w-1 text-center" },
                { data: "login", orderable: true, searchable: true, className: "text-sm w-1 text-center" },
                { data: "nip", orderable: true, searchable: true, className: "text-sm w-1" },
                { data: "nama_kpq", orderable: true, searchable: true, className: "text-sm" },
                { data: "no_hp", orderable: true, searchable: true, className: "text-sm w-1" },
                { data: "alamat", orderable: true, searchable: true, className: "text-sm text-wrap" },
                { data: "action", orderable: true, searchable: true, className: "text-sm w-1" },
            ],
            order: [[2, "asc"]],
            rowReorder: {
                selector: "td:nth-child(0)",
            },
            responsive: true,
            pageLength: 5,
            lengthMenu: [
            [5, 10, 20],
            [5, 10, 20]
            ]
        });
    });
    
    $("#btn-form-1").addClass("active");
    $("#form-2").hide();
    $("#form-3").hide();
    $("#form-4").hide();
    $("#form-5").hide();

    $(document).on("click", ".modalCivitas", function(){
        let data = 'menu-profile';
        // Remove and add classes to navigation buttons
        $(".btn-navigation").removeClass("bg-gradient-info").addClass("bg-gradient-secondary");
        $(`[data-menu='${data}']`).removeClass("bg-gradient-secondary").addClass("bg-gradient-info");

        // Hide all menu-navigation elements and show the one with the specified data-menu
        $(".menu-navigation").hide();
        $("#" + data).show();

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
                
                $("#fotoKpq").attr("src", "https://civitas.tar-q.com/assets/img/foto/"+data.foto);
                // console.log(data.foto)

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

    $("#btn-submit-1").click(function(){
        var c = confirm("Yakin akan mengubah data civitas?");
        return c;
    })

    $("#btn-submit-2").click(function(){
        var c = confirm("Yakin akan menambahkan kemampuan civitas?");
        return c;
    })

    $(".btn-navigation").on("click", function(){
      $(".alert-error").hide();

      let data = $(this).data("menu");

      $(".btn-navigation").removeClass("bg-gradient-info");
      $(".btn-navigation").removeClass("bg-gradient-secondary");
      $(".btn-navigation").addClass("bg-gradient-secondary");

      $(`[data-menu='${data}']`).removeClass("bg-gradient-secondary");
      $(`[data-menu='${data}']`).addClass("bg-gradient-info");

      $(".menu-navigation").hide();
      $("#" + data).show();
    })
</script>


<div class="">
    <a href="#modalAdd" data-bs-toggle="modal" class="btn btn-success btn-sm mb-3">Tambah Kelas</a>
    <a href="#modalLaporan" data-bs-toggle="modal" class="btn btn-success btn-sm mb-3">Download</a>
</div>
<div class="notification">
</div>
<div class="card shadow mb-4 overflow-auto">
    <div class="card-body">
        <div id="reload">
            <table id="tableData" class="table table-hover align-items-center mb-0 text-dark">
                <thead>
                    <tr>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 desktop">Status</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 all">Program</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder all">Pengajar</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder all">Waktu & Tempat</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 desktop">Peserta</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 none">Tgl. Mulai</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 none">Tgl. Selesai</th>
                        <th class="text-uppercase text-dark text-xxs font-weight-bolder w-1 all">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- modal add kelas baru -->
    <div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Tambah Kelas Pembinaan</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-add">
                    <div class="msg-add-data">
                    </div>
                    <form id="formAdd" method="POST">
                        <div class="form-group">
                            <label for="tgl_mulai">Tgl Mulai</label>
                            <input type="date" name="tgl_mulai" id="tgl_mulai_add" class="form-control form-control-md" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tgl Selesai</label>
                            <input type="date" name="tgl_selesai" id="tgl_selesai_add" class="form-control form-control-md" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <select name="program" id="program_add" class="form-control form-control-md" required>
                                <option value="">Pilih Program</option>
                                <?php foreach ($program as $data) :?>
                                    <option value="<?= $data['nama_program']?>"><?= $data['nama_program']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nip">Pengajar</label>
                            <select name="nip" id="nip_add" class="form-control form-control-md" required>
                                <option value="">Pilih Pengajar</option>
                                <?php foreach ($kpq as $data) :?>
                                    <option value="<?= $data['nip']?>"><?= $data['nama_kpq']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <select name="tempat" id="tempat_add" class="form-control form-control-md" required>
                                <option value="">Pilih Tempat</option>
                                <?php foreach ($tempat as $data) :?>
                                    <option value="<?= $data['nama_ruangan']?>"><?= $data['nama_ruangan']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <select name="hari" id="hari_add" class="form-control form-control-md" required>
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
                            <input type="text" name="jam" id="jam_add" class="form-control form-control-md" required>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea name="catatan" id="catatan_add" class="form-control form-control-md"></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-sm btn-info" id="btnModalAdd">Tambah Data</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<!-- modal add kelas baru -->

<!-- modal add kelas baru -->
    <div class="modal fade" id="modalLaporan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Download Laporan Pembinaan</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-add">
                    <div class="msg-add-data">
                    </div>
                    <form action="<?= base_url()?>laporan/pembinaan" method="post">
                        <div class="form-group">
                            <label for="tgl_awal">Tgl Awal</label>
                            <input type="date" id="tgl_awal" name="tgl_awal" value="" class="form-control form-control-md" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_akhir">Tgl Akhir</label>
                            <input type="date" id="tgl_akhir" name="tgl_akhir" value="" class="form-control form-control-md" required>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <input type="submit" value="Download Laporan" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<!-- modal add kelas baru -->

<!-- modal edit kelas -->
    <div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title nama-title">Detail Kelas Pembinaan</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modal-edit">
                    <span class="badge bg-gradient-secondary btn-navigation active" data-menu="menu-data-kelas">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </span>
                    <span class="badge bg-gradient-secondary btn-navigation" data-menu="menu-peserta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                            <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                            <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                        </svg>
                    </span>
                    <span class="badge bg-gradient-secondary btn-navigation" data-menu="menu-tambah-peserta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                            <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                        </svg>
                    </span>
                    
                    <div class="mt-3"></div>

                    
                    <div class="menu-navigation" id="menu-data-kelas">
                        <h6><strong>Data Kelas</strong></h6>
                        <form id="formEdit" method="POST">
                            <input type="hidden" name="id_kelas" id="id_kelas_edit">
                            <div class="form-group">
                                <label for="tgl_mulai">Tgl Mulai</label>
                                <input type="date" name="tgl_mulai" id="tgl_mulai_edit" class="form-control form-control-md">
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tgl Selesai</label>
                                <input type="date" name="tgl_selesai" id="tgl_selesai_edit" class="form-control form-control-md">
                            </div>
                            <div class="form-group">
                                <label for="program">Program</label>
                                <select name="program" id="program_edit" class="form-control form-control-md" required>
                                    <option value="">Pilih Program</option>
                                    <?php foreach ($program as $data) :?>
                                        <option value="<?= $data['nama_program']?>"><?= $data['nama_program']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nip">Pengajar</label>
                                <select name="nip" id="nip_edit" class="form-control form-control-md" required>
                                    <option value="">Pilih Pengajar</option>
                                    <?php foreach ($kpq as $data) :?>
                                        <option value="<?= $data['nip']?>"><?= $data['nama_kpq']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat</label>
                                <select name="tempat" id="tempat_edit" class="form-control form-control-md" required>
                                    <option value="">Pilih Tempat</option>
                                    <?php foreach ($tempat as $data) :?>
                                        <option value="<?= $data['nama_ruangan']?>"><?= $data['nama_ruangan']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari</label>
                                <select name="hari" id="hari_edit" class="form-control form-control-md" required>
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
                                <input type="text" name="jam" id="jam_edit" class="form-control form-control-md" required>
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea name="catatan" id="catatan_edit" class="form-control form-control-md"></textarea>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button class="btn btn-sm btn-info" id="btnModalEdit">Edit Data</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="menu-navigation" id="menu-peserta">
                        <h6><strong>List Peserta <span id="jumPeserta" class="badge badge-info btn-sm">0</span></strong></h6>
                        <form id="formPeserta" method="POST">
                            <!-- <input type="checkbox" name="" id=""> -->
                            <input type="hidden" name="id_kelas" id="id_kelas_peserta">
                            <ul class="list-group">
                                <div class="listPeserta"></div>
                            </ul>
                        </form>
                    </div>

                    <div class="menu-navigation" id="menu-tambah-peserta">
                        <h6><strong>Tambah Peserta Pembinaan</strong></h6>
                        <form id="formCalonPeserta" method="POST">
                            <!-- <input type="checkbox" name="" id=""> -->
                            <input type="hidden" name="id_kelas" id="id_kelas_calon_peserta">
                            <ul class="list-group">
                                <div class="listCalonPeserta"></div>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
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
                            <input type="date" name="tgl_mulai" id="tgl_mulai_edit_status" class="form-control form-control-md" readonly>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <input type="text" name="program" id="program_edit_status" class="form-control form-control-md" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nip">Pengajar</label>
                            <input type="text" name="nip" id="nip_edit_status" class="form-control form-control-md" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" name="tempat" id="tempat_edit_status" class="form-control form-control-md" readonly>
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" name="hari" id="hari_edit_status" class="form-control form-control-md" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="text" name="jam" id="jam_edit_status" class="form-control form-control-md" readonly>
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea name="catatan" id="catatan_edit_status" class="form-control form-control-md" readonly></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tgl Selesai</label>
                            <input type="date" name="tgl_selesai" id="tgl_selesai_edit_status" class="form-control form-control-md" value="<?= date("Y-m-d")?>" required>
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

<?= footer()?>

<script>
    // table = $('#dataTable').DataTable({ 
    //     "processing": true, //Feature control the processing indicator.
    //     "serverSide": true, //Feature control DataTables' server-side processing mode.
    //     "order": [], //Initial no order.

    //     // Load data for the table's content from an Ajax source
    //     "ajax": {
    //         "url": "<?= base_url()?>kelas/ajax_list/<?= $status?>",
    //         "type": "POST"
    //     },

    //     //Set column definition initialisation properties.
    //     "columnDefs": [
    //         { 
    //             "targets": [0, 1, 2, 3, 5, 7], //first column / numbering column
    //             "orderable": false, //set not orderable
    //         },
    //     ],
    // });

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
        ajax: { url: `<?= base_url()?>kelas/getListKelas/<?= $status?>`, type: "POST" },
        columns: [
            { 
                data: "status", 
                orderable: true, 
                searchable: true, 
                className: "text-sm w-1 text-center",
                render: function(data, type, row) {
                    if (data == 'aktif') {
                        return `
                            <a href="javascript:void(0)" data-toggle="modal" data-id="${row['id_kelas']}|nonaktif" class="status">
                                <span class="badge" style="color: #2152ff">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                                        <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                                    </svg>
                                </span>
                            </a>
                        `;
                    } else {
                        return `
                            <a href="javascript:void(0)" data-toggle="modal" data-id="${row['id_kelas']}|aktif" class="status">
                                <span class="badge text-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                                        <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
                                    </svg>
                                </span>
                            </a>
                        `;
                    }
                }
            },
            { data: "program", orderable: true, searchable: true, className: "text-sm" },
            { data: "nama_kpq", orderable: true, searchable: true, className: "text-sm text-wrap" },
            { data: "waktu_tempat", orderable: true, searchable: true, className: "text-sm w-1" },
            { data: "peserta", orderable: true, searchable: true, className: "text-sm text-wrap text-center" },
            { data: "tgl_mulai", orderable: true, searchable: true, className: "text-sm w-1 text-center" },
            { data: "tgl_selesai", orderable: true, searchable: true, className: "text-sm w-1" },
            { data: "action", orderable: false, searchable: false, className: "text-sm w-1 text-center" },
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
                    $("#modalAdd").modal("hide");

                    Toast.fire({
                        icon: "success",
                        title: "Berhasil menambahkan kelas pembinaan baru"
                    });
                    
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

    $(document).on("click", ".detail", function(){
        let data = 'menu-data-kelas';
        // Remove and add classes to navigation buttons
        $(".btn-navigation").removeClass("bg-gradient-info").addClass("bg-gradient-secondary");
        $(`[data-menu='${data}']`).removeClass("bg-gradient-secondary").addClass("bg-gradient-info");

        // Hide all menu-navigation elements and show the one with the specified data-menu
        $(".menu-navigation").hide();
        $("#" + data).show();

        a = [];
        b = [];
        let id = $(this).data("id");
        data_kelas(id);
        data_peserta(id);
        data_calon_peserta(id);
        delete_msg();
    })
    
    $(document).on("click", ".peserta", function(){
        a = [];
        b = [];

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
                    Toast.fire({
                        icon: "success",
                        title: "Berhasil merubah data kelas pembinaan"
                    });

                    reload_table();
                    data_kelas(id_kelas);
                    $("#modal-edit").scrollTop(0);
                }
            })
        }
        return false;
    })

    $(document).on("click", ".status", function(){
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
                    Toast.fire({
                        icon: "success",
                        title: `${alert}`
                    });
                    reload_table();
                }
            })
        }
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

                        Toast.fire({
                            icon: "success",
                            title: "Berhasil menambahkan peserta"
                        });
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

                        Toast.fire({
                            icon: "success",
                            title: "Berhasil menghapus peserta"
                        });
                    }
                })
            }
        })
    // delete peserta

    function reload_table()
    {
        dataTable.ajax.reload(null,false); //reload datatable ajax 
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
                                    <span class="text-sm">
                                       `+data[i].nama_kpq+` 
                                    </span>
                                    <span>
                                        <a href="javascript:void(0)" data-id="`+data[i].nip+`" class="delete_peserta"><i class="fa fa-minus-circle text-danger"></i></a>
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
                                    <span class="text-sm">
                                       `+data[i].nama_kpq+` 
                                    </span>
                                    <span>
                                        <a href="javascript:void(0)" data-id="`+data[i].nip+`" class="add_peserta"><i class="fa fa-plus-circle text-success"></i></a>
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


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
<div class="row">
	<div class="col-12">
		<div class="card shadow mb-4">
			<div class="card-body">
				<form action="<?= base_url()?>civitas/add_civitas" method="POST">
					<div class="form-group">
						<label for="tipe">Tipe Civitas <span class="text-danger">*</span></label>
						<select name="tipe" id="tipe" class="form-control form-control-md form-1" required>
							<option value="">Pilih Tipe Civitas</option>
							<option value="Karyawan">Karyawan</option>
							<option value="KPQ">KPQ</option>
						</select>
					</div>
					<!-- <div class="form-group">
						<label for="nip">NIK <span class="text-danger">*</span></label>
						<input type="text" name="nip" id="nip" class="form-control form-control-md form-1" required>
					</div> -->
					<div class="form-group">
						<label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
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
						<label for="tgl_masuk">Tgl Bergabung <span class="text-danger">*</span></label>
						<input type="date" class="form-control form-control-md form-1" name="tgl_masuk" id="tgl_masuk">
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
						<label for="jurusan">Jurusan</label>
						<input type="text" class="form-control form-control-md" name="jurusan" id="jurusan">
					</div>
					<div class="form-group">
						<label for="no_ktp">No. KTP</label>
						<input type="text" class="form-control form-control-md" name="no_ktp" id="no_ktp">
					</div>
					<div class="d-flex justify-content-end">
						<input type="submit" value="Simpan Data Civitas" class="btn btn-sm btn-info float-right" id="simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
    
<?= footer()?>
<!-- <script src="<?= base_url()?>assets/js/script.js"></script> -->
<script>
	<?php if( $this->session->flashdata('pesan') ) : ?>
		Toast.fire({
			icon: "success",
			title: "<?= $this->session->flashdata('pesan')?>"
		});
	<?php endif; ?>

    $("#sidebarTambah").addClass("active");

    $("#simpan").click(function(){
        let empty = false;

        $.each($('.form-1'),function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        })
        
        if(empty == true){
            Swal.fire({
                icon: 'error',
                text: 'Harap mengisi yang bertanda * terlebih dahulu'
            })
            return false;
        } else {
            var c = confirm('Yakin akan menyimpan data KPQ?');
            return c;
        }
    })

    // setInputFilter(document.getElementById("nama"), function(value) {
    //     return /^[a-z \s \- ']*$/i.test(value);
    // });

    // setInputFilter(document.getElementById("nip"), function(value) {
    //     return /^[0-9 .]*$/i.test(value);
    // });

    // setInputFilter(document.getElementById("no_hp"), function(value) {
    //     return /^[0-9]*$/i.test(value);
    // });

    // setInputFilter(document.getElementById("no_ktp"), function(value) {
    //     return /^[0-9]*$/i.test(value);
    // });
</script>
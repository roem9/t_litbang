<?php
class Civitas extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Civitas_model");
        $this->load->model("Main_model");
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
			redirect(base_url("login"));
		}
    }

    public function tambahCivitas(){
        $data['title'] = "Tambah Civitas";

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("civitas/form-civitas");
        $this->load->view("templates/footer");
    }

    public function kpq(){
        $data['title'] = "List KPQ";
        $data['header'] = "List KPQ";
        $data['sidebar'] = "sidebarKpq";
        
        $data['civitas'] = $this->Main_model->get_all("kpq", ['substring(nip, 1, 3) = ' => '012', "status != " => "hapus"], "nama_kpq");
        $data['program'] = $this->Main_model->get_all("program", "", "id_program");

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("civitas/civitas", $data);
        $this->load->view("templates/footer");
    }

    public function karyawan(){
        $data['title'] = "List Karyawan";
        $data['header'] = "List Karyawan";
        $data['sidebar'] = "sidebarKaryawan";
        $data['civitas'] = $this->Main_model->get_all("kpq", ['substring(nip, 1, 3) = ' => '011', "status != " => "hapus"], "nama_kpq");
        $data['program'] = $this->Main_model->get_all("program", "", "id_program");

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("civitas/civitas", $data);
        $this->load->view("templates/footer");
    }

    public function pembinaan($nip){
        $kpq = $this->Main_model->get_one("kpq", ["md5(nip)" => $nip]);
        $data['title'] = "History Pembinaan " . $kpq['nama_kpq'];
        $data['kpq'] = $kpq;
        
        $data['pembinaan'] = [];
        $pembinaan = $this->Main_model->get_all("presensi_kpq", ["nip" => $kpq['nip']]);
        foreach ($pembinaan as $i => $pembinaan) {
            $data_pembinaan = $this->Main_model->get_one("kbm_pembinaan", ["id_kbm" => $pembinaan['id_kbm']]);
            $data['pembinaan'][$i] = $data_pembinaan;
            $data['pembinaan'][$i]['status'] = $pembinaan['keterangan'];

            if($data_pembinaan['keterangan'] == "badal"){
                $badal = $this->Main_model->get_one("kbm_badal_pembinaan", ["id_kbm" => $data_pembinaan['id_kbm']]);
                $data_kpq = $this->Main_model->get_one("kpq", ["nip" => $badal['nip_badal']]);
            } else {
                $data_kpq = $this->Main_model->get_one("kpq", ["nip" => $data_pembinaan['nip']]);
            }
            $data['pembinaan'][$i]['nama_kpq'] = $data_kpq['nama_kpq'];
        }

        usort($data['pembinaan'], function($a, $b) {
            return $a['program_kbm'] <=> $b['program_kbm'];
        });
        // var_dump($data);
        // exit();
        
        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("civitas/history-pembinaan", $data);
        $this->load->view("templates/footer");        
    }

    public function download(){
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment;filename="civitas.xls"');

        $data['civitas'] = $this->Main_model->get_all("kpq", ["status !=" => "hapus"], "nama_kpq");
        $this->load->view("pages/laporan/laporan-civitas", $data);
    }

    public function add_civitas(){
        $tipe = $this->input->post("tipe", true);
        if($tipe == 'Karyawan'){
            $tipe = '011';
        } else if($tipe == 'KPQ'){
            $tipe = '012';
        }

        $id = $this->Civitas_model->getLastId($tipe);
        $id = $id['nip'];
        
        $nip = $this->Civitas_model->buatNip($id, $tipe);

        $data ['kpq'] = [
            "nip" => $nip,
            "nama_kpq" => $this->input->post("nama", true),
            "jk" => $this->input->post("jk", true),
            "t4_lahir" => $this->input->post("t4_lahir", true),
            "tgl_lahir" => $this->input->post("tgl_lahir", true),
            "no_hp" => $this->input->post("no_hp", true),
            "alamat" => $this->input->post("alamat", true),
            "tgl_masuk" => $this->input->post("tgl_masuk", true),
            "tgl_keluar" => "0000-00-00",
            "pendidikan" => $this->input->post("pendidikan", true),
            "jurusan" => $this->input->post("jurusan", true),
            "no_ktp" => $this->input->post("no_ktp", true),
            "status" => "aktif"
        ];
        $this->Main_model->add_data("kpq", $data['kpq']);

        $data['admin'] = [
            "id_admin" => $nip,
            "password" => "tarqbandung",
            "level" => "kpq"
        ];
        $this->Main_model->add_data("admin", $data['admin']);

        if($tipe == "Karyawan"){
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil <strong>menambahkan</strong> karyawan baru<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        } else if($tipe == "KPQ"){
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil <strong>menambahkan</strong> KPQ baru<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getCivitasByNip(){
        $nip = $this->input->post("nip", true);
        $kpq = $this->Main_model->get_one("kpq", ["nip" => $nip]);
        echo json_encode($kpq);
    }

    public function editCivitas(){
        $nip = $this->input->post("nip", true);
        $data = [
            "nama_kpq" => $this->input->post("nama", true),
            "jk" => $this->input->post("jk", true),
            "t4_lahir" => $this->input->post("t4_lahir", true),
            "tgl_lahir" => $this->input->post("tgl_lahir", true),
            "no_hp" => $this->input->post("no_hp", true),
            "alamat" => $this->input->post("alamat", true),
            "tgl_masuk" => $this->input->post("tgl_masuk", true),
            "tgl_kelas" => $this->input->post("tgl_kelas", true),
            "tgl_keluar" => $this->input->post("tgl_keluar", true),
            "pendidikan" => $this->input->post("pendidikan", true),
            "jurusan" => $this->input->post("jurusan", true),
            "no_ktp" => $this->input->post("no_ktp", true),
            "status" => $this->input->post("status", true)
        ];

        $result = $this->Main_model->edit_data("kpq", ["nip" => $nip], $data);
        if($result)
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil <strong>mengubah</strong> data civitas<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        else
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Gagal <strong>mengubah</strong> data civitas<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function tambahKemampuan(){
        $data = [
            "nip" => $this->input->post("nip", true),
            "kemampuan" => $this->input->post("kemampuan")
        ];

        $result = $this->Main_model->add_data("kemampuan", $data);
        if($result)
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil <strong>menambahkan</strong> kemampuan civitas<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        else
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Gagal <strong>menambahkan</strong> kemampuan civitas<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getKemampuanByNip(){
        $nip = $this->input->post("nip");
        $kemampuan = $this->Main_model->get_all("kemampuan", ["nip" => $nip]);
        echo json_encode($kemampuan);
    }
    
}
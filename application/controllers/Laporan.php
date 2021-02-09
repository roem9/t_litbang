<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Main_model");
        $this->load->model("Kelas_model");
        $this->load->model("Kel_model");
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
        if($this->session->userdata('status') != "login"){
            $this->session->set_flashdata('login', 'Maaf, Anda harus login terlebih dahulu');
            redirect(base_url("login"));
        }
    }
    
    public function pembinaan(){   
        $tgl_awal = $this->input->post("tgl_awal");
        $tgl_akhir = $this->input->post("tgl_akhir");

        // $bulan = 2;
        // $tahun = 2021;
        $filename = "Laporan_Pembinaan_".date("d-m-Y", strtotime($tgl_awal))."_".date("d-m-Y", strtotime($tgl_akhir));

        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        
        $data['kelas'] = [];
        $where = "tgl BETWEEN '$tgl_awal' AND '$tgl_akhir'";
        
        $kelas = $this->Main_model->get_all_group_by("kbm_pembinaan", $where, "id_kelas");
        
        foreach ($kelas as $i => $kelas) {
            $data_kelas = $this->Main_model->get_one("kelas_pembinaan", ["id_kelas" => $kelas['id_kelas']]);
            $data['kelas'][$i] = $data_kelas;

            $id = $kelas['id_kelas'];
            $where = "tgl BETWEEN '$tgl_awal' AND '$tgl_akhir' AND id_kelas = $id";
            $kbm = $this->Main_model->get_all("kbm_pembinaan", $where);
            foreach ($kbm as $j => $kbm) {
                if($kbm['keterangan'] == "badal"){
                    $badal = $this->Main_model->get_one("kbm_badal_pembinaan", ["id_kbm" => $kbm['id_kbm']]);
                    $data_kpq = $this->Main_model->get_one("kpq", ["nip" => $badal['nip_badal']]);
                } else {
                    $data_kpq = $this->Main_model->get_one("kpq", ["nip" => $kbm['nip']]);
                }
    
                $data['kelas'][$i]['kbm'][$j] = $kbm;
                $data['kelas'][$i]['kbm'][$j]['nama_kpq'] = $data_kpq['nama_kpq'];
                $data['kelas'][$i]['kbm'][$j]['peserta'] = COUNT($this->Main_model->get_all("presensi_kpq", ["id_kbm" => $kbm['id_kbm'], "keterangan" => "hadir"]));
            }
        }
        $i = 0;

        // var_dump($data);
        $this->load->view("pages/laporan/pembinaan", $data);
    }

}

/* End of file Laporan.php */

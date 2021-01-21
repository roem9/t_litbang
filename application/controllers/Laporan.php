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
    
    public function pembinaan()
    {   
        $bulan = 1;
        $tahun = 2021;
        $filename = "Laporan_Pembinaan";

        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment;filename="'.$filename.'.xls"');
        $kelas = $this->Main_model->get_all("kelas_pembinaan");
        $i = 0;
        foreach ($kelas as $kelas) {
            $kbm = $this->Main_model->get_all("kbm_pembinaan", ["MONTH(tgl)" => $bulan, "YEAR(tgl)" => $tahun, "id_kelas" => $kelas['id_kelas']], "tgl", "ASC");
            if($kbm){
                $data['kelas'][$i] = $kelas;
                $peserta = $this->Main_model->get_all("kelas_kpq", ["id_kelas" => $kelas['id_kelas']]);
                $data['kelas'][$i]['peserta'] = [];
                foreach ($peserta as $p => $peserta) {
                    $kpq = $this->Main_model->get_one("kpq", ["nip" => $peserta['nip']]);
                    $data['kelas'][$i]['peserta'][$p] = $kpq;
                    $data['kelas'][$i]['peserta'][$p]['kbm'] = $this->Main_model->get_all_join_table("kbm_pembinaan", "presensi_kpq", "id_kbm", ["presensi_kpq.nip" => $kpq['nip']]);
                }
                
                // sort kpq by name 
                    usort($data['kelas'][$i]['peserta'], function($a, $b) {
                        return $a['nama_kpq'] <=> $b['nama_kpq'];
                    });
                // sort kpq by name 

                foreach ($kbm as $j => $kbm) {
                    $badal = $this->Main_model->get_one("kbm_badal_pembinaan", ["id_kbm" => $kbm['id_kbm']]);
                    if($badal) $kpq = $this->Main_model->get_one("kpq", ["nip" => $badal['nip_badal']]);
                    else $kpq = $this->Main_model->get_one("kpq", ["nip" => $kbm['nip']]);
                    $data['kelas'][$i]['kbm'][$j] = $kbm;
                    $data['kelas'][$i]['kbm'][$j]['kpq'] = $kpq;
                }
                $i++;
            }
        }

        // var_dump($data);
        $this->load->view("pages/laporan/pembinaan", $data);
    }

}

/* End of file Laporan.php */

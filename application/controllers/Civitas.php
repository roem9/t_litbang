<?php

class Civitas extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model("Civitas_model");
    }

    public function tambahCivitas(){
        $data['title'] = "Tambah Civitas";

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("civitas/form-civitas");
        $this->load->view("templates/footer");
    }

    public function listKpq(){
        $data['title'] = "List KPQ";
        $data['header'] = "List KPQ";
        $data['sidebar'] = "sidebarKpq";
        $data['civitas'] = $this->Civitas_model->getAllCivitasByTipe("012");
        $data['program'] = $this->Civitas_model->getAllProgram();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("modal/modal_detail_civitas");
        $this->load->view("civitas/civitas", $data);
        $this->load->view("templates/footer");
    }

    public function listKaryawan(){
        $data['title'] = "List Karyawan";
        $data['header'] = "List Karyawan";
        $data['sidebar'] = "sidebarKaryawan";
        $data['civitas'] = $this->Civitas_model->getAllCivitasByTipe("011");
        $data['program'] = $this->Civitas_model->getAllProgram();

        $this->load->view("templates/header", $data);
        $this->load->view("templates/sidebar");
        $this->load->view("modal/modal_detail_civitas");
        $this->load->view("civitas/civitas", $data);
        $this->load->view("templates/footer");
    }

    public function insertCivitas(){
        $tipe = $this->input->post("tipe", true);
        if($tipe == 'Karyawan'){
            $tipe = '011';
        } else if($tipe == 'KPQ'){
            $tipe = '012';
        }

        $id = $this->Civitas_model->getLastId($tipe);
        $id = $id['nip'];
        
        $nip = $this->Civitas_model->buatNip($id, $tipe);

        $this->Civitas_model->insertCivitas($nip);
        $this->session->set_flashdata('civitas', 'ditambahkan');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getCivitasByNip(){
        $kpq = $this->Civitas_model->getCivitasByNip();
        echo json_encode($kpq);
    }

    public function editCivitas(){
        $this->Civitas_model->editCivitas();
        $this->session->set_flashdata('civitas', 'diubah');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function tambahKemampuan(){
        $this->Civitas_model->tambahKemampuan();
        $this->session->set_flashdata("kemampuan", "ditambahkan");
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getKemampuanByNip(){
        $kemampuan = $this->Civitas_model->getKemampuanByNip();
        echo json_encode($kemampuan);
    }
    
}
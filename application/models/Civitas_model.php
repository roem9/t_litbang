<?php
class Civitas_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('Datatables', 'datatables');
        
    }

    function getListCivitas($tipe) { //ambil data barang dari table barang yang akan di generate ke datatable
        $this->datatables->select('status, login, nip, nama_kpq, no_hp, alamat');
        $this->datatables->from('kpq');
        $this->datatables->where("substring(nip, 1, 3) = ", $tipe);

        $this->datatables->add_column('action', '
            <a target="_blank" href="'.base_url().'civitas/pembinaan/$1" class="me-1">
                <span class="badge bg-gradient-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                    </svg>
                </span>
            </a>
            <a href="javascript:void(0)" class="modalCivitas" data-bs-toggle="modal" data-bs-target="#modalCivitas" data-id="$2">
                <span class="badge bg-gradient-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                    </svg>
                </span>
            </a>
        ','md5(nip), nip');
        return $this->datatables->generate();
    }

    public function getAllCivitasByTipe($tipe){
        $this->db->from("kpq");
        $this->db->where("substring(nip, 1, 3) = ", $tipe);
        $this->db->order_by("nama_kpq", "asc");
        return $this->db->get()->result_array();
    }

    public function getLastId($tipe){
        $this->db->select("SUBSTRING(nip, 10, 3) as nip");
        $this->db->from("kpq");
        $this->db->where("substring(nip, 1, 3) = ", $tipe);
        $this->db->order_by("nip", "desc");
        return $this->db->get()->row_array();
    }

    public function buatNip($id, $tipe){
        $bulan = date("m");
        $tahun = date("y");

        $id++;
        
        if($id < 10){
            $no_urut = "00" . $id;
        } else if($id >= 10 && $id < 100) {
            $no_urut = "0" . $id;
        } else if($id >= 100 && $id < 1000){
            $no_urut = $id;
        }

        return $tipe . "." . $bulan . $tahun . "." . $no_urut;
    }
}
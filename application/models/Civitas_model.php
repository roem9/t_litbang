<?php
class Civitas_model extends CI_Model{
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
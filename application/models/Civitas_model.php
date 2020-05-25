<?php
class Civitas_model extends CI_Model{
    public function getAllProgram(){
        $this->db->from("program");
        $this->db->order_by("id_program");
        return $this->db->get()->result_array();
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

    public function insertCivitas($nip){
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

        $this->db->insert("kpq", $data['kpq']);

        $data['admin'] = [
            "id_admin" => $nip,
            "password" => "tarqbandung",
            "level" => "kpq"
        ];

        $this->db->insert("admin", $data['admin']);
    }

    public function getCivitasByNip(){
        $nip = $this->input->post("nip", true);
        $this->db->from("kpq");
        $this->db->where("nip", $nip);
        return $this->db->get()->row_array();
    }

    public function editCivitas(){
        $nip = $this->input->post("nip", true);

        $data ['kpq'] = [
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
        
        $this->db->where("nip", $nip);
        $this->db->update("kpq", $data['kpq']);
    }

    public function tambahKemampuan(){
        $data['kemampuan'] = [
            "nip" => $this->input->post("nip", true),
            "kemampuan" => $this->input->post("kemampuan")
        ];

        $this->db->insert("kemampuan", $data['kemampuan']);
    }

    public function getKemampuanByNip(){
        $nip = $this->input->post("nip");
        $this->db->from("kemampuan");
        $this->db->where("nip", $nip);
        return $this->db->get()->result_array();
    }
}
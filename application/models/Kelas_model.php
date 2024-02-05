<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kelas_model extends CI_Model { 
   var $table = 'kelas_pembinaan';
   var $column_order = array(null,'a.status',null,null,'a.program',null,'b.nama_kpq',null,null); //set column field database for datatable orderable
   var $column_search = array('a.status','a.program','b.nama_kpq','a.hari','a.tempat'); //set column field database for datatable searchable 
   var $order = array('a.id_kelas' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->database();
        $this->load->library('Datatables', 'datatables');
    }

    function getListKelas($status) { //ambil data barang dari table barang yang akan di generate ke datatable
        $query = "
            DROP TEMPORARY TABLE IF EXISTS temporaryKelasPembinaan;

            CREATE TEMPORARY TABLE temporaryKelasPembinaan AS
            SELECT
                a.id_kelas
                , a.tgl_mulai
                , a.tgl_selesai
                , a.status
                , a.program
                , a.hari
                , a.jam
                , a.tempat
                , b.nip
                , b.nama_kpq
                , (SELECT COUNT(nip) FROM kelas_kpq WHERE id_kelas = a.id_kelas) as peserta
                , CONCAT(a.hari, ' ', a.jam, ' (', a.tempat, ')') as waktu_tempat
            FROM kelas_pembinaan a
            JOIN kpq as b ON a.nip = b.nip;
        ";

        $queries = explode(";", $query);

        foreach ($queries as $query) {
            if(trim($query) != ""){
                $this->db->query($query);
            }
        }
        
        $this->datatables->select('id_kelas, tgl_mulai, tgl_selesai, status, program, hari, jam, tempat, nip, nama_kpq, peserta, waktu_tempat');
        $this->datatables->from('temporaryKelasPembinaan');
        $this->datatables->where("status", $status);

        $this->datatables->add_column('action', '
            <a href="javascript:void(0)" class="detail" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="$1">
                <span class="badge bg-gradient-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                    </svg>
                </span>
            </a>
        ','id_kelas');
        return $this->datatables->generate();
    }
 
    private function _get_datatables_query($where)
    {
         $this->db->select("a.id_kelas, a.tgl_mulai, a.tgl_selesai, a.status, a.program, a.hari, a.jam, a.tempat, b.nip, b.nama_kpq");
         $this->db->from("kelas_pembinaan as a");
         $this->db->join("kpq as b", "a.nip = b.nip");
         $this->db->where($where);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 

        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($where)
    {
        $this->_get_datatables_query($where);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($where)
    {
        $this->_get_datatables_query($where);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($where)
    {

         $this->db->select("a.id_kelas, a.tgl_mulai, a.tgl_selesai, a.status, a.program, a.hari, a.jam, a.tempat, b.nip, b.nama_kpq");
         $this->db->from("kelas_pembinaan as a");
         $this->db->join("kpq as b", "a.nip = b.nip");
         $this->db->where($where);       
        return $this->db->count_all_results();
    }
}
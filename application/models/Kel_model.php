<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kel_model extends CI_Model { 
    var $table = 'kelas_pembinaan';
    var $column_order = array(null,'status',null,null,'program',null,'nama_kpq',null,null); //set column field database for datatable orderable
    var $column_search = array('status','program','nama_kpq','hari','tempat'); //set column field database for datatable searchable 
    var $order = array('id_kelas' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->database();
    }
 
    private function _get_datatables_query($where)
    {
        // $this->db->from($this->table);
        // $this->db->from("kelas_pembinaan as a");
        $this->db->select("a.id_kelas id_kelas, a.tgl_mulai tgl_mulai, a.tgl_selesai tgl_selesai, a.status status, a.program program, CONCAT(a.hari, ' ', a.jam, ' (', a.tempat, ')') jadwal, b.nip nip, b.nama_kpq nama_kpq");
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
        // $this->db->from($this->table);
        $this->db->from("kelas_pembinaan as a");
        $this->db->select("a.id_kelas id_kelas, a.tgl_mulai tgl_mulai, a.tgl_selesai tgl_selesai, a.status status, a.program program, CONCAT(a.hari, ' ', a.jam, ' (', a.tempat, ')') as jadwal, b.nip nip, b.nama_kpq nama_kpq");
        $this->db->join("kpq as b", "a.nip = b.nip");
        $this->db->where($where);
        return $this->db->count_all_results();
    }
 
}
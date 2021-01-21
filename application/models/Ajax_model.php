<?php
class Ajax_model extends CI_MODEL{
    public function get_all($table, $where = "", $order = "", $by = "ASC"){
        $this->db->from($table);
        if($where)
            $this->db->where($where);
        if($order)
            $this->db->order_by($order, $by);
        // return $this->db->get()->result_array();
    }
}
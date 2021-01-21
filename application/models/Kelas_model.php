<?php
class Kelas_model extends CI_Model {

   // Get DataTable data
   function get_kelas($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $search_arr = array();
      $searchQuery = "";
      if($searchValue != ''){
         $search_arr[] = " (a.status like '%".$searchValue."%' or 
         a.program like '%".$searchValue."%' or 
         b.nama_kpq like '%".$searchValue."%') ";
      }
      if(count($search_arr) > 0){
         $searchQuery = implode(" and ",$search_arr);
      }

      ## Total number of records without filtering
      $this->db->select('count(*) as allcount');
      // $records = $this->db->get('kelas_pembinaan')->result();
      $this->db->from("kelas_pembinaan as a");
      $this->db->join("kpq as b", "a.nip = b.nip");
      $records = $this->db->get()->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      if($searchQuery != '')
      $this->db->where($searchQuery);
      // $records = $this->db->get('kelas_pembinaan')->result();
      $this->db->from("kelas_pembinaan as a");
      $this->db->join("kpq as b", "a.nip = b.nip");
      $records = $this->db->get()->result();
      $totalRecordwithFilter = $records[0]->allcount;

      ## Fetch records
      // $this->db->select('*');
      
      $this->db->select("a.id_kelas id_kelas, a.status status, a.program program, CONCAT(a.hari, ' ', a.jam, ' (', a.tempat, ')') as jadwal, b.nip nip, b.nama_kpq nama_kpq");
      $this->db->from("kelas_pembinaan as a");
      $this->db->join("kpq as b", "a.nip = b.nip");
      if($searchQuery != '')
      $this->db->where($searchQuery);
      $this->db->order_by($columnName, $columnSortOrder);
      $this->db->limit($rowperpage, $start);
      // $records = $this->db->get('kelas_pembinaan')->result();
      $records = $this->db->get()->result();

      $data = array();

      foreach($records as $i => $record ){
         if($record->status == "aktif"){
            $status = '<a href="#modalEditStatus" data-toggle="modal" data-id="'.$record->id_kelas.'" class="btn btn-sm btn-outline-success status">'.$record->status.'</a>';
         } else {
            $status = $record->status;
         }
         $peserta = '<center><a href="#modalEdit" data-toggle="modal" data-id="'.$record->id_kelas.'" class="btn btn-sm btn-outline-info peserta">' . COUNT($this->Main_model->get_all("kelas_kpq", ["id_kelas" => $record->id_kelas])) . '</a></center>';
         $detail = '<a href="#modalEdit" data-toggle="modal" data-id="'.$record->id_kelas.'" class="btn btn-sm btn-info detail">detail</a>';

         $data[] = array( 
            "nomor" => $i,
            "id_kelas" => $record->id_kelas,
            "status" => $status,
            "program" => $record->program,
            "peserta" => $peserta,
            "detail" => $detail,
            "nama_kpq" => $record->nama_kpq,
            "jadwal" => $record->jadwal,
         ); 
      }

      ## Response
      $response = array(
         "draw" => intval($draw),
         "iTotalRecords" => $totalRecords,
         "iTotalDisplayRecords" => $totalRecordwithFilter,
         "aaData" => $data
      );

      return $response; 
   }
}
<?php
    class Kelas extends CI_CONTROLLER{
        public function __construct(){
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
    
        public function ajax_list($status)
        {
            $list = $this->Kel_model->get_datatables("a.status = '$status'");
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $kelas) {
                $no++;
                $row = array();
                $row[] = "<center>$no</center>";
                if($kelas->status == "aktif"){
                    $row[] = '<a href="javascript:void(0)" data-toggle="modal" data-id="'.$kelas->id_kelas.'|nonaktif" class="btn btn-sm btn-outline-success status">'.$kelas->status.'</a>';
                } else {
                    $row[] = '<a href="javascript:void(0)" data-toggle="modal" data-id="'.$kelas->id_kelas.'|aktif" class="btn btn-sm btn-outline-secondary status">'.$kelas->status.'</a>';
                }
                $row[] = date("d-m-Y", strtotime($kelas->tgl_mulai));
                $row[] = date("d-m-Y", strtotime($kelas->tgl_selesai));
                $row[] = $kelas->program;
                $row[] = $kelas->jadwal;
                $row[] = $kelas->nama_kpq;
                $row[] = '<center><a href="#modalEdit" data-toggle="modal" data-id="'.$kelas->id_kelas.'" class="btn btn-sm btn-outline-info peserta">' . COUNT($this->Main_model->get_all("kelas_kpq", ["id_kelas" => $kelas->id_kelas])) . '</a></center>';
                $row[] = '<a href="#modalEdit" data-toggle="modal" data-id="'.$kelas->id_kelas.'" class="btn btn-sm btn-info detail">detail</a>';
    
                $data[] = $row;
            }
    
            $output = array(
                            "draw" => $_POST['draw'],
                            "recordsTotal" => $this->Kel_model->count_all("a.status = '$status'"),
                            "recordsFiltered" => $this->Kel_model->count_filtered("a.status = '$status'"),
                            "data" => $data,
                    );
            //output to json format
            echo json_encode($output);
        }
    
        public function aktif(){
            $data['title'] = "List Kelas Pembinaan Aktif";
            $data['header'] = "List Kelas Pembinaan Aktif";
            $data['status'] = "aktif";
            
            // form
            $data['program'] = $this->Main_model->get_all("program", "", "nama_program");
            $data['kpq'] = $this->Main_model->get_all("kpq", ["status" => "aktif"], "nama_kpq");
            $data['tempat'] = $this->Main_model->get_all("ruangan", "", "nama_ruangan");
            // $data['jam'] = $this->Main_model->get_all("waktu", "", "jam");
            $data['jam'] = ["13.00-14.30"];

            $this->load->view("templates/header", $data);
            $this->load->view("templates/sidebar");
            $this->load->view("kelas/list_kelas", $data);
            $this->load->view("templates/footer");
        }

        public function nonaktif(){
            $data['title'] = "List Kelas Pembinaan Nonaktif";
            $data['header'] = "List Kelas Pembinaan Nonaktif";
            $data['status'] = "nonaktif";
            
            // form
            $data['program'] = $this->Main_model->get_all("program", "", "nama_program");
            $data['kpq'] = $this->Main_model->get_all("kpq", ["status" => "aktif"], "nama_kpq");
            $data['tempat'] = $this->Main_model->get_all("ruangan", "", "nama_ruangan");
            // $data['jam'] = $this->Main_model->get_all("waktu", "", "jam");
            $data['jam'] = ["13.00-14.30"];

            $this->load->view("templates/header", $data);
            $this->load->view("templates/sidebar");
            $this->load->view("kelas/list_kelas", $data);
            $this->load->view("templates/footer");
        }

        public function data_kelas(){
            $kelas = $this->Main_model->get_all("kelas_pembinaan", "", "tgl_mulai", "DESC");
            $data['kelas'] = [];
            foreach ($kelas as $i => $hasil) {
                $data['kelas'][$i] = $hasil;
                $data['kelas'][$i]['kpq'] = $this->Main_model->get_one("kpq", ["nip" => $hasil['nip']]);
            }

            echo json_encode($data['kelas']);
        }

        // add
            public function add_kelas(){
                $data = [
                    // "id_kelas" => "";
                    "tgl_mulai" => $this->input->post("tgl_mulai", TRUE),
                    "tgl_selesai" => $this->input->post("tgl_selesai", TRUE),
                    "program" => $this->input->post("program", TRUE),
                    "status" => "aktif",
                    "nip" => $this->input->post("nip", TRUE),
                    "catatan" => $this->input->post("catatan", TRUE),
                    "tempat" => $this->input->post("tempat", TRUE),
                    "hari" => $this->input->post("hari", TRUE),
                    "jam" => $this->input->post("jam", TRUE),
                ];

                $this->Main_model->add_data("kelas_pembinaan", $data);
                echo json_encode("1");
            }
            
        // add
         
        // peserta 
            public function add_peserta(){
                $id_kelas = $this->input->post("id_kelas");
                $nip = $this->input->post("nip");
                $this->Main_model->add_data("kelas_kpq", ["id_kelas" => $id_kelas, "nip" => $nip]);
                echo json_encode($id_kelas);
            } 

            public function delete_peserta(){
                $id_kelas = $this->input->post("id_kelas");
                $nip = $this->input->post("nip");
                $this->Main_model->delete_data("kelas_kpq", ["id_kelas" => $id_kelas, "nip" => $nip]);
                echo json_encode($id_kelas);
            }

        // peserta 

        // get
            public function get_kelas(){
                $id = $this->input->post("id_kelas");
                $data = $this->Main_model->get_one("kelas_pembinaan", ["id_kelas" => $id]);
                $kpq = $this->Main_model->get_one("kpq", ["nip" => $data['nip']]);
                $data['nama_kpq'] = $kpq['nama_kpq'];
                echo json_encode($data);
            }
            
            public function get_peserta(){
                $id = $this->input->post("id_kelas");
                $data = [];
                $kpq = $this->Main_model->get_all("kelas_kpq", ["id_kelas" => $id]);
                foreach ($kpq as $i => $kpq) {
                    $detail = $this->Main_model->get_one("kpq", ["nip" => $kpq['nip']]);
                    $data[$i] = $detail;
                    $data[$i]['id'] = $kpq['id'];
                }
                
                $columns = array_column($data, 'nama_kpq');
                array_multisort($columns, SORT_ASC, $data);
                echo json_encode($data);
            }

            // Calon peserta kelas pembinaan
            public function get_calon_peserta(){
                // tampilkan seluruh kpq 
                $a = [];
                $b = [];
                $data = [];
                
                // peserta kelas 
                $id = $this->input->post("id_kelas");
                $y = $this->Main_model->get_all("kelas_kpq", ["id_kelas" => $id]);
                foreach ($y as $i => $y) {
                    $b[$i] = $y['nip'];
                }

                // calon peserta kelas 
                $x = $this->Main_model->get_all("kpq", ["status" => "aktif"], "nama_kpq");
                $i = 0;
                foreach ($x as $x) {
                    if(!in_array($x['nip'], $b)){
                        $data[$i] = $x;
                        $i++;
                    }
                }

                echo json_encode($data);
            }
        // get

        // edit
            public function edit_kelas(){
                $id_kelas = $this->input->post("id_kelas");

                $data = [
                    "tgl_mulai" => $this->input->post("tgl_mulai", TRUE),
                    "tgl_selesai" => $this->input->post("tgl_selesai", TRUE),
                    "program" => $this->input->post("program", TRUE),
                    "nip" => $this->input->post("nip", TRUE),
                    "catatan" => $this->input->post("catatan", TRUE),
                    "tempat" => $this->input->post("tempat", TRUE),
                    "hari" => $this->input->post("hari", TRUE),
                    "jam" => $this->input->post("jam", TRUE),
                ];

                $this->Main_model->edit_data("kelas_pembinaan", ["id_kelas" => $id_kelas], $data);
                echo json_encode("1");
            }

            public function edit_status(){
                $id_kelas = $this->input->post("id_kelas");
                $status = $this->input->post("status");
                $data = [
                    "tgl_selesai" => $this->input->post("tgl_selesai"),
                    "status" => $status
                ];

                $this->Main_model->edit_data("kelas_pembinaan", ["id_kelas" => $id_kelas], $data);
                echo json_encode("1");
            }
        // edit

        // delete
            public function hapus_peserta(){
                $peserta = $this->input->post("peserta");
                foreach ($peserta as $peserta) {
                    $this->Main_model->delete_data("kelas_kpq", ["id" => $peserta]);
                }
                echo json_encode("1");
            }
        // delete
    }
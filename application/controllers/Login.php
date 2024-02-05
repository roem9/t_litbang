<?php
class Login extends CI_CONTROLLER{
    public function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index(){
        $data['header'] = 'Login';
        $data['title'] = 'Login';

        // $this->load->view("templates/header", $data);
        $this->load->view("layout/header", $data);
        $this->load->view("login/login");
        $this->load->view("layout/footer");
        // $this->load->view("templates/footer");
    }

    public function cekLogin(){		
        $username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$where = array(
			'id_admin' => $username,
            'password' => $password,
            'level' => 'litbang'
        );

        $admin = $this->Login_model->cekLogin("admin", $where);
        $cek = COUNT($admin);

		if($cek > 0){
            
            $level = $admin['level'];

			$data_session = array(
				'level' => $level,
				'status' => "login"
            );
 
			$this->session->set_userdata($data_session);
            
            redirect(base_url('civitas/kpq'));
 
		}else{
            $this->session->set_flashdata('login', 'Maaf, kombinasi username dan password salah');
			redirect(base_url("login"));
		}
    }

    function logout(){
        // $this->session->set_flashdata('login', 'Berhasil logout');
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }
}
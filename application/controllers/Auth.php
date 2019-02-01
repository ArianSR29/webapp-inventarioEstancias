<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

	public function index(){
		$this->load->view('admin/login');
    }
    
    public function login(){
        $username = $this->input->post("tb_user");
        $password = $this->input->post("tb_password");

        $res = $this->Usuarios_model->login($username, md5($password));

        if (!$res) {
            redirect(base_url());
        }else{
            $data = array(
                'id'=>$res->id,
                'nombre'=>$res->nombres,
                'rol'=>$red->rol_id,
                'login'=>true
            );
            $this->session->set_userdata($data);
            redirect(base_url()."dashboard");
        }
    }

}

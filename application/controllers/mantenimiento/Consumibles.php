<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumibles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Consumibles_model");
	}

	public function index(){
		
		$data = array(
			
			'consumibles' => $this->Consumibles_model->getConsumibles(),

		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $this->load->view('admin/consumibles/list', $data);
	}
}

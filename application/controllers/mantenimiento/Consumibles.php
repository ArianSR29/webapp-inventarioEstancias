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
	public function addConsumible(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $this->load->view('admin/consumibles/addConsumible');
	}

	public function stock(){
		$tipo = $this->input->post("tb_tipo");
		$marca = $this->input->post("tb_marca");
		$descripcion = $this->input->post("tb_descripcion");
		$existencia = $this->input->post("tb_existencia");
		$color = $this->input->post("tb_color");


		$data = array(
			'tipo' => $tipo,
			'marca' => $marca,
			'descripcion' => $descripcion,
			'color' => $color,
			'total_consumibles' => $existencia,
			'estado' => "1"
		);
		if ($this->Consumibles_model->saveConsumible($data)) {
			# code...
			redirect(base_url()."mantenimiento/consumibles");
		}else{
			$this->session->set_flashdata("error", "No se pudo guardar la infomación");
			redirect(base_url()."mantenimiento/consumibles/addConsumible");
		}
	}
}

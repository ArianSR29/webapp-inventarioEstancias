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
			redirect(base_url()."mantenimiento/consumibles");
		}else{
			$this->session->set_flashdata("error", "No se pudo guardar la infomación");
			redirect(base_url()."mantenimiento/consumibles/addConsumible");
		}
	}

	public function editConsumible($id_consumible){
		$data = array(
			'consumibles' => $this-> Consumibles_model->getConsumiblesEdit($id_consumible)
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
        $this->load->view('admin/consumibles/editConsumible', $data);
	}

	public function updateConsumible(){
		$id_consumible = $this->input->post("tb_id_consumible");
		$tipo = $this->input->post("tb_tipo");
		$marca = $this->input->post("tb_marca");
		$descripcion = $this->input->post("tb_descripcion");
		$existencia = $this->input->post("tb_existencia");
		$color = $this->input->post("tb_color");

		$data = array(
			'tipo' => $tipo,
			'marca' => $marca,
			'descripcion' => $descripcion,
			'total_consumibles' => $existencia,
			'color' => $color,
		);
		
		if($this->Consumibles_model->updateConsumible($id_consumible, $data)) {
			redirect(base_url()."mantenimiento/consumibles");
			
		}else{
			$this->session->set_flashdata("error", "No se pudo actualizar la infomación");
			redirect(base_url()."mantenimiento/consumibles/editConsumible/".$id_consumible);
		}
	}
	public function deleteConsumible($id_consumible){
		$data = array(
			'estado' => "0", );
		$this->Consumibles_model->updateConsumible($id_consumible, $data);
	}
}

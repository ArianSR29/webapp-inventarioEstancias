<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumibles_model extends CI_Model {

    public function getConsumibles(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("tb_consumibles");

        return  $resultados->result();
    }
    public function saveConsumible($data){
        return $this->db->insert("tb_consumibles",$data);
    } 
}

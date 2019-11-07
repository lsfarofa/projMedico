<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes_model extends CI_Model {
	
	public function cadastrar()
	{
		try{
			$data = [];
			$data['nome'] = $this->input->post('nome');
			$data['email'] = $this->input->post('email');
			$data['contato'] = $this->input->post('contato');
			$data['endereco'] = $this->input->post('endereco');
		
			return $this->db->insert('clientes',$data);
		}catch(Exception $e){
			return FALSE;
		}
	}
	//----------------------------------------------------------------------------------
	
	public function listagem(){

		try{
			return $this->db->get('clientes')->result();
		}catch(Exception $e){
			return false;
		}

	}

	public function get_where($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('clientes');
		return $query->row();
	}



	 public function update($id){

	 try{
	
		$data = $_POST;
		$this->db->where('id', $id);
		$this->db->set($data);	
		$this->db->update('clientes');

	

	}catch(Exception $e){
		return FALSE;
	
	

	}
}

}
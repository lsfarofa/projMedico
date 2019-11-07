<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medicos_model extends CI_Model {
	
	public function cadastrar()
	{
		try{
			$data = [];
			$data['nome'] = $this->input->post('nome'); 
			$data['crm'] = $this->input->post('crm');
			$data['especialidade'] = $this->input->post('especialidade');
			$data['email'] = $this->input->post('email');
			$data['senha'] = $this->input->post('senha');
		
			return $this->db->insert('medicos',$data);
		}catch(Exception $e){
			return FALSE;
		}
	}
	//----------------------------------------------------------------------------------
	
	public function listagem($nome=null){

		try{
			if (!empty($nome)) {
				$this->db->like('nome', $nome);
				$this->db->or_like('especialidade', $nome);
				$this->db->or_like('crm', $nome);
			}
			return  $this->db->get('medicos')->result();
		}catch(Exception $e){
			return [];
		}

	}

	public function get_where($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('medicos');
		return $query->row();
	}



	 public function update($id){

	 try{
	
		$data = $_POST;
		$this->db->where('id', $id);
		$this->db->set($data);	
		$this->db->update('medicos');

	

	}catch(Exception $e){
		return FALSE;
	
	

	}
}


} 


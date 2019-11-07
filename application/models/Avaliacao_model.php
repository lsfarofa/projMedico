<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Avaliacao_model extends CI_Model {
	
	public function cadastrar()
	{
		try{
			$data = [];
			$data['nome'] = $this->input->post('nome');
			$data['nota'] = $this->input->post('nota');
			$data['comentario'] = $this->input->post('comentario');
			$data['especialidade'] = $this->input->post('especialidade');
			$data['titulo'] = $this->input->post('titulo');

			return $this->db->insert('avaliacao',$data);
		}catch(Exception $e){
			return FALSE;
		}
	}
	//----------------------------------------------------------------------------------
	
	public function listagem(){

		try{
			return $this->db->get('avaliacao')->result();
		}catch(Exception $e){
			return false;
		}

	}

	public function get_where($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('avaliacao');
		return $query->row();
	}



	 public function update($id){

	 try{
	
		$data = $_POST;
		$this->db->where('id', $id);
		$this->db->set($data);	
		$this->db->update('avaliacao');

	

	}catch(Exception $e){
		return FALSE;
	
	

	}
}



	
	

}

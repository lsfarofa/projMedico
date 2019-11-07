<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
	
	public function cadastrar()
	{
		try{
			//print_r('DEU MERDA'); exit;
			$data = [];
			$data['email'] = $this->input->post('email');
			$data['senha']= $this->input->post('senha');
		
			return $this->db->insert('login',$data);
		}catch(Exception $e){
			return FALSE;
		}
	}
	//----------------------------------------------------------------------------------
	
	public function logar($email, $senha) {

			$this->db->where('email', $email); 
			$this->db->where('senha', $senha);
			$usuario = $this->db->get('login')->row_array();
			return $usuario;
		
	}

	
}
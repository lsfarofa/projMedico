<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Avaliacao extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Avaliacao_model');	
	}
	public function index(){
		
		$dados=[
			'Avaliacao'=> $this->Avaliacao_model->listagem()
		];
		$this->load->view('AvaliacaoLista', $dados);
		
		
	}
	public function cadastrar(){

        $this->load->library(array('form_validation'));
		$this->form_validation->set_rules('nome','Nome',				        	            'trim|required');
		$this->form_validation->set_rules('nota','Nota',				        		        'trim|required');
		$this->form_validation->set_rules('comentario','Comentario',				         	'trim|required');
		$this->form_validation->set_rules('especialidade','Especialidade',				        'trim|required');
		$this->form_validation->set_rules('titulo','Titulo',				       			    'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('avaliacao', $erros);
			
	 } 
	else{

		$this->Avaliacao_model->cadastrar();

		redirect('Avaliacao');

	}
}
	
	public function novo (){

		$this->load->view('Avaliacao');

	
     
	}

	public function editar($id)
	{
		$data['nome'] = "";
	

		$data['registro'] = $this->Avaliacao_model->get_where($id);

		$this->load->view('AvaliacaoEdita', $data);
	}

	public function atualizar($id)
	{

		$this->Avaliacao_model->update($id);
		$this->session->set_flashdata('msg', 'Registro Atualizado com Sucesso!');
		redirect('Avaliacao');
	}


	
	
	
}
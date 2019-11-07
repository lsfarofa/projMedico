<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Clientes_model');	
	}
	public function index(){
		
		$dados=[
			'Clientes'=> $this->Clientes_model->listagem()
		];
		$this->load->view('ClientesLista', $dados);
		
		
	}
	public function cadastrar(){

        $this->load->library(array('form_validation'));
		$this->form_validation->set_rules('nome','Nome',				        	'trim|required');
        $this->form_validation->set_rules('email','Email',				         	'trim|required');
        $this->form_validation->set_rules('contato','Contato',				        'trim|required');
        $this->form_validation->set_rules('endereco','Endereco',				    'trim|required');
		
		
		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('clientes', $erros);
			
			echo "<script>alert
			('ERRO: Os dados digitados já existem. Verifique novamente');
			
			</script>";
		
	 } 
	else{

		$this->Clientes_model->cadastrar();

		redirect('Clientes');

	}
}
	
	public function novo (){

		$this->load->view('Clientes');
     
	}

	public function editar($id)
	{
		$data['nome'] = "";
	

		$data['registro'] = $this->Clientes_model->get_where($id);

		$this->load->view('ClientesEdita', $data);
	}

	public function atualizar($id)
	{

		$this->Clientes_model->update($id);
		$this->session->set_flashdata('msg', 'Registro Atualizado com Sucesso!');
		redirect('Clientes');
	}

	public function listar()
	{
		$dados=[
			'Clientes'=> $this->Clientes_model->listagem()
		];
		$this->load->view('ClientesLista', $dados);
	}

	
	
}

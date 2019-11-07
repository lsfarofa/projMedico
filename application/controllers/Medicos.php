<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medicos extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Medicos_model');	
	}
	public function index(){
	//print_R($this->input->get('q')); exit;
		$dados=[
			'medicos'=> $this->Medicos_model->listagem($this->input->get('q'))
		];
		//echo __LINE__, ':', __FUNCTION__;
		$this->load->view('MedicosLista', $dados);
		
		
	}
	public function cadastrar(){

        $this->load->library(array('form_validation'));
		$this->form_validation->set_rules('nome','Nome',				        	'trim|required|is_unique[medicos.nome]');
		$this->form_validation->set_rules('especialidade','Especialidade',			'trim|required');
		$this->form_validation->set_rules('crm', 'Crm',                       	    'trim|required|is_unique[medicos.crm]');
		$this->form_validation->set_rules('email','Email',				         	'trim|required|is_unique[medicos.email]');
		$this->form_validation->set_rules('senha','Senha',				         	'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$erros = array('mensagens' => validation_errors());
			$this->load->view('medicos', $erros);
			
			echo "<script>alert
			('ERRO: Os dados digitados já existem. Verifique novamente');
			
			</script>";
		
	 } 
	else{

		$this->Medicos_model->cadastrar();

		redirect('Medicos');

	}
}
	
	public function novo (){

		$this->load->view('Medicos');
     
	}

	public function editar($id)
	{
		$data['nome'] = "";
	

		$data['registro'] = $this->Medicos_model->get_where($id);

		$this->load->view('MedicosEdita', $data);
	}

	public function atualizar($id)
	{

		$this->Medicos_model->update($id);
		$this->session->set_flashdata('msg', 'Registro Atualizado com Sucesso!');
		redirect('Medicos');
	}

	//public function listar()
	//{
	//	$dados=[
		//	'Medicos'=> $this->Medicos_model->listagem()
		//];
		//$this->load->view('MedicosLista', $dados);
	//}



	
	
}

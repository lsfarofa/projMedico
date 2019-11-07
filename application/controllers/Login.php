<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');
		$this->load->model('Login_model');	
    }
    
    public function index(){
		
		$this->load->view('Login');
		
		
	}

	public function cadastrar(){
       
		$this->load->library(array('form_validation'));
		$this->form_validation->set_rules('email','Email',				        'trim|required');
		$this->form_validation->set_rules('senha', 'Senha',                     'trim|required');

        
		if($this->form_validation->run()== FALSE):
			$dados['formerror'] = validation_errors();
			$this->load->view('login', $dados);
		else:
			$this->Login_model->cadastrar();
			redirect('login');
		endif;
	}
//__________________________________________________________________________________________________
	
	public function novo (){

		$this->load->view('Login');

	}

    public function autenticar() {

            $email = $this->input->post("email",   		'trim|required');
            $senha = md5 ($this->input->post("senha", 	'trim|required'));
            $usuario = $this->Login_model->logar($email, $senha);

            if($usuario){

                $this->session->set_userdata("usuario logado", $usuario);
                $this->session->set_flashdata("success", "Logado com Sucesso");

            }else{

                $this->session->set_flashdata("danger", "Usuario ou Senha invalidos");
            }

            redirect('PainelMedicos');

    }

    public function deslogar() {
		
        $this->session->sess_destroy();
        redirect(site_url('Estrutura'));
    
    }
   
}



<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Estrutura extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->helper('Form');	
	}
	public function index(){
	
		$this->load->view('Estrutura');
		
		
    }
}
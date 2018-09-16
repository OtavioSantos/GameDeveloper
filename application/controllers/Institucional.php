<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller {

	public function index()
	{
		$data['navIcon'] = ""; //define o navicon da página
		$data['title'] = "gameDeveloper - Estude, Desenvolva e Compartilhe"; //Define o título da página
		
		$this->load->view('inset/head', $data);
		$this->load->view('inset/nav');
		$this->load->view('index');
		$this->load->view('inset/footer');
	}
}

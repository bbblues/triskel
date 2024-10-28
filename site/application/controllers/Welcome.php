<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['menu'] = "home";
		$data['page'] = "home.php";
		$data['fundo'] = "miolo";
		$this->load->view('index',$data);
	}

	public function sistema($v="introducao")
	{
		$data['menu'] = "sistema";
		$data['page'] = "sistema.php";
		$data['capitulo'] = 'sistema/'.$v;
		$data['fundo'] = "sistema";
		$this->load->view('index',$data);
	}

	public function cenario($v="introducao")
	{
		$data['menu'] = "cenario";
		$data['page'] = "cenario.php";
		$data['capitulo'] = 'cenario/'.$v;
		$data['fundo'] = "sistema";
		$this->load->view('index',$data);
	}

	public function bestiario()
	{
		$data['menu'] = "bestiario";
		$data['page'] = "bestiario.php";
		$data['fundo'] = "sistema";
		$this->load->view('index',$data);
	}
}

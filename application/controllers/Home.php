<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
  public function __construct(){
    parent::__construct();
		//$this->load->model('Noticia_model');
		$this->load->helper('text');
  }
	public function index(){
		$this->load->view('home/home', array(
			'title' => 'Proyecto :)',
			'app' => $this->config->item("app_name")
			//'news' => $this->Noticia_model->noticias_index()
		));
	}
	public function quienes_somos(){
		$this->load->view('home/quienes_somos', array(
			'title' => 'Quienes Somos',
			'app' => $this->config->item("app_name")
		));
	}
}

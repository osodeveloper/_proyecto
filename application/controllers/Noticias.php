<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {
	protected $upload_path = 'overall/uploads/';
	//######################################################
  function __construct(){
    parent::__construct();
		  $this->load->model('Noticia_model');
  }
	public function index(){
		$this->load->view('noticias/home', array(
			'title' => 'Noticias',
      'news' => $this->Noticia_model->news_all()
		));
	}
	public function ver($id = null) {
		if ($id != null) {
			$res = $this->Noticia_model->ver($id);
			$this->load->view('noticias/ver', array(
				'title' => $res['noticia'][0]->titulo,
				'news' => $res,
			));
		}else {
			redirect('noticias');
		}
	}
	public function amenidades(){
		$this->load->view('noticias/amenidades', array(
			'title' => 'Amenidades',
		));
	}
}

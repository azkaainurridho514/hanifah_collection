<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}
	public function index()
	{
		$data['listContent'] = $this->Home_model->getContent();
		$data['hero'] = $this->Home_model->getHero();
        $this->template->load('template', 'home/index', $data);
	}
}
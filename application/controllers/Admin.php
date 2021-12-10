<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['hero'] = $this->Home_model->getHero(); 
        $this->template->load('template_admin', 'dashboard/index', $data);
	}

	function update_Hero()
	{
		$this->Home_model->edit();
		redirect('admin');
	}

	function insert()
	{
		$this->Home_model->insert();
		redirect('admin/product');
	}

	function product()
	{
		$data['content'] = $this->Home_model->getContent();
        $this->template->load('template_admin', 'dashboard/product', $data);
	}

	function delete($id)
	{
		$this->Home_model->deleteContent($id);
		redirect('admin/product');
	}
}
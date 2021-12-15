<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->library('form_validation');
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

	function insert_content()
	{	
	
		if($this->input->is_ajax_request() == true){

     
        // validation role
	        $this->form_validation->set_rules('title', 'Title ','required', ['required' => 'Field title tidak boleh kosong']);
	        $this->form_validation->set_rules('subtitle', 'Subtitle', 'required|min_length[10]', ['required' => 'Field subtitle tidak boleh kosong']);
	        $this->form_validation->set_rules('price', 'Price', 'required|numeric', ['required' => 'Field harga tidak boleh kosong']);
	        $this->form_validation->set_rules('category', 'Category', 'required', ['required' => 'tidak boleh kosong']);
        
        // run validation
	        if($this->form_validation->run() == TRUE){  

            $msg = [
                'err' => "berhasil"
            ];

            $id = $this->input->post('id');$title = $this->input->post('title', true);
            $subtitle = $this->input->post('subtitle', true);$price = $this->input->post('price', true);
            $stok = $this->input->post('stok', true);$category = $this->input->post('category', true);
            $image = $this->input->post('image', true);$image1 = $this->input->post('image1', true);
            $image2 = $this->input->post('image2', true);$image3 = $this->input->post('image3', true);
            $motif1 = $this->input->post('motif1', true);$motif2 = $this->input->post('motif2', true);
            $motif3 = $this->input->post('motif3', true);$motif4 = $this->input->post('motif4', true);
            $motif5 = $this->input->post('motif5', true);$motif6 = $this->input->post('motif6', true);
            $motif7 = $this->input->post('motif7', true);$motif8 = $this->input->post('motif8', true);
            $warna1 = $this->input->post('warna1', true);$warna2 = $this->input->post('warna2', true);
            $warna3 = $this->input->post('warna3', true);$warna4 = $this->input->post('warna4', true);
            $warna5 = $this->input->post('warna5', true);$warna6 = $this->input->post('warna6', true);
            $warna7 = $this->input->post('warna7', true);$warna8 = $this->input->post('warna8', true);
            $stok1m = $this->input->post('stok1m', true);$stok2m = $this->input->post('stok2m', true);
            $stok3m = $this->input->post('stok3m', true);$stok4m = $this->input->post('stok4m', true);
            $stok5m = $this->input->post('stok5m', true);$stok6m = $this->input->post('stok6m', true);
            $stok7m = $this->input->post('stok7m', true);$stok8m = $this->input->post('stok8m', true);
            $stok1w = $this->input->post('stok1w', true);$stok2w = $this->input->post('stok2w', true);
            $stok3w = $this->input->post('stok3w', true);$stok4w = $this->input->post('stok4w', true);
            $stok5w = $this->input->post('stok5w', true);$stok6w = $this->input->post('stok6w', true);
            $stok7w = $this->input->post('stok7w', true);$stok8w = $this->input->post('stok8w', true);
              if(!$image){
                $slide = 1;
              }else{
                $slide = 0;
              }

            $content = [
              'id_content' => $id,
              'id_category' => $category,
              'slide' => $slide,
              'title' => $title,
              'sub_title' => $subtitle,
              'price' => $price,
              'stok' => $stok,
              'image' => 'projects.jpg'
            ];
              // $this->db->insert('content', $content); 

            $image_content = [
              'id_image' => $id,
              'id_content' => $id,
              'image_1' => $image1,
              'image_2' => $image2,
              'image_3' => $image3
            ];
              // $this->db->insert('image_content', $image_content);

            $motif_content = [
              'id_motif' => $id,
              'id_content' => $id,
              'motif_1' => $motif1,
              'motif_2' => $motif2,
              'motif_3' => $motif3,
              'motif_4' => $motif4,
              'motif_5' => $motif5,
              'motif_6' => $motif6,
              'motif_7' => $motif7,
              'motif_8' => $motif8
            ];
              // $this->db->insert('motif_content', $motif_content); 

            $warna_content = [
              'id_warna' => $id,
              'id_content' => $id,
              'warna_1' => $warna1,
              'warna_2' => $warna2,
              'warna_3' => $warna3,
              'warna_4' => $warna4,
              'warna_5' => $warna5,
              'warna_6' => $warna6,
              'warna_7' => $warna7,
              'warna_8' => $warna8
            ];
              // $this->db->insert('warna_content', $warna_content);

            $stok_motif = [
              'id_stok_motif' => $id,
              'id_content' => $id,
              'stok_motif_1' => $stok1m,
              'stok_motif_2' => $stok2m,
              'stok_motif_3' => $stok3m,
              'stok_motif_4' => $stok4m,
              'stok_motif_5' => $stok5m,
              'stok_motif_6' => $stok6m,
              'stok_motif_7' => $stok7m,
              'stok_motif_8' => $stok8m,
            ];
              // $this->db->insert('stok_motif_content', $stok_motif); 
            
            $stok_warna = [
              'id_stok_warna' => $id,
              'id_content' => $id,
              'stok_warna_1' => $stok1w,
              'stok_warna_2' => $stok2w,
              'stok_warna_3' => $stok3w,
              'stok_warna_4' => $stok4w,
              'stok_warna_5' => $stok5w,
              'stok_warna_6' => $stok6w,
              'stok_warna_7' => $stok7w,
              'stok_warna_8' => $stok8w,
            ];
              // $this->db->insert('stok_warna_content', $stok_warna); 
          
          }else{
			    $msg = [
                'err' => validation_errors()
			    ];
		    }

		    echo json_encode($msg);

		    
  
		}
		
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
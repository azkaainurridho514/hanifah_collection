<?php

class Home_model extends CI_Model
{
    function getHero()
    {
       return $this->db->get('hero')->row_array();
    }

    function insert()
    {
      $id = $this->input->post('id');
      $title = $this->input->post('title'); 
      $subtitle = $this->input->post('subtitle'); 
      $price = $this->input->post('price'); 
      $category = $this->input->post('category'); 
      $image = $this->input->post('image'); 
      $image1 = $this->input->post('image1'); 
      $image2 = $this->input->post('image2'); 
      $image3 = $this->input->post('image3'); 
      $motif1 = $this->input->post('motif1'); 
      $motif2 = $this->input->post('motif2');
      $motif3 = $this->input->post('motif3');
      $motif4 = $this->input->post('motif4');
      $motif5 = $this->input->post('motif5');
      $motif6 = $this->input->post('motif6');
      $motif7 = $this->input->post('motif7');
      $motif8 = $this->input->post('motif8');
      $warna1 = $this->input->post('warna1');
      $warna2 = $this->input->post('warna2');
      $warna3 = $this->input->post('warna3');
      $warna4 = $this->input->post('warna4');
      $warna5 = $this->input->post('warna5');
      $warna6 = $this->input->post('warna6');
      $warna7 = $this->input->post('warna7');
      $warna8 = $this->input->post('warna8');

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
        'image' => 'projects.jpg'
      ];

      $this->db->insert('content', $content);
      
      $image_content = [
        'id_image' => $id,
        'id_content' => $id,
        'image_1' => $image1,
        'image_2' => $image2,
        'image_3' => $image3
      ];
      
      $this->db->insert('image_content', $image_content);
      
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
      
      $this->db->insert('motif_content', $motif_content);
    }

    function edit()
    {
       $nav = $this->input->post('navbar');
       $judul = $this->input->post('judul');
       $subjudul = $this->input->post('subjudul');
       
       $query = "UPDATE hero SET nav_judul='$nav', judul_hero='$judul', sub_judul_hero='$subjudul'";
       $this->db->query($query);
    }

    function getContent()
    {
      $query = "SELECT * FROM content 
                INNER JOIN category
                ON content.id_category = category.id_category
                INNER JOIN image_content
                ON content.id_content = image_content.id_content
                INNER JOIN motif_content
                ON content.id_content = motif_content.id_content
               ";

      return $this->db->query($query)->result_array();
    }

    function deleteContent($id)
    {
      // $query = "DELETE FROM content WHERE id_content = $id";
      // $this->db->query($query);
    }
}
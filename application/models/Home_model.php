<?php

class Home_model extends CI_Model
{
    function getHero()
    {
       return $this->db->get('hero')->row_array();
    }

    function insert()
    {
      $title = $this->input->post(); 
      $subtitle = $this->input->post(); 
      $price = $this->input->post(); 
      $category = $this->input->post(); 
      $motif1 = $this->input->post(); 
      $motif2 = $this->input->post();
      $motif3 = $this->input->post();
      $motif4 = $this->input->post();
      $motif5 = $this->input->post();
      $motif6 = $this->input->post();
      $motif7 = $this->input->post();
      $motif8 = $this->input->post();
      $warna1 = $this->input->post();
      $warna2 = $this->input->post();
      $warna3 = $this->input->post();
      $warna4 = $this->input->post();
      $warna5 = $this->input->post();
      $warna6 = $this->input->post();
      $warna7 = $this->input->post();
      $warna8 = $this->input->post();
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
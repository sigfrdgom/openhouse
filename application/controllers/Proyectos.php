<?php

class Proyectos extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ProyectosModel');
  }

  public function index()
  {
    $proyectos = $this->db->ProyectosModel->findAll();
    $this->load->view('proyectos/index',$proyectos);
    var_dump($proyectos);

  }

}
?>
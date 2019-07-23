<?php

class Proyectos extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ProyectosModel');
  }

  // Para mostrar el index de la entidad
  public function index()
  {
    $proyectos = $this->ProyectosModel->findAll();
    $this->load->view('proyectos/index',$proyectos);
  }

  // Para mostrar la tabla solamente
  public function mostrarTabla(){
    $datos=['proyectos' => $this->ProyectosModel->findAll()];
    $this->load->view('proyectos/tabla',$datos);
  }

  // Para mostrar el formulario solamente
  public function mostrarForm(){
    $this->load->view('proyectos/formulario');
  }
  
  // Para mostrar el formulario con un unico dato
  public function mostrarFormData($id)  
  {
    $datos=['proyectos' => $this->ProyectosModel->findOne($id)];
    $this->load->view('proyectos/formularioData',$datos);
  }

  // Para agregar un registro
  public function agregar()
  {
    $datos=[
      'nombre'=>$_POST['nombre'],
      'descripcion'=>$_POST['descripcion'],
      'cohorte'=>$_POST['cohorte'],
      'nivel'=>$_POST['nivel']
    ];
    $this->ProyectosModel->create($datos);
  }

  // Para actualizar un registro
  public function actualizar()
  {

    $datos=[
      'nombre'=>$_POST['nombre'],
      'descripcion'=>$_POST['descripcion'],
      'cohorte'=>$_POST['cohorte'],
      'nivel'=>$_POST['nivel'],
      'id_proyecto'=>$_POST['id_proyecto'],
    ];

    $this->ProyectosModel->update($datos);
  }

  // Para eliminar un registro
  public function eliminar()
  {
    $datos=[
      'id_proyecto'=>$_POST['id_proyecto']
    ];
    $this->ProyectosModel->delete($datos);
  }

}
?>
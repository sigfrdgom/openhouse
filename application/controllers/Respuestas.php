<?php

class Respuestas extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('RespuestasModel');
  }

  // Para mostrar el index de la entidad
  public function index()
  {
    $respuestas = $this->RespuestasModel->findAll();
    $this->load->view('respuestas/index',$respuestas);
  }

  // Para mostrar la tabla solamente
  public function mostrarTabla(){
    $datos=['respuestas' => $this->RespuestasModel->findForTable()];
    $this->load->view('respuestas/tabla',$datos);
  }

  // Para mostrar el formulario solamente
  public function mostrarForm(){
    $this->load->view('respuestas/formulario');
  }
  
  // Para mostrar el formulario con un unico dato
  public function mostrarFormData($id)  
  {
    $datos=['respuestas' => $this->RespuestasModel->findOne($id)];
    $this->load->view('respuestas/formularioData',$datos);
  }

  // Para agregar un registro
  public function agregar()
  {
    $datos=[
      'id_proyecto'=>$_POST['id_proyecto'],
      'id_pregunta'=>$_POST['id_pregunta'],
      'calificacion'=>$_POST['calificacion'],
    ];
    $this->RespuestasModel->create($datos);
  }

  // Para actualizar un registro
  public function actualizar()
  {

    $datos=[
      'id_proyecto'=>$_POST['id_proyecto'],
      'id_pregunta'=>$_POST['id_pregunta'],
      'calificacion'=>$_POST['calificacion'],
      'id_respuesta'=>$_POST['id_respuesta'],
    ];

    $this->RespuestasModel->update($datos);
  }

  // Para eliminar un registro
  public function eliminar()
  {
    $datos=[
      'id_respuesta'=>$_POST['id_respuesta']
    ];
    $this->RespuestasModel->delete($datos);
  }

}
?>
<?php

class Preguntas extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('PreguntasModel');
  }

  // Para mostrar el index de la entidad
  public function index()
  {
    // $Preguntas = $this->PreguntasModel->findAll();
    $this->load->view('Preguntas/index');
  }

  // Para mostrar la tabla solamente
  public function mostrarTabla(){
    $datos=['preguntas' => $this->PreguntasModel->findAll()];
    $this->load->view('preguntas/tabla',$datos);
  }

  // Para mostrar el formulario solamente
  public function mostrarForm(){
    $this->load->view('preguntas/formulario');
  }
  
  // Para mostrar el formulario con un unico dato
  public function mostrarFormData($id)  
  {
    $datos=['preguntas' => $this->PreguntasModel->findOne($id)];
    $this->load->view('preguntas/formularioData',$datos);
  }

  // Para agregar un registro
  public function agregar()
  {
    $datos=[
      'pregunta'=>$_POST['pregunta'],
      'categoria'=>$_POST['categoria'],
    ];
    $this->PreguntasModel->create($datos);
  }

  // Para actualizar un registro
  public function actualizar()
  {

    $datos=[
      'pregunta'=>$_POST['pregunta'],
      'categoria'=>$_POST['categoria'],
      'id_pregunta'=>$_POST['id_pregunta'],
    ];

    $this->PreguntasModel->update($datos);
  }

  // Para eliminar un registro
  public function eliminar()
  {
    $datos=[
      'id_pregunta'=>$_POST['id_pregunta']
    ];
    $this->PreguntasModel->delete($datos);
  }

}
?>
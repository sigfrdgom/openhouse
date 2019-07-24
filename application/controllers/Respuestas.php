<?php

class Respuestas extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('RespuestasModel');
    $this->load->model('ProyectosModel');
    $this->load->model('PreguntasModel');
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
    $preguntas=$_POST['idpregunta'];
    $proyecto =$_POST['id_proyecto'];
    var_dump($preguntas);
      echo "<br>";
    // Lee los datos y ingresa las respuestas en la bd
    foreach ($preguntas as $key) {

      $var = "radio-".$key;
      $calificacion= $_POST[$var];
    
      $datos=[
        'id_proyecto'=>$proyecto,
        'id_pregunta'=>$key,
        'calificacion'=>$calificacion,
      ];
      var_dump($datos);
      echo "<br>";
      // Aca ingresa
      $this->RespuestasModel->create($datos);
    }
    
    header("Location: ".base_url());
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

  // Para la funcionabilidad
  public function mostrarProyectos(){
    $datos=['proyectos' => $this->ProyectosModel->findAll()];
    $this->load->view('main/selectCurso',$datos);
  }

  public function mostrarCuestionario(){
    $datos=['preguntas' => $this->PreguntasModel->findAll()];
    $this->load->view('main/cuestionario',$datos);
  }
}
?>

<!-- SELECT pro.nombre, AVG(r.calificacion) as ranking FROM respuestas r INNER JOIN preguntas p ON r.id_pregunta=p.id_pregunta INNER JOIN proyectos pro ON r.id_proyecto=pro.id_proyecto WHERE p.categoria != "COMENTARIO" -->
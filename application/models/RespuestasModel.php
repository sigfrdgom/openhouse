<?php
class RespuestasModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  // Funciones READ
  public function findAll()
  {
    return $this->db->query("SELECT * FROM respuestas;")->result();
  }

  public function findForTable()
  {
    return  $this->db->query("SELECT r.id_respuesta, r.id_proyecto, p.nombre, r.id_pregunta, q.pregunta, r.calificacion FROM respuestas r, proyectos p, preguntas q WHERE r.id_proyecto=p.id_proyecto AND r.id_pregunta=q.id_pregunta;")->result();
  }

  public function findOne($id)
  {
    return $this->db->where("id_respuesta",$id)->get("respuestas")->result();
  }

  public function create($datos)
  {
    $sql="INSERT INTO  respuestas  ( id_respuesta ,  id_proyecto ,  id_pregunta ,  calificacion ) VALUES (NULL, ?, ?, ?, ?);";
    $this->db->query($sql,$datos);
  }

  public function update($datos)
  {
    $sql="UPDATE  respuestas  SET id_proyecto = ? , id_pregunta  = ? , calificacion = ? WHERE  id_respuesta  = ? ;";
    $this->db->query($sql,$datos);
  }

  public function delete($datos)
  {
    $sql="DELETE FROM respuestas WHERE id_respuesta = ? ;";
    $this->db->query($sql,$datos);
  }
}

?>
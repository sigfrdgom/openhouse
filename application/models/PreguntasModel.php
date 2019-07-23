<?php
class preguntasModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  // Funciones READ
  public function findAll()
  {
    return $this->db->query("SELECT * FROM preguntas;")->result();
  }

  public function findOne($id)
  {
    return $this->db->where("id_pregunta",$id)->get("preguntas")->result();
  }

  // Funcion create
  public function create($datos)
  {
    $sql="INSERT INTO  preguntas  ( id_pregunta ,  pregunta, categoria ) VALUES (NULL, ?, ?);";
    $this->db->query($sql,$datos);
  }

  // Funcion upodate
  public function update($datos)
  {
    $sql="UPDATE  preguntas  SET pregunta = ? , categoria  = ?  WHERE  id_pregunta  = ? ;";
    $this->db->query($sql,$datos);
  }

  // Funcion delete
  public function delete($datos)
  {
    $sql="DELETE FROM preguntas WHERE id_pregunta = ? ;";
    $this->db->query($sql,$datos);
  }
}

?>
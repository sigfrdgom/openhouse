<?php
class ProyectosModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  // Funciones READ
  public function findAll()
  {
    return $this->db->query("SELECT * FROM proyectos;")->result();
  }

  public function findOne($id)
  {
    return $this->db->where("id_proyecto",$id)->get("proyectos")->result();
  }

  public function create($datos)
  {
    $sql="INSERT INTO  proyectos  ( id_proyecto ,  nombre ,  descripcion ,  cohorte ,  nivel ) VALUES (NULL, ?, ?, ?, ?);";
    $this->db->query($sql,$datos);
  }

  public function update($datos)
  {
    $sql="UPDATE  proyectos  SET nombre = ? , descripcion  = ? , cohorte = ?, nivel = ? WHERE  id_proyecto  = ? ;";
    $this->db->query($sql,$datos);
  }

  public function delete($datos)
  {
    $sql="DELETE FROM proyectos WHERE id_proyecto = ? ;";
    $this->db->query($sql,$datos);
  }
}

?>
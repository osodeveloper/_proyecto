<?php
class Noticia_model extends CI_Model {

  function __construct() {
    // Call the CI_Model constructor
    parent::__construct();
    $this->load->database();
  }
  public function noticias_index(){
    $query = $this->db->query('select id_noticia, titulo,portada, fecha from noticias where estado = "OK" order by id_noticia desc LIMIT 3');
    if ($query->num_rows() > 0) {
      return $query->result();
    }else {
      return false;
    }
  }

  public function news_all() {
    $query = $this->db->query('select id_noticia, titulo,portada, contenido, fecha from noticias where estado = "OK"');
    return $query->result();
  }
  public function ver($id) {
    $query = $this->db->query("select * from noticias where id_noticia = '$id' and estado = 'OK'");
    if ($query->num_rows() > 0) {
      $datos['noticia'] = $query->result();
      //galeria
      $query = $this->db->query("select url from galeria where id_noticia = '$id'");
      if ($query->num_rows() > 0) {
        $datos['galeria'] = $query->result();
      }else {
        $datos['galeria'] = false;
      }
      return $datos;
    }else {
      redirect('noticias');
    }
  }

  public function news_add($datos) {
    $array = array(
      'titulo' => $datos['titulo'],
      'contenido' => $datos['noticia'],
      'fecha' => $datos['fecha'],
      'estado' => $datos['estado'],
      'portada' => $datos['portada'],
      'user' => $datos['user']
    );
    $this->db->insert('noticias', $array);
    if ($this->db->affected_rows()) {
      $imagenes = $datos['galeria'];
      $id = $this->db->insert_id();
      foreach ( $imagenes as $value) {
        $array = array(
          'id_noticia' => $id,
          'url' => $value
        );
        $this->db->insert('galeria', $array);
      }
      return true;
    }else {
      return false;
    }
  }


}
 ?>

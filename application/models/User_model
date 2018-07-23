<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Model extends CI_Model {

  public function __construct(){
    parent::__construct();
  }

  private  $_columns  =  array(
    'usu_id' => 0,
    'usu_correo' => '',
    'usu_pass' => ''
  );

  public function get($attr){
    return $this->_columns[$attr];
  }

  public function create($row){
    $usuario =  new User_Model();
    foreach ($row as $key => $value){
      $usuario->_columns[$key] = $value;
    }
    return $usuario;
  }

  public function setColumns ($row = null){
    foreach ($row as $key => $value) {
      $this->columns[$key] = $value;
    }
  }

  public function insert(){
    $this->db->insert('usuario',$this->_columns);
  }

  function update($id,$email,$pass){
    $idusu = $id;
    $this->load->database();
    $data =  array(
      'usu_correo' => $user,
      'usu_pass' => $pass
    );
    $this->db->where('usu_id',$idusu);
    $this->db->update('usuario',$data); 
  }

  public function delete($id){
    $sql="delete from usuario WHERE usu_id=".$id;
    $query = $this->db->query($sql);
    return 1;
  }

  public function findAll(){
    $result=array();
    $consulta = $this->db->get('usuario');
    foreach ($consulta->result() as $row) {
      $result[] = $this->create($row);
    }
    return $result;
  }

  public function findById($id){
    $query = $this ->db-> get_where('usuario',array('usu_id'=>$id));
    if($query -> num_rows() >= 1){
      $row = $query->row_object();
      $user = $this->create($row);
      return $user; 
    }
    return false;
  }

  function login($email, $clave){    
    $user = null;
    $result = $this->db->get_where('usuario',array('usu_correo'=>$email));
    if ($result->num_rows() > 0) {
      $row = $result->row_object();
      if($row->adm_pass == $clave){
        $user = $this->create($row);
      }
    }
    return $user;
  }

  public function save($email,$clave){
    $this->load->database();    
    $redes = array(
      'usu_id' => null,
      'usu_correo'=> $userName,
      'usu_pass'=> $clave
    );
    $this->db->insert('usuario', $redes); 
  }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormaPago_model extends CI_Model {
   private $_columns = array(
      'for_id' => 0,
		'for_abono' => 0,
		'for_fecha' => '',
		'for_numero' => 0,
		'for_tipo' => 0
	);
	protected static $_table = 'Proveedor';

	public function __construct(){
	}
	
   public function findAll($where = array()) {
      $this->load->database();
      $result = null;
      $res    = $this->db->get_where(self::$_table , $where);
      if ($res->num_rows() > 0) {
         foreach ($res->result() as $value) {
            $result[] = $this->create($value);
         }
      }
      return $result;
   }
   
   public function getRequired() {
      $requiredFields = array(
      );
      return $requiredFields;
   }
   
   public function isNew() {
      return $this->_columns['for_id'] == 0;
   }
   
   public function validate() {
      $emptyCollumn = array();
      foreach ($this->_columns as $key => $value) {
         if ((is_null($value) || empty(str_replace(' ', "", $value))) && in_array($key, $this->getRequired())) {
            $emptyCollumn[] = $key;
         }
      }
      return $emptyCollumn;
   }
   
   public function setColumns($row = null) {
      foreach ($row as $key => $value) {
         $this->_columns[$key] = $value;
      }
   }
   
   public function set($key, $value) {
      $this->_columns[$key] = $value;
   }
   
   public function findById($id = null) {
      $id = intval($id);
      $this->load->database();
      $res    = $this->db->get_where(self::$_table, array('for_id' => $id));
      $result = null;
      if ($res->num_rows() == 1) {
         $result = $this->create($res->row_object());
      }
      return $result;
   }
   
   public function get($attr) {
      return $this->_columns[$attr];
   }
   /*
   public function create($row) {
      $proveedor = new Proveedor_model();
      $proveedor->setColumns($row);
      return $proveedor;
   }
   */
   public function save() {
      try {
         $this->load->database();
         if ($this->_columns['for_id'] == 0 || is_null($this->_columns['for_id'])) {
            $this->db->insert(self::$_table, $this->_columns);
            $this->_columns['for_id'] = $this->db->insert_id();
         } else {
            $this->db->where('for_id', $this->_columns['for_id']);
            $this->db->update(self::$_table, $this->_columns);
         }
      } catch (Exception $e) {
         echo "se produjo una excepcion del tipo".$e->getMessage();
      }
   }
   
   public function delete(){             
   }
   
   public function toArray() {
      return get_object_vars($this);
   }

   public function create($row){
      $formapago =  new Factura_model();
      foreach ($row as $key => $value){
         $formapago->_columns[$key] = $value;
      }
      return $formapago;
   }

   public function insert(){
      $this->db->insert('todonorte',$this->_columns);
      $this->_columns['for_id'] = $this->db->insert_id();
   }
}
?>
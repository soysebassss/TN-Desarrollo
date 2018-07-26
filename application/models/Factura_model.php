<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Factura_model extends CI_Model {

   private $_columns = array(
		'fac_numero' => 0,
		'fac_valorNeto' => 0,
		'fac_iva' => 0,
		'fac_glosa' => '',
		'fac_for_id' => 0
	);
	protected static $_table = 'Factura';

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
      return $this->_columns['fac_numero'] == 0;
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
      $res    = $this->db->get_where(self::$_table, array('fac_numero' => $id));
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
      $factura = new Factura_model();
      $factura->setColumns($row);
      return $factura;
   }
   */
   public function save() {
      try {
         $this->load->database();
         if ($this->_columns['fac_numero'] == 0 || is_null($this->_columns['fac_numero'])) {
            $this->db->insert(self::$_table, $this->_columns);
            $this->_columns['fac_numero'] = $this->db->insert_id();
         } else {
            $this->db->where('fac_numero', $this->_columns['fac_numero']);
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
      $factura =  new Factura_model();
      foreach ($row as $key => $value){
         $factura->_columns[$key] = $value;
      }
      return $factura;
   }

   public function insert(){
      $this->db->insert('todonorte',$this->_columns);
      $this->_columns['fac_numero'] = $this->db->insert_id();
   }
}
?>
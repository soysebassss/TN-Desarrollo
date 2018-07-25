<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra_model extends CI_Model {
private $_columns = array(
		'com_id' => 0,
		'com_codigoProducto' => 0,
		'com_iva' => 0,
		'com_valorTotal' => 0,
		'com_numeroFactura' => 0,
		'com_recargo' => 0,
		'com_pro_id' => 0,
		'com_for_id' => 0
	);
	protected static $_table = 'Compra';

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
                return $this->_columns['com_id'] == 0;
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
                $res    = $this->db->get_where(self::$_table, array('com_id' => $id));
                $result = null;
                if ($res->num_rows() == 1) {
                        $result = $this->create($res->row_object());
                }
                return $result;
        }
        public function get($attr) {
                return $this->_columns[$attr];
        }

        public function create($row) {
                $compra = new Compra_model();
                $compra->setColumns($row);
                return $compra;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['com_id'] == 0 || is_null($this->_columns['com_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['com_id'] = $this->db->insert_id();
                        } else {
                                $this->db->where('com_id', $this->_columns['com_id']);
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

}
?>
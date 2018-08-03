<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CostoVariable_model extends CI_Model {
private $_columns = array(
		'cos_varId' => 0,
		'cos_papel' => 0,
		'cos_tinta' => 0
	);
	protected static $_table = 'CostosVariables';

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
                return $this->_columns['cos_varId'] == 0;
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
                $res    = $this->db->get_where(self::$_table, array('cos_varId' => $id));
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
                $costoVariable = new CostoVariable_model();
                $costoVariable->setColumns($row);
                return $costoVariable;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['cos_varId'] == 0 || is_null($this->_columns['cos_varId'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['cos_varId'] = $this->db->insert_id();
                        } else {
                                $this->db->where('cos_varId', $this->_columns['cos_varId']);
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
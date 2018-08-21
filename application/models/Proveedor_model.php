<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model {

	private $_columns = array(
		'pro_id' => 0,
		'pro_nombre' => '',
		'pro_apellidos' => '',
		'pro_rut' => '',
		'pro_dv' => '',
		'pro_direccion' => '',
		'pro_comuna' => '',
		'pro_banco' => ''
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
        public function findByName($nombre){
        $this->load->database();
        $query = $this->db->like('pro_nombre',$nombre);
        $query = $this->db->get('Proveedor');
        $result = null;
        if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                        $result[] = $this->create($row);
                }
        }else{
                $result[] =  "no existen clientes";
        }
        return $result;
        }
        public function getRequired() {
                $requiredFields = array(
                );
                return $requiredFields;
        }
        public function isNew() {
                return $this->_columns['pro_id'] == 0;
        }
        // metodo para obtener la comuna del cliente
        public function getComuna() {
                return self::$comuna[$this->_columns['cli_comuna']];
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
                $res    = $this->db->get_where(self::$_table, array('pro_id' => $id));
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
                $proveedor = new Proveedor_model();
                $proveedor->setColumns($row);
                return $proveedor;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['pro_id'] == 0 || is_null($this->_columns['pro_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['pro_id'] = $this->db->insert_id();
                        } else {
                                $this->db->where('pro_id', $this->_columns['pro_id']);
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
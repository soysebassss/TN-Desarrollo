<?php
class Cliente_model extends CI_Model {

        //las mismas columnas de la base de datos
        private $_columns = array(
                'cli_id'=>0,
                'cli_nombre'=>'',
                'cli_apellidos'=>'',
                'cli_rut'=>'',
                'cli_dv'=>0,
                'cli_direccion'=>'',
                'cli_telefono'=>'',
                'cli_giro'=>'',
                'cli_nombreFantasia'=>'',
                'cli_estado'=>0,
                'cli_correo'=>''

        );
        protected static $_table = 'Cliente';

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
        $query = $this->db->where('cli_nombrefantasia',$nombre);
        $query = $this->db->get('Cliente');
        $result = null;
        if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                        $result[] = $this->create($row);
                }
        }else{
                echo "no existen clientes";
        }
        return $result;
        }
        public function getRequired() {
                $requiredFields = array(

                );
                return $requiredFields;
        }
        public function isNew() {
                return $this->_columns['cli_id'] == 0;
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
                $res    = $this->db->get_where(self::$_table, array('cli_id' => $id));
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
                $cliente = new Cliente_model();
                $cliente->setColumns($row);
                return $cliente;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['cli_id'] == 0 || is_null($this->_columns['cli_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['cli_id'] = $this->db->insert_id();
                                echo $this->_columns['cli_id'];
                        } else {
                                $this->db->where('cli_id', $this->_columns['cli_id']);
                                $this->db->update(self::$_table, $this->_columns);
                                echo 'DOS';
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
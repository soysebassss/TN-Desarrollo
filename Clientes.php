<?php
	print_r($_POST['valor1']);
	exit();
	protected static $_table = ' Cliente';

	$this->load->database();
	$result = null;
	$res    = $this->db->get_where(self::$_table , $where);
	if ($res->num_rows() > 0) {
	        foreach ($res->result() as $value) {
	                $result[] = $this->create($value);
	        }
	}
	var_dumb(jason_encode($result)); 
}
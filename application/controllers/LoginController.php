<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Usuario_model','user',true);
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('login',$datitos,FALSE);
	}

	public function checkLoginUser(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
   		$this->form_validation->set_rules('clave', 'Contraseña', 'required|callback_verifyUser');
   		if($this->form_validation->run() == false){
   		 	$this->session->set_flashdata('alert', 'Email o Contraseña Incorrecta.');
   		 	$this->load->view('login.php',$datitos,FALSE);
		}else{
   		 	$email = $this->input->post('email');
			$clave = $this->input->post('clave');
			$encriptado = sha1($clave);
			$a=$this->user->login($email,$encriptado);
			$buena = array(
				'iduser'=>$a->get('usu_id'),
				'correo' => $a->get('usu_correo'),
				'login'=>TRUE
			);
			$id = $a->get('adm_id');

			$this->session->set_userdata($buena);
			$user = $this->user->findById($id);
			$_SESSION['user'] = $user;
			$datitos['user'] = $user;
			$datitos['x'] = $buena;
			redirect('Welcome/index','refresh',$datitos);
   		} 
	}

	public function verifyUser(){
		$email = $this->input->post('email');
		$clave = $this->input->post('clave');
		$encriptado = sha1($clave);		
		if($email == ''){
			$this->session->set_flashdata('alert', 'Ingresar E-mail.');
			redirect('LoginController/index','refresh');
		}
		if($clave == ''){
			$this->session->set_flashdata('alert', 'Ingresar Clave');
			redirect('LoginController/index','refresh');
		}
		if($a=$this->user->login($email, $encriptado)){
			return true;
		}else{
			$this->form_validation->set_message('verifyUser','Correo o Contraseña Incorrecta, Por favor intentar de nuevo');
			return false; 	
		}
	}

	public function logoutUser(){
		$this->session->sess_destroy();
		redirect('LoginController/index','refresh');
	}
}
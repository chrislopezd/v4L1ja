<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Correo extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		//$this->load->model('modelo_inicio');
	}
	
	public function index(){		
		$this->load->library("email");
		//configuracion para el mail
		$configMail= array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.gmail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'validaciones.sistema@gmail.com',
		    'smtp_pass' => 'S1234567*',
		    'mailtype' => 'html',
		    'charset' => 'utf-8',
		    'newline' => "\r\n"
		);
		$this->email->initialize($configMail);
		$correo = "christian.lopezdiaz@gmail.com";
		$copia = "jorge.cebada@gmail.com";
		$subject = "Sistema de Validaciones | Archivo";
		$mensaje = "Se adjunta el archivo.";
		$this->email->from('sistema.validaciones@gmail.com','Sistema de Validaciones');
		$this->email->to($correo);
		$this->email->cc($copia); 

		$this->email->subject($subject);
		$this->email->message($mensaje);
		if($this->email->send()){
		}	
		else{
			echo $this->email->print_debugger();
		}
	}	
}
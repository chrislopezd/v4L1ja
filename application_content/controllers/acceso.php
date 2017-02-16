<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Acceso extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->smarty->assign("lang", "spanish");
		$this->smarty->assign("raiz", INDEXURL);
		$this->smarty->assign("title", 'Encuesta');
		$this->load->model('mgenerico');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('string');
	}
	/*FUNCIONES*/
	private $modaInicial = array('EDI','DDI');
	private $modaPreescolar = array('EJN','DJN');
	private $modaPrimaria = array('EPR','DPR','PPR');
	private $modaIndigena = array('DIN','DCC','DPB');
	private $modaEspecial = array('EML','DML','FUA');
	private $modaSecundaria = array('DST','EST','SES','DES','DSN','EES','ESN','ETV','PES');
	public function nivelModa($nivel){
		switch ($nivel) {
			case 'INICAL':
				$nivel = $this->modaInicial;
				break;
			case 'PREESCOLAR':
				$nivel = $this->modaPreescolar;
				break;
			case 'PRIMARIA':
				$nivel = $this->modaPrimaria;
				break;
			case 'INDÍGENA':
				$nivel = $this->modaIndigena;
				break;
			case 'ESPECIAL':
				$nivel = $this->modaEspecial;
				break;
			case 'SECUNDARIA':
				$nivel = $this->modaSecundaria;
				break;
		}
		return $nivel;
	}
	public function removeText($txt){
 		return trim(str_replace('\\', '', str_replace("'","",str_replace('"','',trim($txt)))));
 	}
 	public function fechaPhp($fecha){
		if($fecha != ""){
			$_f = explode("-",$fecha);
			return $_f[2]."/".$_f[1]."/".$_f[0];
		}
	}
	public function mayus($str){
		$str = strtoupper($str);
		$str = str_replace("á", "Á", $str);
		$str = str_replace("é", "É", $str);
		$str = str_replace("í", "Í", $str);
		$str = str_replace("ó", "Ó", $str);
		$str = str_replace("ú", "Ú", $str);
		$str = str_replace("ñ", "Ñ", $str);
		return ($str);
	}
	public function fechaMysql($f){
 		$fr = explode("/",$f);
		return $fr[2]."-".$fr[1]."-".$fr[0];
 	}
 	/*END FUNCIONES*/
 	/*TPL'S*/
	public function index(){
		if($this->session->userdata('sv_Idusuario') != false){
			redirect('inicio','');
		}
		$token = $this->utilidades->generaToken();
		$d['token'] = $token['token'];
		$d['msg'] = '';
		$d['rem'] = 0;
		$this->smarty->assign("title", 'Iniciar sesión');
		$this->smarty->view("loggin.tpl",$d);
	}
	public function inicio(){
		if($this->session->userdata('sv_Idusuario') == false){
			redirect('loggin','refresh');
		}
		$token = $this->utilidades->generaToken();
		$d['token'] = $token['token'];
		$d['sp_idUSer'] = $this->session->userdata('sv_Idusuario');
		$d['sp_name'] = $this->session->userdata('sv_usuario');
		$d['cedes'] = $this->mgenerico->getCatCedes();
		$d['choferes'] = $this->mgenerico->getCatChoferes();
		$d['estatus'] = $this->mgenerico->getCatEstatus();

		$d['active'] = 'inicio';
		$this->smarty->assign("title", 'Inicio');
		$this->smarty->view("inicio.tpl",$d);
	}
	public function verCaptcha(){
		if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['captcha']) && $_POST['captcha'] == $this->session->userdata('st_Captcha')){
			echo "Passed!";
			$this->session->unset_userdata(array('st_Captcha'=> NULL,));
		}
		else if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['captcha'])){
			echo "Failed!";
		}
		else{
			$rand = rand(0,4);
			$this->session->set_userdata(array('st_Captcha' => $rand));
			echo $rand;
		}
	}
	public function getHora(){
		if($_POST['id'] == 1){
			echo $this->mgenerico->now();
		}
	}
	public function validarInicioSession(){
		$token = $this->utilidades->generaToken();
		$d = array();
		$d['token'] = $token['token'];
		if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['captcha']) && $_POST['captcha'] == $this->session->userdata('st_Captcha')){
			$this->session->unset_userdata(array('st_Captcha'=> NULL,));
			$user = trim($this->input->post('user', TRUE));
			$pass = trim($this->input->post('pass', TRUE));
			if(strlen($user) > 4 && strlen($pass) > 2){
				$filtrosUser = array('usuario' => $user, 'pass' => $pass);
				$data = array();
				$data = $this->mgenerico->validarLogin($filtrosUser);
				if(count($data) > 0){//El usuario existe y está activo
					$_sesion = array(
					'sv_Idusuario' => $data['id_usuario'],
					'sv_usuario' => $data['usuario'],
					'sv_nombre' => $data['nombre'],
					'sv_area' => $data['area'],
					'sv_tipo' => $data['id_tipo'],
					'sv_logged_in' => true);
					$this->session->set_userdata($_sesion);
					redirect("inicio",'');
				}
				else{//No existe o está inactivo
					$d['msg'] = '<span class="glyphicon glyphicon-exclamation-sign"></span> El USUARIO o CONTRASEÑA no son válidos.';
				}
			}
			else{//Entró mal el formulario
				$d['msg'] = '<span class="glyphicon glyphicon-exclamation-sign"></span> El USUARIO o CONTRASEÑA no son válidos.';
			}
		}
		else{
			$d['msg'] = '<span class="glyphicon glyphicon-exclamation-sign"></span> La imagen del captcha es incorrecta.';
		}
		$d['rem'] = 1;
		$this->smarty->assign("title", 'Iniciar sesión');
		$this->smarty->view('loggin.tpl',$d);
	}
	/*END ADMIN*/
	public function errorCsrf(){
		$token = $this->utilidades->generaToken();
		$d = array();
		$d['token'] = $token['token'];
		$d['rem'] = 1;
		$d['msg'] = '<span class="glyphicon glyphicon-exclamation-sign"></span> <strong> El token de seguridad ha caducado:</strong><br/>Esto se puede deber a que el tiempo de inactividad fue prolongado. Para continuar vuelva a ingresar sus datos.';
		$this->smarty->view('loggin.tpl',$d);
	}
	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect('', 'refresh');
    }
}
?>
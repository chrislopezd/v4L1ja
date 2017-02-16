<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->smarty->assign("lang", "spanish");
		$this->smarty->assign("raiz", INDEXURL);
		$this->load->model('mgenerico');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('string');
	}

	public function index(){
		if($this->session->userdata('sv_Idusuario') == false){
			//redirect('loggin','refresh');
		}
	}
	public function fechaPhp($fecha){
		if($fecha != ""){
			$_f = explode("-",$fecha);
			return $_f[2]."/".$_f[1]."/".$_f[0];
		}
	}
	public function newSolicitud(){
		if($this->session->userdata('sv_Idusuario') == false){
			redirect('loggin','refresh');
		}
		//echo "<pre>";print_r($this->session->userdata);die();
		$token = $this->utilidades->generaToken();
		$d['token'] = $token['token'];
		$d['edit'] = 0;
		$d['idSol'] = 0;
		$d['idSolTxt'] = '';
		$d['area_destino'] = '0';
		$d['destinatario'] = '0';
		$d['usuario_destino'] = '';
		$d['detalle_envio'] = '';
		$d['observaciones'] = '';
		$d['sp_idUSer'] = $this->session->userdata('sv_Idusuario');
		$d['sp_name'] = $this->session->userdata('sv_usuario');
		$d['perfil'] = $this->session->userdata('sv_tipo');
		$d['cedes'] = $this->mgenerico->getCatCedes();
		$d['fecha'] = $this->mgenerico->now2();
		$d['url'] = 'guardarDatos';
		$d['active'] = 'nuevaSolicitud';
		$this->smarty->assign("title", 'Nueva solicitud');
		$this->smarty->view("formulario.tpl",$d);
	}
	public function editSolicitud(){
		if(!isset($_POST['ids'])){redirect('inicio','');}
		$ids = (int) $this->input->post("ids");
		if($ids > 0){
			$token = $this->utilidades->generaToken();
			$d['token'] = $token['token'];
			$d['DATA'] = $this->mgenerico->editaSolicitud($ids);
			$d['edit'] = 1;
			$d['idSol'] = $d['DATA']->id_sol;
			$d['idSolTxt'] = $d['DATA']->folio;
			$d['area_destino'] = $d['DATA']->area_destino;
			$d['destinatario'] = $d['DATA']->destinatario;
			$d['usuario_destino'] = $d['DATA']->usuario_destino;
			$d['fecha'] = $d['DATA']->fecha;
			$d['detalle_envio'] = $d['DATA']->detalle_envio;
			$d['observaciones'] = $d['DATA']->observaciones;
			$d['sp_idUSer'] = $this->session->userdata('sv_Idusuario');
			$d['sp_name'] = $this->session->userdata('sv_usuario');
			$d['perfil'] = $this->session->userdata('sv_tipo');
			$d['cedes'] = $this->mgenerico->getCatCedes();
			$info = $this->mgenerico->getCatAreas($d['DATA']->area_destino);
			$d['optiones'] = $info['DATOS'];
			$in = $this->mgenerico->getCatUsuariosAreas($d['DATA']->destinatario);
			$d['usuariosAreas'] =  $in['DATOS'];
			$d['url'] = 'editarDatos';
			$d['active'] = 'nuevaSolicitud';
			$d['bread'] = "Editar solicitud";
			$this->smarty->assign("title", 'Editar solicitud');
			$this->smarty->view("formulario.tpl",$d);
		}
	}
	public function getOption(){
		if($this->input->is_ajax_request()){
			$id = $this->input->post("id");
			$info = $this->mgenerico->getCatAreas($id);
			$d['optiones'] = $info['DATOS'];
			echo json_encode(array('error' => 0,'HTML'=>$this->smarty->view('load/option.tpl', $d, TRUE)));
		}
	}
	public function getOptionUsuario(){
		if($this->input->is_ajax_request()){
			$id = $this->input->post("id");
			$info = $this->mgenerico->getCatUsuariosAreas($id);
			$d['optiones'] = $info['DATOS'];
			echo json_encode(array('error' => 0,'HTML'=>$this->smarty->view('load/optionUsuario.tpl', $d, TRUE)));
		}
	}
	public function saveDataSolicitud(){
		if($this->input->is_ajax_request()){
			$ids = $this->mgenerico->saveSolicitud($_POST,0);
			echo $ids;
		}
	}
	public function editDataSolicitud(){
		if($this->input->is_ajax_request()){
			$folio = (int)$this->input->post("idSol");
			$ids = $this->mgenerico->saveSolicitud($_POST,$folio);
			echo $ids;
		}
	}
	public function verEstatus(){
		if($this->input->is_ajax_request()){
			$ids = (int)$this->input->post("ids");
			$res = $this->mgenerico->verificarEstatuSol($ids);
			echo $res;
		}
	}
	public function viewDetalle(){
		if($this->input->is_ajax_request()){
			$ids = (int)$this->input->post("ids");
			$data= $this->mgenerico->editaSolicitudPDF($ids);
			$d['folio'] = $data->folio;
			$d['fecha'] = $data->fecha;
			$d['area_destino'] = $data->area_destino;
			$d['destinatario'] = $data->destinatario;
			$d['usuario_destino'] = $data->usuario_destino;
			$d['detalle_envio'] = $data->detalle_envio;
			$d['observaciones'] = $data->observaciones;
			echo json_encode(array('error' => 0,'HTML'=>$this->smarty->view('load/detalle.tpl', $d, TRUE)));
		}
	}
	public function loadDataGrid(){
		$page = (isset($_POST['page']))?$_POST['page'] : 1;
		$limit = (isset($_POST['rows']))?$_POST['rows'] : 25;
		$sidx = (isset($_POST['sidx']) and $_POST['sidx'] != "")?$_POST['sidx'] : 's.fecha_captura';
		$sord = (isset($_POST['sidx']) and $_POST['sidx'] != "")?$_POST['sord'] : 'DESC';
		if(!$sidx) $sidx =1;
		$start = $limit * $page - $limit;
		$start = ($start < 0) ? 0 : $start;
		$where = "";
		if(isset($_POST['fechai']) and strlen(trim($_POST['fechai'])) == 10 && isset($_POST['fechaf']) and strlen(trim($_POST['fechaf'])) == 10){
			$fi = explode("/",$_POST['fechai']);
	        $_POST['fechai'] = $fi[2]."-".$fi[1]."-".$fi[0];
			$ff = explode("/",$_POST['fechaf']);
	        $_POST['fechaf'] = $ff[2]."-".$ff[1]."-".$ff[0];
			$where .= " AND s.fecha BETWEEN '{$_POST['fechai']}' AND '{$_POST['fechaf']}'";
		}
		if(isset($_POST['estatus']) and strlen(trim($_POST['estatus'])) > 0){
			$where .= " AND s.estatus = '{$_POST['estatus']}'";
		}
		if(isset($_POST['chofer']) and strlen(trim($_POST['chofer'])) > 0){
			$where .= " AND s.id_chofer = '{$_POST['chofer']}'";
		}
		if(isset($_POST['faread']) and strlen(trim($_POST['faread'])) > 0){
			$where .= " AND s.destinatario = '{$_POST['faread']}'";
		}
		if(isset($_POST['fechae']) and strlen(trim($_POST['fechae'])) > 0){
			$ff = explode("/",$_POST['fechae']);
	        $_POST['fechae'] = $ff[2]."-".$ff[1]."-".$ff[0];
			$where .= " AND s.fecha_envio = '{$_POST['fechae']}'";
		}
		if(isset($_POST['ffechar']) and strlen(trim($_POST['ffechar'])) > 0){
			$ff = explode("/",$_POST['ffechar']);
	        $_POST['ffechar'] = $ff[2]."-".$ff[1]."-".$ff[0];
			$where .= " AND s.fecha_recepcion = '{$_POST['ffechar']}'";
		}
		if($_POST['sidx'] == "folio"){$sidx = "folio";}
		if($_POST['sidx'] == "fecha"){$sidx = "s.fecha";}
		if($_POST['sidx'] == "fecha_envio"){$sidx = "s.fecha_envio";}
		if($_POST['sidx'] == "area_destino"){$sidx = "area_destino";}
		if($_POST['sidx'] == "destinatario"){$sidx = "destinatario";}
		if($_POST['sidx'] == "usuario_destino"){$sidx = "usuario_destino";}
		if($_POST['sidx'] == "estatus"){$sidx = "estatus";}

		$count = $this->mgenerico->getDataGrid('c',$where,"","","");
		$total_pages = ( $count > 0 ) ?	ceil($count/$limit) : 0;
		if($page > $total_pages){
			$page=$total_pages;
		}
		$orden = "ORDER BY {$sidx} {$sord} ";
		$data = $this->mgenerico->getDataGrid('r',$where,$start,$limit,$orden);
		$r = new stdClass();
		$r->page = $page;
		$r->total = $total_pages;
		$r->records = $count;
		foreach($data as $k => $row){
			$r->rows[$k]['id']=$row['id_sol'];
			$r->rows[$k]['cell']=array($row['id_sol'],
				"<a onclick='detalleSolicitud({$row['id_sol']});' title='Ver detalle' style='color:#228EF1;' class='manita'><span class='glyphicon glyphicon-eye-open'></span>&nbsp;&nbsp;{$row['folio']}</a>",$row['fecha'],$row['fecha_envio'],$row['usuario'],$row['area_destino'],$row['destinatario'],$row['usuario_destino'],$row['detalle_envio'],$row['observaciones'],$row['estatus']);
		}

		echo json_encode($r);
	}
	public function listadoDetail(){
		$r = array();
		if(isset($_POST['id']) and strlen($_POST['id']) > 0){
			$_POST['id'] = str_replace('tr_', '', $_POST['id']);
			$page = (isset($_POST['page']))?$_POST['page'] : 1;
			$limit = (isset($_POST['rows']))?$_POST['rows'] : 200;
			$count = $this->mgenerico->getDataGridDetalle('c',intval($_POST['id']));
			$total_pages = ( $count > 0 ) ?	ceil($count/$limit) : 0;
			if($page > $total_pages){$page=$total_pages;}
			$data = $this->mgenerico->getDataGridDetalle('r',intval($_POST['id']));
			$r = new stdClass();
			$r->page = $page;
			$r->total = $total_pages;
			$r->records = $count;
			foreach($data as $k => $row){
				$r->rows[$k]['id']= $row['id_hist_status'];
				$r->rows[$k]['cell']=array($row['usuario'],$row['estatus'],$row['fecha']);
			}
		}
		echo json_encode($r);
	}
	public function downPdf(){
	    $id_sol = (int)$this->input->post("ids");
	    if($id_sol > 0){
	    	$this->load->library('mpdfhtml');
			$id_usuario =  $this->session->userdata('sv_Idusuario');
			$d['datos'] = $this->mgenerico->editaSolicitudPDF($id_sol);
			$d['envia'] = $this->mgenerico->enviaInfoPDF($id_sol);
			$ff = explode("-",$d['datos']->folio);
			$d['f1'] = $ff[0];
			$d['f2'] = $ff[1];
			$d['f3'] = $ff[2];
			$fecha = explode(" ",$this->mgenerico->now());
			//echo "<pre>";print_r($d);die();
			$html = $this->smarty->view('solpdf/solPdf.tpl',$d,TRUE);
			$mpdf=new mPDF();
			$h['cede'] = '';
			$header = $this->smarty->view('solpdf/solPdfHeader.tpl',$h,TRUE);
			$i['PAGENO'] = '{PAGENO}';
			$i['nb'] = '{nb}';
			$footer = $this->smarty->view('solpdf/solPdfFooter.tpl',$i,TRUE);
			$mpdf->SetHTMLHeader($header,'',TRUE);
			$mpdf->SetHTMLFooter($footer,'',TRUE);
			$mpdf->AddPage('P','LETTER','','', 0 , 0 , 0, 5 , 10 , 0, 0);
			$mpdf->WriteHTML($html);
			$nombre = str_replace("/","_",$this->fechaPhp($fecha[0]))."-".str_replace(":","_",$fecha[1]);
			//$mpdf->Output();die();
		    $mpdf->Output('FORMATOS_SOLICITUD['.$nombre.'].pdf','D');
		}
 	}
 	public function downReportPdf(){
	    $where = "";
		if(isset($_POST['fechai']) and strlen(trim($_POST['fechai'])) == 10 && isset($_POST['fechaf']) and strlen(trim($_POST['fechaf'])) == 10){
			$fi = explode("/",$_POST['fechai']);
	        $_POST['fechai'] = $fi[2]."-".$fi[1]."-".$fi[0];
			$ff = explode("/",$_POST['fechaf']);
	        $_POST['fechaf'] = $ff[2]."-".$ff[1]."-".$ff[0];
			$where .= " AND s.fecha BETWEEN '{$_POST['fechai']}' AND '{$_POST['fechaf']}'";
		}
		if(isset($_POST['estatus']) and strlen(trim($_POST['estatus'])) > 0){
			$where .= " AND s.estatus = '{$_POST['estatus']}'";
		}
		if(isset($_POST['chofer']) and strlen(trim($_POST['chofer'])) > 0){
			$where .= " AND s.id_chofer = '{$_POST['chofer']}'";
		}
		if(isset($_POST['fechae']) and strlen(trim($_POST['fechae'])) > 0){
			$ff = explode("/",$_POST['fechae']);
	        $_POST['fechae'] = $ff[2]."-".$ff[1]."-".$ff[0];
			$where .= " AND s.fecha_envio = '{$_POST['fechae']}'";
		}
		if(isset($_POST['ffechar']) and strlen(trim($_POST['ffechar'])) > 0){
			$ff = explode("/",$_POST['ffechar']);
	        $_POST['ffechar'] = $ff[2]."-".$ff[1]."-".$ff[0];
			$where .= " AND s.fecha_recepcion = '{$_POST['ffechar']}'";
		}
		$orden = "ORDER BY s.fecha_captura DESC";
		$d['listado'] = $this->mgenerico->getDataReporte($where,$orden);
    	$this->load->library('mpdfhtml');
		$id_usuario =  $this->session->userdata('sv_Idusuario');
		$d['datos'] = $this->mgenerico->editaSolicitudPDF($id_sol);
		$fecha = explode(" ",$this->mgenerico->now());
		//echo "<pre>";print_r($d);die();
		$html = $this->smarty->view('reporte/solPdf.tpl',$d,TRUE);
		$mpdf=new mPDF();
		$h['cede'] = '';
		$header = $this->smarty->view('reporte/solPdfHeader.tpl',$h,TRUE);
		$i['PAGENO'] = '{PAGENO}';
		$i['nb'] = '{nb}';
		$footer = $this->smarty->view('reporte/solPdfFooter.tpl',$i,TRUE);
		$mpdf->SetHTMLHeader($header,'',TRUE);
		$mpdf->SetHTMLFooter($footer,'',TRUE);
		$mpdf->AddPage('L','LETTER','','', 0 , 0 , 0, 30 , 10 , 0, 0);
		$mpdf->WriteHTML($html);
		$nombre = str_replace("/","_",$this->fechaPhp($fecha[0]))."-".str_replace(":","_",$fecha[1]);
		//$mpdf->Output();die();
	    $mpdf->Output('REPORTE['.$nombre.'].pdf','D');
 	}

}
?>
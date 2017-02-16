<?php
class Mgenerico extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function now(){
       return  $this->db->query("SELECT NOW() AS fecha")->row()->fecha;
    }
    public function hora(){
    	return $this->db->query("SELECT DATE_FORMAT(NOW(),' %H:%i:%s') AS hora")->row()->hora;
    }
    public function now2(){
       return  $this->db->query("SELECT DATE_FORMAT(NOW(),'%d/%m/%Y') AS fecha")->row()->fecha;
    }
    public function fechaMySQL($f){
	    if($f != ""){
	      $fr = explode("/",$f);
	      return $fr[2]."-".$fr[1]."-".$fr[0];
	    }
  	}
    public function validarLogin($f = ''){
		if(empty($f)){return false;}
		$r = array();
		$this->db->select("id_usuario,usuario,nombre,area,id_tipo");
		$this->db->where('estatus',"1");
		if (!empty($f['usuario'])){
			$this->db->where('usuario',$f['usuario']);
		}
		if(!empty($f['pass'])){
			$this->db->where('pass',md5($f['pass']));
		}
		$this->db->limit(1);
		$query = $this->db->get("v_usuarios");
		if ($query->num_rows() > 0){
			return  $query->row_array();
		}
	}

	public function ultimoFolio($area = ''){
	    if(empty($area)){return false;}
	    $fol = $this->db->query("SELECT IFNULL((SELECT CONCAT(sigla,'-',LPAD(folio,6,'0')) FROM v_areas WHERE id_area =  '{$area}' LIMIT 1),1) AS folio")->row()->folio;
	    return $fol;
	}
	public function folioMas($area = ''){
		if(empty($area)){return false;}
	    $this->db->query("UPDATE v_areas SET folio = folio +1 WHERE id_area = '{$area}'");
	}

	public function getCatEstatus($id = 0){
		$res = array('RES' => FALSE, 'DATOS' => '');
		$this->db->select("id_estatus,estatus,siglas");
		$this->db->from("v_estatus");
		$this->db->where("status = 1");
		if($id > 0){
			$this->db->where("id_estatus",$id);
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			$res['RES'] = TRUE;
			$res['DATOS'] = $query->result_array();
		}
		return $res;
	}
	public function getCatChoferes($id = 0){
		$res = array('RES' => FALSE, 'DATOS' => '');
		$this->db->select("id_chofer,nombreChofer");
		$this->db->from("v_choferes");
		$this->db->where("estatus = 1");
		if($id > 0){
			$this->db->where("id_chofer",$id);
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			$res['RES'] = TRUE;
			$res['DATOS'] = $query->result_array();
		}
		return $res;
	}
	public function getCatCedes($id = 0){
		$res = array('RES' => FALSE, 'DATOS' => '');
		$this->db->select("id_cede,cede");
		$this->db->from("v_cedes");
		$this->db->where("estatus = 1");
		if($id > 0){
			$this->db->where("id_cede",$id);
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			$res['RES'] = TRUE;
			$res['DATOS'] = $query->result_array();
		}
		return $res;
	}
	public function getCatAreas($id = 0){
		$res = array('RES' => FALSE, 'DATOS' => '');
		$this->db->select("id_area,area");
		$this->db->from("v_areas");
		$this->db->where("estatus = 1");
		if($id > 0){
			$this->db->where("cede",$id);
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			$res['RES'] = TRUE;
			$res['DATOS'] = $query->result_array();
		}
		return $res;
	}
	public function getCatUsuariosAreas($id = 0){
		$res = array('RES' => FALSE, 'DATOS' => '');
		$this->db->select("usuario");
		$this->db->from("v_rel_usuario_area");
		$this->db->where("estatus = 1");
		if($id > 0){
			$this->db->where("id_area",$id);
		}
		$query = $this->db->get();
		if ($query->num_rows() > 0){
			$res['RES'] = TRUE;
			$res['DATOS'] = $query->result_array();
		}
		return $res;
	}
	public function historicoEstatusSolicitud($idSolicitud, $estatus){
	    $idUsuario = $this->session->userdata('sv_Idusuario');
	    $mdata = array(
	      'id_usuario' => $idUsuario,
	      'id_sol' => $idSolicitud,
	      'id_estatus' => $estatus,
	      'fecha_registro' => $this->now()
	    );
	    $this->db->insert('v_solicitudes_historico_estatus', $mdata);
  	}
  	public function verificarEstatuSol($id){
	    if(!empty($id)){
	        return $this->db->query("SELECT IFNULL((SELECT estatus FROM v_solicitudes WHERE id_sol = '{$id}' LIMIT 1),1) AS estatus")->row()->estatus;
	    }
    	return 1;
  	}
	public function saveSolicitud($arrayData,$ids){
    	if(empty($arrayData)){return false;}
    	//echo "<pre>";print_r($arrayData);die();
    	try{
      		$this->db->trans_start();
      		$tipo = $this->session->userdata('sv_tipo');
			$idUsuario = $this->session->userdata('sv_Idusuario');
			$area =  $this->session->userdata('sv_area');
			$fechaCaptura = $this->now();
			$folio = ($ids == 0) ? $this->ultimoFolio($area) : "";
			$idSol = ($ids == 0) ? 'NULL' : $arrayData['idSol'];
			$datosInsertar = array(
				'id_sol' => $idSol,
				'folio' => $folio,
				'id_usuario' => $idUsuario,
				'fecha' => $this->fechaMySQL($arrayData['fecha']),
				'area_destino' => $arrayData['area'],
				'destinatario' => $arrayData['destinatario'],
				'usuario_destino' => $arrayData['usuario'],
				'detalle_envio' => $arrayData['detalle'],
				'observaciones' => $arrayData['observaciones'],
				'fecha_captura' => $fechaCaptura,
				'estatus' => 1
			);
			$sql = $this->db->insert_string('v_solicitudes', $datosInsertar) . " ON DUPLICATE KEY UPDATE
                        fecha = '{$datosInsertar['fecha']}',
                        area_destino = '{$datosInsertar['area_destino']}',
                        destinatario = '{$datosInsertar['destinatario']}',
                        usuario_destino = '{$datosInsertar['usuario_destino']}',
                        detalle_envio = '{$datosInsertar['detalle_envio']}',
                        observaciones = '{$datosInsertar['observaciones']}'";
            $this->db->query($sql);
      		$idSolicitud = ($ids == 0) ? $this->db->insert_id() : $ids;
      		if($ids == 0){
        		$this->folioMas($area);//se aumenta el folio según el area
        		$this->historicoEstatusSolicitud($idSolicitud,1);
      		}
      		$this->db->trans_complete();
      		return $idSolicitud;
        }
	    catch(Exception $ex){
	      $this->db->trans_rollback();
	      return null;
	    }
  	}
  	public function editaSolicitud($id){
	    if(!empty($id)){
	      	$data = $this->db->query("SELECT
	      							s.id_sol,
	                                CONCAT(LPAD(s.id_sol,6,'0'),'-',s.folio) AS folio,
	                                s.id_usuario,
	                                s.area_destino,
									s.destinatario,
									s.usuario_destino,
									DATE_FORMAT(s.fecha,'%d/%m/%Y') AS fecha,
	                                DATE_FORMAT(s.fecha_captura,'%d/%m/%Y %H:%i:%s') AS fecha_captura,
	                                s.detalle_envio,
	                                s.observaciones,
	                                s.estatus
	                                FROM v_solicitudes AS s
	                              	WHERE s.id_sol = {$id} LIMIT 1")->row();
	      	if(count($data) > 0){
	        	return $data;
	      	}
	    }
  	}
  	public function editaSolicitudPDF($id){
	    if(!empty($id)){
	      	$data = $this->db->query("SELECT
	      							s.id_sol,
	                                CONCAT(LPAD(s.id_sol,6,'0'),'-',s.folio) AS folio,
	                                s.id_usuario,
	                                c.cede AS area_destino,
									a.area AS destinatario,
									s.usuario_destino,
									DATE_FORMAT(s.fecha,'%d/%m/%Y') AS fecha,
	                                DATE_FORMAT(s.fecha_captura,'%d/%m/%Y %H:%i:%s') AS fecha_captura,
	                                s.detalle_envio,
	                                s.observaciones,
	                                s.estatus
	                                FROM v_solicitudes AS s
	                                INNER JOIN v_cedes AS c ON c.id_cede = s.area_destino
									INNER JOIN v_areas AS a ON a.id_area = s.destinatario AND a.cede = s.area_destino
	                              	WHERE s.id_sol = {$id} LIMIT 1")->row();
	      	if(count($data) > 0){
	        	return $data;
	      	}
	    }
	}
	public function enviaInfoPDF($id){
	    if(!empty($id)){
	      	$data = $this->db->query("SELECT
									c.cede AS cede_envia,
									a.area AS area_envia,
									u.nombre AS usuario_envia
									FROM v_solicitudes AS s
									INNER JOIN v_usuarios AS u ON u.id_usuario = s.id_usuario
									INNER JOIN v_areas AS a ON a.id_area = u.area
									INNER JOIN v_cedes AS c ON c.id_cede = a.cede
	                              	WHERE s.id_sol = {$id} LIMIT 1")->row();
	      	if(count($data) > 0){
	        	return $data;
	      	}
	    }
	}
  	public function getDataGrid($label,$where,$start,$limit,$orden){
		if($limit !=0){
			$limit = "LIMIT ".$start.",".$limit;
		}
		$query = $this->db->query("SELECT
									s.id_sol,
									CONCAT(LPAD(s.id_sol,6,'0'),'-',s.folio) AS folio,
									DATE_FORMAT(s.fecha,'%d/%m/%Y') AS fecha,
									IFNULL(DATE_FORMAT(s.fecha_envio,'%d/%m/%Y'),'N/D') AS fecha_envio,
									u.nombre AS usuario,
									c.cede AS area_destino,
									a.area AS destinatario,
									s.usuario_destino,
									s.detalle_envio,
									s.observaciones,
									e.siglas AS estatus
									FROM
									v_solicitudes AS s
									INNER JOIN v_usuarios AS u ON u.id_usuario = s.id_usuario
									INNER JOIN v_estatus AS e ON e.id_estatus = s.estatus
									INNER JOIN v_cedes AS c ON c.id_cede = s.area_destino
									INNER JOIN v_areas AS a ON a.id_area = s.destinatario AND a.cede = s.area_destino
									WHERE 1 {$where}
									{$orden} {$limit}");
		if($label  == 'c'){
			return $query->num_rows();
		}
		if($label  == 'r'){
			return $query->result_array();
		}
	}
  	public function getDataGridDetalle($label,$id){
		if(!empty($id)){
			$data = $this->db->query("SELECT
										h.id_hist_status,
										u.nombre AS usuario,
										e.estatus,
										DATE_FORMAT(h.fecha_registro,'%d/%m/%Y %H:%i:%s') AS fecha
										FROM
										v_solicitudes_historico_estatus AS h
										INNER JOIN v_usuarios AS u ON u.id_usuario = h.id_usuario
										INNER JOIN v_estatus AS e ON e.id_estatus = h.id_estatus
										WHERE h.id_sol = {$id}
										ORDER BY h.id_hist_status ASC");
			if($label  == 'c'){
				return $data->num_rows();
			}
			if($label  == 'r'){
				return $data->result_array();
			}
		}
	}
	public function getDataReporte($where,$orden){
		$query = $this->db->query("SELECT
									CONCAT(LPAD(s.id_sol,6,'0'),'-',s.folio) AS folio,
									IFNULL(DATE_FORMAT(s.fecha_envio,'%d/%m/%Y'),'N/D') AS fecha_envio,
									cc.cede,
									aa.area,
									s.observaciones
									FROM
									v_solicitudes AS s
									INNER JOIN v_usuarios AS u ON u.id_usuario = s.id_usuario
									INNER JOIN v_areas AS aa ON aa.id_area = u.area
									INNER JOIN v_cedes AS cc ON cc.id_cede = aa.cede
									INNER JOIN v_estatus AS e ON e.id_estatus = s.estatus
									INNER JOIN v_cedes AS c ON c.id_cede = s.area_destino
									INNER JOIN v_areas AS a ON a.id_area = s.destinatario AND a.cede = s.area_destino
									WHERE 1 {$where}
									{$orden}");
			return $query->result_array();
	}
}
?>
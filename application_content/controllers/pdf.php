<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Pdf extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->helper('array');
        $this->load->helper('url');
        $this->load->library('mpdfhtml');
        $this->load->model('mgenerico');
 	}	 
	public function generarPdf(){
		$municipios = $this->mgenerico->getMunicipios();
		foreach ($municipios as $k => $m){
			$municipio = $m['municipio'];
			$d['datos'] = $this->mgenerico->viewInfo($municipio);
			$d['views'] = 0;	
			$html = $this->smarty->view('solpdf/solPdf.tpl',$d,TRUE);
			$mpdf=new mPDF();
			$h['muni'] = $municipio;
			$header = $this->smarty->view('solpdf/solPdfHeader.tpl',$h,TRUE);
			$i['PAGENO'] = '{PAGENO}';
			$i['nb'] = '{nb}';
			$footer = $this->smarty->view('solpdf/solPdfFooter.tpl',$i,TRUE);
			$mpdf->SetHTMLHeader($header,'',TRUE);
			$mpdf->SetHTMLFooter($footer,'',TRUE);
			$mpdf->AddPage('L','LETTER','','', 0 , 0 , 0, 25 , 20 , 0, 0);
			$mpdf->WriteHTML($html);
			//$mpdf->Output();die();
		    $mpdf->Output("pdfs/".$municipio.'.pdf');
		}
	} 
}
?>
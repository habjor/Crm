<?php
/**
* 
*/
class cForo extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('crm/mForo');
		$this->load->helper('date');
	}
	public function index(){

		$this->load->view('crm/header');
		$this->load->view('crm/menu');
		$this->load->view('crm/vForo');
		$this->load->view('crm/footer');
	}
	public function guardarTema(){
	$param['TituloTema'] = $this->input->post('TituloTema');
	$param['seccion'] = $this->input->post('seccion');
	$param['AsuntoTema'] = $this->input->post('AsuntoTema');
	$param['idUsuarioCrea'] = $this->input->post('idUsuarioCrea');

	if($this->mForo->guardarTema($param)){
		$this->load->view('crm/header');
		$this->load->view('crm/menu');
		$this->load->view('crm/vForo');
		$this->load->view('crm/footer');
			}

	}
	public function getTemas(){
		$resultado = $this->mForo->getTemas();
		$resultado = json_encode($resultado);
		echo $resultado;
	}
	public function getComentariosPorTema(){
		$idTema = $this->input->post('idTemaForo');
		$resultado = $this->mForo->getComentariosPorTema($idTema);
		$resultado = json_encode($resultado);
		echo $resultado;
	}
	public function guardarComentario(){
		$format = 'DATE_RFC822';
		$time = time();
		$fechaActual = standard_date($format, $time);
		$param['Comentario'] = $this->input->post('Comentario');
		$param['Fecha_Creacion'] = $fechaActual;
		$param['idUsuarioc'] = $this->input->post('idUsuarioc');
		$param['idTema'] = $this->input->post('idTema');
		$this->mForo->guardarComentario($param);
	}
}
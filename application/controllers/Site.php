<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public $titulo = 'Carlu Informática';

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/* Informações para 'cabecalho.php' */
		$data['titulo'] = $this->titulo;
		$data['incluir_cabecalho'] = array(link_tag('styles/geral.css'));
		/* Informações para 'view' */
		$view = 'site/inicio';
		/* Conclusão */
		$this->load->view('modelos/cabecalho', $data);
		$this->load->view($view, $data);
		$this->load->view('modelos/rodape', $data);
	}
}

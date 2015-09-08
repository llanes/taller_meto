<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
	 *
	 * @return void
	 * @author Christian LLanes
	 **/
class Marca extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// Cargamos las librerias, model, helper;
		$this->load->library('form_validation');
	}

	public	function index()
	{
		$data = array //arreglo para mandar datos a la vista
			(
					'titulo'=> 'Inicio',//mi titulo 
					"admin" => $this->session->userdata('usuario')
			);
			//redirecionamos a la vista o llamamos a la vista index
			$this->parser->parse('Home/head.php',$data, FALSE);	// carga todos las url de estilo i js home	
			$this->parser->parse('Home_admin/header_admin.php',$data, FALSE); // esta seria la barra de navegacion horizontal
			$this->parser->parse('Marca/marca_lista.php',$data, FALSE); // este seria todo el contenido central
			$this->parser->parse('Home/footer.php',$data, FALSE); // este seria todo el contenido central
			$this->load->view('Home/pie.php'); // pie con los js
	}
	public	function inicio()
	{

		$data = array //arreglo para mandar datos a la vista
			(
					'titulo'=> 'Inicio',//mi titulo 
					"usuario" => $this->session->userdata('usuario')
			);
			//redirecionamos a la vista o llamamos a la vista index
			$this->parser->parse('Home/head.php',$data, FALSE);	// carga todos las url de estilo i js home	
			$this->parser->parse('Home_admin/header_admin.php',$data, FALSE); // esta seria la barra de navegacion horizontal
			$this->parser->parse('Marca/marca_lista.php',$data, FALSE); // este seria todo el contenido central
			$this->parser->parse('Home/footer.php',$data, FALSE); // este seria todo el contenido central
			$this->load->view('Home/pie.php'); // pie con los js
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inicio extends CI_Controller {

	function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
		}

		public function index()
		{
			//Creamos un arreglo de objetos
			unset($data, $menu, $arr_sesion);

			$data = array();
			$page = array();

			$arr_sesion 	    = $this->M_global->variables();
			$data['arr_sesion'] = $arr_sesion;
			if($arr_sesion['sesion_activa'] == "Activa"){
					$page['principal']	= $this->load->view('V_principal',$data);
			}else {
					$page['principal']	= $this->load->view('V_home',$data);
			}

		}
}

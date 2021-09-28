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
			//$menu = array();

			$arr_sesion 	    = $this->M_global->variables();
			$menu['d_sesion']	= $arr_sesion;
			$data['arr_sesiom'] = $arr_sesion;
			$this->load->view('V_home',$data);

		}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inicio extends CI_Controller {

	function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
			$this->load->model('M_smunicipio');
		}

		public function index()
		{
			//Creamos un arreglo de objetos
			unset($data, $menu, $arr_sesion);

			$data = array();

			$arr_sesion 	    = $this->M_global->variables();
			$data['arr_sesion'] = $arr_sesion;
			if($arr_sesion['sesion_activa'] == "Activa"){
					$data['page'] = '<img class="img-fluid" src="https://www.qrocasa.com.mx/wp-content/uploads/2020/09/Tz7Iz7PaRi.jpg"/>';
					$this->load->view('V_principal',$data);
			}else {
				$data['estado'] = $this->M_smunicipio->get_edo();
						$this->load->view('V_home',$data);
			}

		}
}

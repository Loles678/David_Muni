<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_smunicipios extends CI_Controller {

	function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
		}

		public function index()
		{
			$arr_sesion 	    = $this->M_global->variables();
			$data['arr_sesion'] = $arr_sesion;
			if($arr_sesion['sesion_activa'] == "Activa"){
          $data['page'] = $this->load->view('V_smunicipios',$data,TRUE);
					$this->load->view('V_principal',$data);
			}
			else {
					redirect(base_url("C_inicio"));
			}
		}
}

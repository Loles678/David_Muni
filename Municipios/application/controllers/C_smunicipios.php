<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_smunicipios extends CI_Controller {

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
			$data = array();
			$arr_sesion 	    = $this->M_global->variables();
			$data['arr_sesion'] = $arr_sesion;
			if($arr_sesion['sesion_activa'] == "Activa"){
					$data['estado'] = $this->M_smunicipio->get_edo();
          $data['page'] = $this->load->view('V_smunicipios',$data,TRUE);
					$this->load->view('V_principal',$data);
			}
			else {
					redirect(base_url("C_inicio"));
			}
		}
		public function municipio(){
			unset($id_edo,$data);
			$id_edo = $this->input->post('sel_muni');
			$json = array();
			$consulta = $this->M_smunicipio->get_municipio($id_edo);
			if(isset($consulta)){
				$json['status'] = 200;
				$json['municipios'] = $consulta;
			}
			else{
				$json['status'] = 500;
			}
			echo json_encode($json);
		}
}

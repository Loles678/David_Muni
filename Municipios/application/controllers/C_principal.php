<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_principal extends CI_Controller {

	function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
		}

		public function index()
		{
				$this->load->view('V_home');
		}
}

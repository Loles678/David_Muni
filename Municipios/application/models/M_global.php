<?php
	if(! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 *
	 */
	class M_global extends CI_Model
	{

		function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
		}

		public function variables()
		{
			$array_sesion = array();
      //id_per, nom_per, ap_per , correo, contraseña
			$array_sesion['sesion_activa']		= $this->session->userdata('sesion_activa');
			$array_sesion['id_pers'] 		= $this->session->userdata('id_per');
			$array_sesion['nom_per'] 			= $this->session->userdata('nom_per');
			$array_sesion['ap_per'] 			= $this->session->userdata('ap_per');
			$array_sesion['correo'] 		= $this->session->userdata('correo');
			$array_sesion['contraseña'] 			= $this->session->userdata('contraseña');

			return $array_sesion;
		}
	}
?>

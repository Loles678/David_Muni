<?php

	class M_global
	{

		public function variables()
		{
			$array_sesion = array();

			$array_sesion['sesion_activa']		= $this->session->userdata('sesion_activa');
			$array_sesion['id_usuario'] 		= $this->session->userdata('id_usuario');
			$array_sesion['usuario'] 			= $this->session->userdata('usuario');
			$array_sesion['password'] 			= $this->session->userdata('password');
			$array_sesion['empresa'] 			= $this->session->userdata('empresa');
			$array_sesion['nombre'] 			= $this->session->userdata('nombre');
			$array_sesion['ap_paterno'] 		= $this->session->userdata('ap_paterno');
			$array_sesion['ap_materno'] 		= $this->session->userdata('ap_materno');
			$array_sesion['curp'] 				= $this->session->userdata('curp');
			$array_sesion['rfc'] 				= $this->session->userdata('rfc');
			$array_sesion['fecha'] 				= $this->session->userdata('fecha');
			$array_sesion['id_tipo_usuario'] 	= $this->session->userdata('id_tipo_usuario');
			$array_sesion['tipo_usuario'] 		= $this->session->userdata('tipo_usuario');

			return $array_sesion;
		}
	}
?>

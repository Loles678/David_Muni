<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class C_sesion extends CI_Controller
	{
		function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
			$this->load->model('M_sesion');
		}

		public function login()
		{
			unset($usu, $pas, $consulta, $json);

			$correo = $this->input->get_post('correo');
			$pass = $this->input->get_post('pass');
			$json = array();

			$consulta = $this->M_sesion->login($pass);

			if(isset($consulta ))
			{
				if($pass == $consulta->contraseña)
				{
          $json['data'] = $consulta;
					if($this->carga_sesion($consulta->Id_per) == true)
					{
						$json['status'] = 200;
						$json['mensaj'] =  'Se ha cargado la sesión';
					}else
					{
						$json['status'] = 500;
						$json['mensaj'] = 'No se puede cargar la sesión, comunicate con soporte';
					}
				}else
				{
					$json['status'] = 500;
					$json['mensaj'] = 'El usuario o contraseña no son correctos';
				}
			}else
			{
				$json['status'] = 500;
				$json['mensaj'] = 'El usuario o contraseña no son correctos';
			}

			echo json_encode($json);
		}

		private function carga_sesion($id_usuario)
		{
			unset($consulta, $array_sesion);

			$consulta = $this->M_sesion->carga_sesion($id_usuario);
			if(isset($consulta))
			{
				$array_sesion = array();

				$array_sesion['sesion_activa']		= "Activa";
				$array_sesion['id_pers'] 		= $consulta->Id_per
				$array_sesion['nom_per'] 			= $consulta->nom_per;
				$array_sesion['ap_per'] 			= $consulta->ap_per;
				$array_sesion['correo'] 		= $consulta->correo;
				$array_sesion['contraseña'] 			= $consulta->contraseña;

        print_r("Sesion:");
        print_r($array_sesion);
				//Se carga la sesión
				$this->session->set_userdata($array_sesion);

				if(isset($array_sesion))
					return true;
				else
					return false;

			}else
			{
				return false;
			}

		}

		public function cerrar_sesion()
		{
			$this->session->sess_destroy();
			redirect('C_inicio');
		}
	}



?>

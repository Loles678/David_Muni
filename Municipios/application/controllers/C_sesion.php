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
				$array_sesion['id_pers'] 		= $consulta->Id_per;
				$array_sesion['nom_per'] 			= $consulta->nom_per;
				$array_sesion['ap_per'] 			= $consulta->ap_per;
				$array_sesion['correo'] 		= $consulta->correo;
				$array_sesion['contraseña'] 			= $consulta->contraseña;

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

    public function registrarse(){
      unset($nom,$ap,$email,$pass,$id_edo,$id_muni,$data);
      $nom = $this->input->post('nom');
      $ap = $this->input->post('ap');
      $email = $this->input->post('email');
      $pass = $this->input->post('pass');
      $id_edo = $this->input->post('id_edo');
      $id_muni = $this->input->post('id_muni');
      $json = array();
      $data = array('nom_per'=>$nom,'ap_per'=>$ap,'correo'=>$email,
      'contraseña'=>$pass,'ID_MPO'=>$id_muni,'ID_EDO'=>$id_edo);
      $consulta = $this->M_sesion->registrarse($data);
      if(isset($consulta)){
        $json['status'] = 200;
        $json['mensaje'] = "Registro exítoso";
        $consulta = $this->M_sesion->login($pass);
        $this->carga_sesion($consulta->Id_per);
      }
      else{
        $json['status'] = 500;
      }
      echo json_encode($json);
    }

		public function cerrar_sesion()
		{
			$this->session->sess_destroy();
			redirect('C_inicio');
		}
	}



?>

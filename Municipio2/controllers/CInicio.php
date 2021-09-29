<?php
class Inicio
{
    public function ViewInicio()
    {
        require_once '../Municipios2/Views/Vinicio.php';
    }

    public function cerrar_sesion()
    {
      $this->session->sess_destroy();
      redirect('../Municipios2/index.php');
    }
    public function login()
    {
      $correo = $this->input->get_post('correo');
      $pass = $this->input->get_post('pass');
      $json = array();
      $consulta = $this->Msession->login(md5($usu));
      if(isset($consulta)){
        if($this->carga_sesion($consulta->Id_per) == true)
        {
          $json['status'] = 200;
          $json['mensaj'] =  'Se ha cargado la sesión';
        }else
        {
          $json['status'] = 500;
          $json['mensaj'] = 'No se puede cargar la sesión, comunicate a soporte';
        }
      }
    }
    public function carga_sesion($id_usuario){
      unset($consulta, $array_sesion);

			$consulta = $this->Msession->carga_sesion($id_usuario);
			if(isset($consulta))
			{
				$array_sesion = array();
        //Id_per,nom_per,ap_per,correo,contraseña
				$array_sesion['sesion_activa']		= 'Activa';
				$array_sesion['id_per'] 		= $consulta->Id_per;
				$array_sesion['nom_per'] 			= $consulta->nom_per;
				$array_sesion['ap_per'] 			= $consulta->ap_per;
				$array_sesion['correo'] 		= $consulta->correo;
				$array_sesion['contasena'] 			= $consulta->contraseña;

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
}

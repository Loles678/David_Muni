<?php
	if(! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 *
	 */
	class M_sesion extends CI_Model
	{

		function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
		}

		public function login($clave)
		{
			$this->db->select('Id_per,correo,contraseña');
			$this->db->from('personas');
			$this->db->where('contraseña',$clave);
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
		}

		public function carga_sesion($id_usuario)
		{
			$this->db->select("*");
			$this->db->from('personas');
			$this->db->where('id_per',$id_usuario);
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
		}
	}
?>

<?php
	if(! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 *
	 */
	class M_smunicipio extends CI_Model
	{

		function __construct()
		{
			//Cargamos el constructor
			parent::__construct();
			//Importamos el controlador de la sesion
			$this->load->model('M_global');
		}

		public function get_edo()
		{
			$this->db->select("*");
			$this->db->from('estado');
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
		}

		public function get_municipio($id_edo)
		{
			$this->db->select("*");
			$this->db->from('municipio');
			$this->db->where('ID_EDO',$id_edo);
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
		}
	}
?>

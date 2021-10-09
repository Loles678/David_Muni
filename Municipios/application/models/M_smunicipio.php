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


		public function get_municipio()
		{
			$this->db->select("*");
			$this->db->from('municipio');
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
		}
	}
?>

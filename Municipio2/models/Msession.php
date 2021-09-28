<?php
require_once('../Municipios/Tools/conn.php');
	/**
	 *
	 */
	class Msession
	{
		public function login($clave)
		{
			$this->db->select('*');
			$this->db->from('personas');
			$this->db->where('contraseña',$clave);
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->row();
			}
		}

		public function carga_sesion($id_per)
		{
			$this->db->select('*');
			$this->db->from('personas');
			$this->db->where('Id_per',$id_per);
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
		}

	}
?>

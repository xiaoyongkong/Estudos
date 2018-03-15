<?php
/**
 * Created by PhpStorm.
 * User: Xiao Yong Kong
 * Date: 06/03/2018
 * Time: 21:34
 */

class Roupas_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function select_roupas($tipo = FALSE)
    {
		$query = $this->db->get('roupas');
		return $query->result();
    }

	function roupas_insert($data){
		// Inserting in Table(roupas) of Database(codeigniter)
		$this->db->insert('roupas', $data);
	}

}

?>

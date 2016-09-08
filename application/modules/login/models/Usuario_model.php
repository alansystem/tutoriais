<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getUser($data)
	{
		$this->db->where('login', $data['login']);
		$this->db->where('senha', $data['senha']);
		$query = $this->db->get('usuarios');
		return $query->result();
	}

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */
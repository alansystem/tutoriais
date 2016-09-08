<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comunicados extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('logado'))
		{
			redirect(base_url('login/usuario/logar'),'refresh');
			exit;
		}		
	
	}

	public function index()
	{
		$data['comunicados'] = $this->db->get('comunicados')->result();

		$this->load->view('layout/header');
		$this->load->view('layout/menu-left');
		$this->load->view('comunicados',$data);
		$this->load->view('layout/footer');
	}

	public function gerenciar()
	{
			$crud = new grocery_CRUD();
			
			$crud->set_table('comunicados');
			$crud->set_subject('Comunicados');

			$crud->columns('conteudo','date');
			
			 $crud->unset_export();
			 $crud->unset_print();
			 $crud->unset_read();

			 $crud->unset_fields('date');



			$output = $crud->render();


			$this->layout($output);
	}

	private function layout($output = null,$data = null)
	{
		$this->load->view('layout/header',$output);
		$this->load->view('layout/menu-left');
		$this->load->view('comunicados_gerenciar',$data);
		$this->load->view('layout/footer');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
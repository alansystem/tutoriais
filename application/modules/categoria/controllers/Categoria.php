<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
		if(!$this->session->userdata('logado'))
		{
			redirect(base_url('login/usuario/logar'),'refresh');
			exit;
		}		
	}


	public function gerenciar()
	{
			$crud = new grocery_CRUD();
			
			$crud->set_table('categorias');
			$crud->set_subject('Categorias');
			
			
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
		$this->load->view('categoria',$data);
		$this->load->view('layout/footer');
	}

}

/* End of file veiculo.php */
/* Location: ./application/controllers/veiculo.php */
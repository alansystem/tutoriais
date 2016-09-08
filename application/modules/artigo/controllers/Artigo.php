<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artigo extends CI_Controller {

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
			
			$crud->set_table('artigos');
			$crud->set_subject('Artigos');

			$crud->columns('cliente','categoria','titulo','descricao','anexo');

			$crud->set_field_upload('anexo','anexos');
			$crud->set_relation('categoria','categorias','nome');
			$crud->set_relation('cliente','clientes','nome');

			$crud->display_as('data_vencimento','Data de Vencimento');
			
			
			 $crud->unset_export();
			 $crud->unset_print();


			 //Caso seja Leitor
			 if($this->session->userdata('permissao') == 'E')
			 {
			 	$crud->unset_read();	
			 }else{
			 	$crud->unset_add();
			 	$crud->unset_edit();
			 	$crud->unset_delete();
			 }
			 


			 $crud->unset_fields('date');



			$output = $crud->render();


			$this->layout($output);
	}


	private function layout($output = null,$data = null)
	{
		$this->load->view('layout/header',$output);
		$this->load->view('layout/menu-left');
		$this->load->view('artigo',$data);
		$this->load->view('layout/footer');
	}

}

/* End of file veiculo.php */
/* Location: ./application/controllers/veiculo.php */
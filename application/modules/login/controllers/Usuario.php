<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('usuario_model');

	}

	public function index()
	{
		if(!$this->session->userdata('logado'))
		{
			redirect(base_url('login/usuario/logar'),'refresh');
			exit;
		}		
	
			$crud = new grocery_CRUD();

			$crud->set_table('usuarios');
			$crud->set_subject('Usuários');

			$crud->field_type('senha', 'password');


			$crud->columns('nome','login','permissao');

			$crud->unset_fields('date');

			$crud->field_type('permissao','dropdown',array('L' => 'Leitor', 'E' => 'Editor'));

			$crud->unset_export();
			$crud->unset_print();

			$output = $crud->render();

			$this->layout($output);
	}

	private function layout($output = null)
	{
		$this->load->view('layout/header',$output);
		$this->load->view('layout/menu-left');
		$this->load->view('usuarios');
		$this->load->view('layout/footer');
	}

	public function logar()
	{
		if($this->input->post())
		{
			$data['login'] 		= $this->input->post('login');
			$data['senha'] 		= $this->input->post('senha');

			//Consulta no Banco de Dados se login procede
			$dados = $this->usuario_model->getUser($data);
			if(count($dados)>0)
			{
				$this->session->set_userdata(array('usuario'=>$dados[0]->login,
													'nomeUsuario'=>$dados[0]->nome,
													'permissao'=>$dados[0]->permissao,
													'logado'=>true));

				//Libera Acesso
				redirect(base_url('comunicados'),'refresh');


			}else{
				redirect(base_url('login/usuario/logar?error'),'refresh');
			}

		}else{
			if($this->session->userdata('logado')){
				//Retorna ao Sistema
				redirect(base_url('comunicados'),'refresh');
			}else{
				$this->load->view('login');	
			}
		}
		
	}

	public function logout()
	{
		if(!$this->session->userdata('logado'))
		{
			redirect(base_url('login/usuario/logar'),'refresh');
			exit;
		}

		$this->session->sess_destroy();
		redirect(base_url('login/usuario/logar'),'refresh');
	}

}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */
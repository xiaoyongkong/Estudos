<?php
class Insert extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Roupas_model');
/*		$this->load->helper('form');*/
		$this->load->helper('url_helper');
	}

	public function index()
	{
		//$data['Roupas'] = $this->roupas_model->get_roupas();
/*		$data['title'] = 'Adicione a roupa';*/

/*		$this->load->view('templates/header', $data);*/
		//$this->load->view('roupas/insert', $data);
/*		$this->load->view('templates/footer');*/

		//Including validation library
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		$this->form_validation->set_rules('data', 'Data', 'required');
		$this->form_validation->set_rules('tipo', 'Característica', 'required');
		$this->form_validation->set_rules('cor', 'Cor', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('roupas/insert');
		} else {
			//Setting values for tabel columns
			$data = array(
				'dataSemana' => $this->input->post('data'),
				'tipo' => $this->input->post('tipo'),
				'cor' => $this->input->post('cor')
			);
		//Transfering data to Model
			$this->Roupas_model->roupas_insert($data);
			$data['message'] = 'Data Inserted Successfully';
		//Loading View
			$this->load->view('roupas/insert', $data);
		}



	}


}

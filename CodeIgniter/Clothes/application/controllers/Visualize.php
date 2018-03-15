<?php
class Visualize extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('roupas_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['title']= 'Aqui estão as roupas já foram usados até o momento';
		$data['roupas'] = $this->roupas_model->select_roupas();
		$this->load->view('roupas/visualize', $data);



	}
}

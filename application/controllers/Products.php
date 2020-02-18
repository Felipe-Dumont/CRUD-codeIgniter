<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function index()
	{
		$this->load->model('produtos_model', 'produtos');

		$data['produtos'] = $this->produtos->getProdutos();

		$this->load->view(
			'home',
			$data
		);
	}
}

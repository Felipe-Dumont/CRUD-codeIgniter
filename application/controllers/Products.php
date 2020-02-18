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

	public function add()
	{
		$this->load->model('produtos_model', 'produtos');

		$this->load->view('addprodutos');
	}

	public function salvar()
	{

		if ($this->input->post('nome') === NULL) {
			echo "O campo nome do produto é obrigatorio!";
			echo "<a href='/products/add' title='voltar'> Voltar </a>";
		} else {
			$this->load->model('produtos_model', 'produtos');

			$dados['nome'] = $this->input->post('nome');
			$dados['preco'] = $this->input->post('valor');
			$dados['ativo'] = $this->input->post('ativo');

			$this->produtos->addProduto($dados);

			redirect("/");
		}
	}
}

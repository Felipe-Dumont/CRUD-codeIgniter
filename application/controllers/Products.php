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

			if ($this->input->post('id') !== NULL) {
				$this->produtos->editarProduto($dados, $this->input->post('id'));
			} else {
				$this->produtos->addProduto($dados);
			}

			redirect("/");
		}
	}

	public function editar($id = NULL)
	{
		if ($id === NULL) {
			redirect('/');
		}

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if ($query === NULL) {
			redirect('/');
		}

		$dados['produto'] = $query;

		$this->load->view('editprodutos', $dados);
	}

	public function apagar($id = NULL)
	{
		if ($id === NULL) {
			redirect('/');
		}

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);


		if ($query !== NULL) {
			$this->produtos->apagarProduto($query->id);
			redirect('/');
		} else {
			redirect('/');
		}
	}

	public function detalhe($id = NULL)
	{
		if ($id === NULL) {
			redirect('/');
		}

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if ($query === NULL) {
			redirect('/');
		}

		$dados['produto'] = $query;

		$this->load->view('detalheproduto', $dados);
	}

	public function status($id = NULL)
	{
		if ($id === NULL) {
			redirect('/');
		}

		$this->load->model('produtos_model', 'produtos');

		$query = $this->produtos->getProdutoById($id);

		if ($query !== NULL) {
			$query->ativo == 1 ? $dados['ativo'] = 0 : $dados['ativo'] = 1;

			$this->produtos->statusProduto($dados, $query->id);
			redirect('/');
		} else {
			redirect('/');
		}
	}
}

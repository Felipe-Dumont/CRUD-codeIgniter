<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{
    public function getProdutos()
    {
        $query = $this->db->get('produtos');
        return $query->result();
    }

    public function addProduto($dados = NULL)
    {
        if ($dados !== NULL) {
            $this->db->insert('produtos', $dados);
        }
    }

    public function getProdutoById($id = NULL)
    {
        if ($id !== NULL) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            $query = $this->db->get("produtos");
            return $query->row();
        }
    }

    public function editarProduto($dados = NULL, $id = NULL)
    {
        if ($dados !== NULL && $id !== NULL) {
            $this->db->update('produtos', $dados, array('id' => $id));
        }
    }

    public function apagarProduto($id = NULL)
    {
        if ($id !== NULL) {
            $this->db->delete('produtos', array('id' => $id));
        }
    }
}

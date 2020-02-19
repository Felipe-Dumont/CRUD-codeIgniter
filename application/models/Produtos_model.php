<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{
    public function getProdutos($sort = 'id', $order = 'asc', $limit = NULL, $offset = NULL)
    {
        $this->db->order_by($sort, $order);

        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get('produtos');
        return $query->result();
    }

    public function countAll()
    {
        return $this->db->count_all('produtos');
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

    public function statusProduto($status = NULL, $id = NULL)
    {
        if ($id !== NULL && $status !== NULL) {
            $this->db->update('produtos', $status, array('id' => $id));
        }
    }

    public function detalheProduto($id = NULL)
    {
        if ($id !== NULL) {
            $query = $this->db->get('produtos', array('id' => $id));
            return $query->result();
        }
    }
}

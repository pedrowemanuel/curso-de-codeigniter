<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categorias_model extends CI_Model
{
    public $id;
    public $titulo;

    public function __construct()
    {
        parent::__construct();

    }

    public function listar_categorias()
    {
        $this->db->order_by("titulo", "ASC");
        return $this->db->get('categoria')->result();
    }

    public function listar_titulo($id)
    {
        $this->db->select('categoria.titulo');
        $this->db->from('categoria');
        $this->db->where('id = '.$id);
        $resultado = $this->db->get()->result();
        return count($resultado) > 0 ? $resultado[0]->titulo : '';
    }
}

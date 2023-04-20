<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categoria extends CI_Controller
{
    public $db;
    public $modelcategorias;
    public $categorias;
    public $modelpublicacoes;
    public $form_validation;
    public $input;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categorias_model', 'modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();

    }
    public function index()
    {
        $this->load->library('table');
        $dados['categorias'] = $this->categorias;

        // dados a serem enviado para o cabecalho
        $dados['titulo'] = "Painel de Controle";
        $dados['subtitulo'] = "Categoria";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/categoria');
        $this->load->view('backend/template/html-footer');
    }

    public function inserir()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-categoria', 'Nome da Categoria', 'required|min_length[3]|is_unique[categoria.titulo]');
        if (!$this->form_validation->run()) {
            $this->index();
        } else {
            $titulo = $this->input->post('txt-categoria');
            if($this->modelcategorias->adicionar($titulo)) {
                redirect(base_url('admin/categoria'));
            } else {
                echo "Ouve um erro no sistema!";
            }
        }
    }
}

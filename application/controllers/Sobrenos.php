<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sobrenos extends CI_Controller
{
    public $db;
    public $modelcategorias;
    public $categorias;
    public $modelpublicacoes;
    public $modelusuarios;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categorias_model', 'modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();
        $this->load->model('usuarios_model', 'modelusuarios');
    }
    public function index()
    {
        $dados['categorias'] = $this->categorias;
        $dados['autores'] = $this->modelusuarios->listar_autores();
        // dados a serem enviado para o cabecalho
        $dados['titulo'] = "Sobre Nós";
        $dados['subtitulo'] = "Conheça nossa equipe";

        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/sobrenos');
        $this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
    }

    public function autores($id, $slug=null)
    {
        $dados['categorias'] = $this->categorias;
        $dados['autor'] = $this->modelusuarios->listar_autor($id);

        // dados a serem enviado para o cabecalho
        $dados['titulo'] = "Sobre Nós";
        $dados['subtitulo'] = "Autor";

        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/autor');
        $this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');

    }
}

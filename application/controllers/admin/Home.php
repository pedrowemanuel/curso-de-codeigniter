<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public $db;
    public $modelcategorias;
    public $categorias;
    public $modelpublicacoes;

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // dados a serem enviado para o cabecalho
        $dados['titulo'] = "Painel de Controle";
        $dados['subtitulo'] = "Home";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/home');
        $this->load->view('backend/template/html-footer');
    }
}

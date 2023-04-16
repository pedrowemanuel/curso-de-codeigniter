<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Olamundo extends CI_Controller
{
    public $db;
    public function index()
    {
        $dados['mensagem'] = "Ola mundo";
        $this->load->view('olamundo', $dados);
    }

    public function teste()
    {
        $dados['mensagem'] = "Teste";
        $this->load->view('olamundo', $dados);
    }

    public function testeDB()
    {
        $dados['mensagem'] = $this->db->get("postagens")->result();
        echo "<pre>";
        print_r($dados);
    }
}

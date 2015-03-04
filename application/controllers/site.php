<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller 
{
    public function index()
    {
    $dados = array('titulo' => 'Index do site',
                   'body_view' => 'home');
    
    $this->load->view('site',$dados);

    
    }

    public function contato()
    {
    $dados = array('titulo' => 'Fale Conosco',
                   'body_view' => 'contato');
    
    $this->load->view('site',$dados);

    
    }
    
    
}

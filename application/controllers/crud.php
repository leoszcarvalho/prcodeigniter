<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller 
{
    public function index()
    {
      
      //Carregando helper no método apenas
      //$this->load->helper('url');    
        
      $dados = array('titulo' => 'Crud',
                     'body_view' => 'index');
    
      $this->load->view('crud',$dados);

    
    }
    
    public function create()
    {
      
      //Carregando helper no método apenas
      //$this->load->helper('url');    
        
      $dados = array('titulo' => 'Create',
                     'body_view' => 'create');
    
      $this->load->view('crud',$dados);

    
    }
    

    public function read()
    {
      
      //Carregando helper no método apenas
      //$this->load->helper('url');    
        
      $dados = array('titulo' => 'Read',
                     'body_view' => 'read');
    
      $this->load->view('crud',$dados);

    
    }
    
    
    public function update()
    {
      
      //Carregando helper no método apenas
      //$this->load->helper('url');    
        
      $dados = array('titulo' => 'Update',
                     'body_view' => 'update');
    
      $this->load->view('crud',$dados);

    
    }

    public function delete()
    {
      
      //Carregando helper no método apenas
      //$this->load->helper('url');    
        
      $dados = array('titulo' => 'Delete',
                     'body_view' => 'delete');
    
      $this->load->view('crud',$dados);

    
    }   
    
    
}

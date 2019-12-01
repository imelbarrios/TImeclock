<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/REST_Controller.php';

class areas extends CI_Controller {

    function __construct()
    {
        // Constructor de la clase REST_Controller
        parent::__construct();
        // Carga de modelos asociados al recurso
        $this->load->model('areas_model', 'areas_model');
        $this->load->library('form_validation'); 
        $this->load->library('session');
        $this->load->helper('url');
		$this->load->helper('form');
        // Configuracion de limites en los metodos del controlador

    }

    public function index()
    {
        $this->load->view('headers/header');
        $this->load->view('headers/navbar-admin');
        $datos = $this->areas_model->get_all(); 
        $data = array( 
            'areas' => $datos
        ); 
        $this->load->view('admin/area', $data);

    }



    public function crearRol(){
        $this->form_validation->set_rules('name','name','required');
        if ($this->form_validation->run() == FALSE) 
            { 
            $this->create(); 
            } 
          else 
            { 
            $data = array( 
                'nombre' => $this->input->post('name', TRUE) , 
                'estado' => 1,
                'fecha_registro' => date('Y-m-d H:i:s') , 
               
            ); 
            $this->areas_model->insert($data); 
            $this->session->set_flashdata('message', 'Create Record Success'); 
            redirect('/admin/area', 'refresh');
            } 

    }
   
      
    
    /**
     * Fin de las funciones del recurso areas
     */
    
}
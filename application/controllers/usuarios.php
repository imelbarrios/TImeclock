<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/libraries/REST_Controller.php';

class usuarios extends CI_Controller {

    function __construct()
    {
        // Constructor de la clase REST_Controller
        parent::__construct();
        // Carga de modelos asociados al recurso
        $this->load->model('usuarios_model', 'usuarios_model');
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
        $datos = $this->usuarios_model->get_all(); 
        $data = array( 
            'usuarios' => $datos
        ); 
        $this->load->view('admin/listado_usuario', $data);

    }

    public function crearUsuario(){
        //  set($_SESSION['login']);
        $this->load->view('headers/header');
        $this->load->view('headers/navbar-admin');
        $this->load->view('admin/crear_usuario');
      }

    public function crearAdmin(){
        $this->form_validation->set_rules('username','username','required');
         $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == FALSE) 
            { 
            $this->create(); 
            } 
          else 
            { 
            $data = array( 
                'nombre_completo' => $this->input->post('name', TRUE) , 
                'nombre_usuario' => $this->input->post('username', TRUE) , 
                'clave_usuario' => md5($this->input->post('password')),
                'fecha_registro' => date('Y-m-d H:i:s') , 
                'estado' => 1,
                'id_area' => $this->input->post('area', TRUE) , 
            ); 
            $this->usuarios_model->insert($data); 
            $this->session->set_flashdata('message', 'Create Record Success'); 
            redirect('/usuarios/crearUsuario', 'refresh');
            } 

    }
   
      
    
    /**
     * Fin de las funciones del recurso usuarios
     */
    
}
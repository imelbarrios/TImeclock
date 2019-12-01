<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
	
		$this->load->library('session');//para sesiones

	}


  

    

    public function areas(){
      //  set($_SESSION['login']);
      $this->load->view('headers/header');
      $this->load->view('headers/navbar-admin');
      $this->load->view('admin/area');
    }

    public function roles(){
      //  set($_SESSION['login']);
      $this->load->view('headers/header');
      $this->load->view('headers/navbar-admin');
      $this->load->view('admin/roles');
    }
  
}



?>

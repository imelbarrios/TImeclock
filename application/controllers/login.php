<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('validacion_model');
		$this->load->library('form_validation'); 
		$this->load->library('session');//para sesiones

	}

	public function index()
	{
		if(!isset($_POST['username'])){  //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
		$this->load->view('headers/header');
		$this->load->view('headers/login');
		}
		else{           //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"

       	
         $this->form_validation->set_rules('username','username','required');
         $this->form_validation->set_rules('password','password','required');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
         	echo $_POST['username'];
        	echo $_POST['password'];
            $this->load->view('headers/header');
			$this->load->view('headers/login');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            
            $DatosUsuario =$this->validacion_model->ValidarUsuario($_POST['username'],$_POST['password']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($DatosUsuario != null){ 

              $data['DatosUsuario'] = $DatosUsuario;
            $data   = array(
                'nombre_usuario'=> $DatosUsuario[0]->nombre_usuario,
                'clave_usuario'=> $DatosUsuario[0]->clave_usuario
            );

              $this->session->set_userdata('login', $data);  
              $this->load->view('headers/login');
            }
            else{   //   Si no logró validar
               $data['error']="Usuario o password incorrectos, por favor vuelva a intentar";
               $this->load->view('headers/header');
               $this->load->view('headers/login',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
            }
         }
      }
	}

    public function admin()
  {
    if(!isset($_POST['username'])){  //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
    $this->load->view('headers/header');
    $this->load->view('headers/login');
    }
    else{           //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"

        
         $this->form_validation->set_rules('username','username','required');
         $this->form_validation->set_rules('password','password','required');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
          echo $_POST['username'];
          echo $_POST['password'];
            $this->load->view('headers/header');
      $this->load->view('headers/login');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            
            $DatosUsuario =$this->validacion_model->ValidarUsuario($_POST['username'],$_POST['password']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($DatosUsuario != null){ 

              $data['DatosUsuario'] = $DatosUsuario;
            $data   = array(
                'nombre_usuario'=> $DatosUsuario[0]->nombre_usuario,
                'clave_usuario'=> $DatosUsuario[0]->clave_usuario
            );

              $this->session->set_userdata('login', $data);  
              $this->load->view('headers/header');
              $this->load->view('headers/navbar-admin');
              $this->load->view('admin/dashboard_admin');
            }
            else{   //   Si no logró validar
               $data['error']="Usuario o password incorrectos, por favor vuelva a intentar";
               $this->load->view('headers/header');
               $this->load->view('headers/login',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
            }
         }
      }
  }

    public function horas()
  {
    if(!isset($_POST['username'])){  //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
    $this->load->view('headers/header');
    $this->load->view('headers/login');
    }
    else{           //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"

        
         $this->form_validation->set_rules('username','username','required');
         $this->form_validation->set_rules('password','password','required');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
          echo $_POST['username'];
          echo $_POST['password'];
            $this->load->view('headers/header');
      $this->load->view('headers/login');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            
            $DatosUsuario =$this->validacion_model->ValidarUsuario($_POST['username'],$_POST['password']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($DatosUsuario != null){ 

              $data['DatosUsuario'] = $DatosUsuario;
            $data   = array(
                'nombre_usuario'=> $DatosUsuario[0]->nombre_usuario,
                'clave_usuario'=> $DatosUsuario[0]->clave_usuario
            );

              $this->session->set_userdata('login', $data);  
              $this->load->view('headers/header');
              $this->load->view('headers/navbar-horas');
              $this->load->view('horas/horas');
            }
            else{   //   Si no logró validar
               $data['error']="Usuario o password incorrectos, por favor vuelva a intentar";
               $this->load->view('headers/header');
               $this->load->view('headers/login',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
            }
         }
      }
  }

	public function logout(){
	    unset($_SESSION['login']);
	     $this->load->view('headers/header');
		$this->load->view('headers/login'); 
    }

    
}



?>


<?php
class Validacion_model extends CI_Model{

   function ValidarUsuario($usuario,$password){         

   	  $password = md5($password);
   	  $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('nombre_usuario',$usuario);   
      $this->db-> limit(1);
      
      $result = $this->db->get();

     return $result->result();
   }
}
?>
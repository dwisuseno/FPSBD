<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Model{

  function do_auth($email,$pass){
    $hasil = $this->db->query("select * from petugas where EMAIL = '$email' and PASS = '$pass'");
    if($hasil->num_rows() == 1)
    {
    	return true;
    }
    else
    {
    	return false;
    }
   }

 }
?>
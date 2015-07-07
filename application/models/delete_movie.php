<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Delete_movie extends CI_Model{
  function deleteRow($row){
  	$qu = "delete from movie where JUDUL = '$row'";
    $this->db->query($qu);
   }

   function selectJudul()
   {
   	return $this->db->query('select JUDUL from movie');
   }
 
 }
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Pilih extends CI_Model{
  
   function selectJudul()
   {
   	return $this->db->query('select JUDUL,ID_MOVIE from movie')->result();
   }

   function deleteRow($row)
   {
   	$qu = "delete from movie where ID_MOVIE = '".$row."'";
   	echo $qu;
   	$this->db->query($qu);
   }
 
 }
?>
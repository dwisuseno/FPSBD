<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Pilih_customer extends CI_Model{
  
   public function selectNama()
   {
   	return $this->db->query('select NAMA,ID_CUSTOMER from customer')->result();
   }

   function hapusRow($row)
   {
   	$qu = "delete from customer where ID_CUSTOMER = '$row'";
   	//echo $qu;
   	$this->db->query($qu);
   }
 
 }
?>
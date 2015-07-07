<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Masuk_petugas extends CI_Model{
  
   public function insertAll($id,$nama,$telepon,$email,$pass)
   {
   	$this->db->query("insert into petugas values ('$id','$nama','$telepon','$email','$pass')");
   }

   function hapusRow($row)
   {
   	$qu = "delete from customer where ID_CUSTOMER = '$row'";
   	//echo $qu;
   	$this->db->query($qu);
   }
 
 }
?>
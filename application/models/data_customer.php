<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_customer extends CI_Model{
  function selectAll(){
    return $this->db->query('select * from customer')->result();
   }

   function updateC($id,$nama,$telepon,$email,$tgl)
   {
   	$this->db->query("update customer set NAMA = '$nama' , NO_TELP = '$telepon' , EMAIL = '$email' , TGL_LAHIR = to_date('$tgl','DD-MM-YYYY') where ID_CUSTOMER = '$id'");
   }

 }
?>
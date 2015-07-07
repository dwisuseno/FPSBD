<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_petugas extends CI_Model{
  function selectAll(){
    return $this->db->query('select * from petugas')->result();
   }
   
   function hapusRow($petugas)
   {
   	$this->db->query("delete from petugas where ID_PETUGAS = '$petugas'");
   }

   function selectNama()
   {
    return $this->db->query("select * from petugas where NAMA = 'ADMIN'")->result();
   }

   function selectPetugas($id)
   {
   	return $this->db->query("select * from petugas where ID_PETUGAS = '$id'")->result();
   }

   function updatePet($id,$nama,$telepon,$email,$pass)
   {
    $this->db->query("update petugas set ID_PETUGAS = '$id' , NAMA = '$nama' , NO_TELP = '$telepon' , EMAIL = '$email' , TGL_LAHIR = '$pass' where ID_PETUGAS = '$id'");
   }
 }
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_teater extends CI_Model{
  function selectAll(){
    return $this->db->query('select * from theatre order by ID_THEATRE')->result();
   }
   function delete($id)
   {
   	$q="delete from theatre where ID_THEATRE='$id'";
   	return $this->db->query($q)->result();
   }
   function hapus($row)
   {
   	$this->db->query("delete from theatre where ID_THEATRE = '$row'");
   }
   function tambahT($id,$nama)
   {
    $this->db->query("insert into theatre values ('$id','$nama')");
   }

   function updateTea($id,$nama)
   {
    $this->db->query("update theatre set NAMA = '$nama' where ID_THEATRE = '$id'");
   }
 }
?>
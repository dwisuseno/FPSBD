<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Jadwal_teater_a extends CI_Model{
  function selectAll(){
    return $this->db->query("select ID_SCHEDULE, HARI, JAM, JUDUL, (select poster from movie where VIEW_JADWAL_A.judul=judul)poster from VIEW_JADWAL_A where hari >= SYSDATE order by hari,jam ")->result();
   }
   
 }
?>
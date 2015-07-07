<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Jadwal_minggudepan extends CI_Model{
  function selectAll(){
    return $this->db->query("
    	select ID_SCHEDULE, HARI, JAM, JUDUL, (select poster from movie where jadwal_minggu_depan.id_movie=id_movie)poster,(SELECT NAMA FROM THEATRE WHERE jadwal_minggu_depan.id_theatre=id_theatre )as teater from jadwal_minggu_depan order by hari,jam ")->result();
   }
   
 }
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Jadwal_mingguini extends CI_Model{
  function selectAll(){
    return $this->db->query("
    	select ID_SCHEDULE, HARI, JAM, JUDUL, (select poster from movie where jadwal_minggu_ini.id_movie=id_movie)poster,(SELECT NAMA FROM THEATRE WHERE jadwal_minggu_ini.id_theatre=id_theatre )as teater from jadwal_minggu_ini order by hari,jam ")->result();
   }
   
 }
?>
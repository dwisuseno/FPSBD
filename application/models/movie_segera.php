<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Movie_segera extends CI_Model{
  function selectAll(){
    return $this->db->query('select * from view_segera_tayang')->result();
   }
    function getActor($movie)
   {
   		return $this->db->query("select (select nama from actor where id_actor=dibintangi.id_actor)nama from dibintangi where id_movie='$movie'")->result();
   } 

 }
?>
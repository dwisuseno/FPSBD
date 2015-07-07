<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_movie extends CI_Model{
  function selectAll(){
    return $this->db->query("select ID_MOVIE, JUDUL,RILIS, SUTRADARA, to_char(DURASI,'hh24:mi:ss') as DURASI, STATUS, POSTER, DESKRIPSI, (R_SKOR/R_JUMLAH) as RATING from movie")->result();
   }

   function updateMovie($id,$sutradara,$judul,$durasi,$status,$deskripsi)
   {
   	$this->db->query("update movie 
   					  set JUDUL = '$judul' , DURASI = to_date('010101 $durasi','YYMMDD hh24:mi:ss') , STATUS = '$status' , DESKRIPSI = '$deskripsi' 
   					  where ID_MOVIE = '$id'");
   }
  
 }
?>
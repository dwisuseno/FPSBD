<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Movie_minggudepan extends CI_Model{
  function selectAll(){
    return $this->db->query("SELECT 
  ID_MOVIE,
  judul, 
  ( SELECT 
      poster 
    FROM 
      movie 
    WHERE 
      movie_minggu_depan.id_movie=id_movie  )POSTER,
  ( SELECT 
      deskripsi 
    FROM 
      movie 
    WHERE 
      movie_minggu_depan.id_movie=id_movie
  )DESKRIPSI,
  ( SELECT 
      (r_skor /  r_jumlah)
    FROM 
      movie 
    WHERE 
      movie_minggu_depan.id_movie=id_movie
  )rating,
  ( SELECT 
      sutradara 
    FROM 
      movie 
    WHERE 
      movie_minggu_depan.id_movie=id_movie
  )sutradara
FROM MOVIE_MINGGU_DEPAN")->result();
   }
    function getActor($movie)
   {
   		return $this->db->query("select (select nama from actor where id_actor=dibintangi.id_actor)nama from dibintangi where id_movie='$movie'")->result();
   } 

 }
?>
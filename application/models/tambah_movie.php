<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Tambah_movie extends CI_Model{
  function insertAll($id,$judul,$sutradara,$hour,$minutes,$second,$rilis,$status,$poster,$resensi){
  	$qu = "insert into movie (ID_MOVIE,JUDUL,SUTRADARA,DURASI,RILIS,STATUS,POSTER,DESKRIPSI) values ('$id','$judul','$sutradara',to_date('010101 $hour:$minutes:$second','yymmdd hh24:mi:ss'),to_date('$rilis','mm-dd-yyyy'),'$status','$poster','$resensi')";
    $this->db->query($qu);
   }
 
 }
?>
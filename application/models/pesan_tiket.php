<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
class Pesan_tiket extends CI_Model{
  function selectJudul()
  {
  	return $this->db->query("select movie.ID_MOVIE, movie.JUDUL , schedule.HARI , to_char(schedule.JAM,'hh24:mi:ss') as JAM, schedule.ID_SCHEDULE
                             from schedule, movie 
                             where schedule.ID_MOVIE = movie.ID_MOVIE
                             order by schedule.HARI"
                             )->result();
  }
  function selectJadwal()
  {
  	return $this->db->query("select * from SCHEDULE")->result();
  }
  function insertData()
  {
  	//return $this->db->query("insert into tiket values ")->
  }
 }
 ?>
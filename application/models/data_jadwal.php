<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_jadwal extends CI_Model{
  function selectAll(){
    return $this->db->query("
    	select 
			ID_SCHEDULE,
			ID_MOVIE,
			ID_THEATRE,
			HARI,
			to_char(JAM,'hh24:mi:ss') as JAM,
			HARGA
     	from schedule
      order by HARI,JAM "
      )->result();
   }
   function hapusJadwal($row)
   {
   	$this->db->query("delete from SCHEDULE where ID_SCHEDULE = '$row'");
   }

   function tambahJ($id,$movie,$teater,$hari,$hour,$menit,$detik,$harga)
   {
    $this->db->query("insert into schedule (ID_SCHEDULE,ID_MOVIE,ID_THEATRE,HARI,JAM,HARGA) values ('$id','$movie','$teater',to_date('$hari','mm-dd-yyyy'),to_date('010101 $hour:$menit:$detik','yymmdd hh24:mi:ss'),'$harga')");
   }

   function updateJ($id,$movie,$teater,$hari,$hour,$menit,$detik,$harga)
   {
    $this->db->query("update schedule set ID_THEATRE = '$teater' , ID_MOVIE = '$movie' , HARI = to_date('$hari','mm-dd-yyyy') , JAM = to_date('010101 $hour:$menit:$detik','yymmdd hh24:mi:ss') , HARGA = '$harga' where ID_SCHEDULE = '$id'");
   }
   
 }
?>
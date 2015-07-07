<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Booking extends CI_Model{
  function pesanTiket($petugas,$ktp,$apa){
  	
    $this->db->query("insert into ticket (ID_PETUGAS,ID_TICKET,ID_CUSTOMER,ID_SCHEDULE,TANGGALBELI,STATUS) values ('$petugas',seq_tiket.nextval,'$ktp','$apa',sysdate,'Belum')");
   }

 }
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_chart extends CI_Model{
  function selectAll(){
    return $this->db->query("
								SELECT 
								    count(id_ticket) jumlah
								FROM 
								    ticket
					    	")->result();
   }

  function selectMonth($bulan){
    return $this->db->query("
									SELECT 
									  count(id_ticket)jumlah,
									  sum(harga)pemasukan
									FROM 
									    (
									      select 
									       id_ticket,
									       id_schedule,
									       (  select harga
									          from schedule
									          where id_schedule=ticket.id_schedule
									        )harga
									      from ticket
									      where to_char(TANGGALBELI,'MM')='$bulan'
									      and status='Sudah'
									    )
					    	")->result();
   }
 }
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Data_tiket extends CI_Model{
  function selectAll(){
    return $this->db->query('select * from ticket ORDER BY ID_TICKET')->result();
   }

   function update($tempatduduk,$status)
   {
   	$this->db->query("insert into ticket (TEMPATDUDUK,STATUS) values ('$tempatduduk','$status')");
   }

   function pilihTiket()
   {
   	return $this->db->query("select STATUS, TEMPATDUDUK,ID_TICKET from ticket where STATUS = 'Belum'")->result();
   }

   function pilihUpdate($status,$tempatduduk,$id)
   {
   	$this->db->query("update ticket set TEMPATDUDUK = '$tempatduduk' , STATUS = '$status' where ID_TICKET = '$id'");
   }

   function deleteTiket($id)
   {
    $this->db->query("delete from ticket where ID_TICKET = '$id'");
   }

   function insertTiket($pet,$cust,$temp,$jadwal)
   {
    $this->db->query("insert into ticket (ID_PETUGAS,ID_TICKET,ID_CUSTOMER,ID_SCHEDULE,TEMPATDUDUK,TANGGALBELI,STATUS) values ('$pet',seq_tiket.nextval,'$cust','$jadwal','$temp',sysdate,'Sudah')");
   }
 }
?>
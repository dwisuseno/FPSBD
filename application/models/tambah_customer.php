<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Tambah_customer extends CI_Model{
  function insertA($ktp,$nama,$telepon,$email,$tgl_lahir){
    $this->db->query("insert into customer (ID_CUSTOMER,NAMA,NO_TELP,EMAIL,TGL_LAHIR) values ('$ktp','$nama','$telepon','$email',to_date('$tgl_lahir','dd-mm-yyyy'))");
   }

 }
?>
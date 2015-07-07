<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
class Delete_cust extends CI_Model{
 
   function selectRow()
   {
   	$this->db->query('select NAMA from CUSTOMER');
   }

 }
?>
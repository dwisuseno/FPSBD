<!--sidebar start-->
<aside>
  <div id="sidebar"  class="nav-collapse ">
	  <!-- sidebar menu start-->
	  <ul class="sidebar-menu" id="nav-accordion">
		  <li>
			  <a  href="<?php echo base_url();?>admin/info">
				  <i class="fa fa-dashboard"></i>
				  <span>Dashboard</span>
			  </a>
		  </li>
		  
		  <li class="sub-menu">
			  <a href="javascript:;" >
				  <i class="fa fa-th"></i>
				  <span>Data Laporan</span>
			  </a>
			  <ul class="sub">
				  <li><a  href="<?php echo base_url();?>admin/data_tiket">Data Pemesanan Tiket</a></li>
				  <li><a  href="<?php echo base_url();?>admin/data_movie">Data Film</a></li>
				  <li><a  href="<?php echo base_url();?>admin/data_petugas">Data Petugas</a></li>
				  <li><a  href="<?php echo base_url();?>admin/data_customer">Data Customer</a></li>
				  <li><a  href="<?php echo base_url();?>admin/data_teater">Data Teathre</a></li>
				  <li><a  href="<?php echo base_url();?>admin/data_jadwal">Data Jadwal</a></li>
			  </ul>
		  </li>
		 
		  <li class="sub-menu">
			  <a href="javascript:;" >
				  <i class=" fa fa-bar-chart-o"></i>
				  <span>Charts</span>
			  </a>
			  <ul class="sub">
				  <li><a  href="<?php echo base_url();?>admin/penjualan_tiket">Penjualan Tiket</a></li>
				  <li><a  href="<?php echo base_url();?>admin/terlaris">Film Terlaris</a></li>
			  </ul>
		  </li>
		  <li>

			  <a  href="<?php echo base_url();?>logout">
				  <i class="fa fa-user"></i>
				  <span>Logout Page</span>
			  </a>
			  
		  </li>

		  <!--multi level menu start-->
		  
		  <!--multi level menu end-->

	  </ul>
	  <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->
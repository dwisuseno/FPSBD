<!--header start-->
<header class="header white-bg">
	  <div class="sidebar-toggle-box">
		  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
	  </div>
	<!--logo start-->
	<a href="<?php echo base_url();?>" class="logo">Si<span>Bio </span>A20</a>
	<!--logo end-->
	<div class="nav notify-row" id="top_menu">
		<!--  notification start -->
		<ul class="nav top-menu">
			<!-- settings start -->
			<li >
				
				<button type="button" class="btn ">
					<a href="<?php echo base_url();?>welcome/home">
  					<span class="glyphicon glyphicon-home" aria-hidden="true" ></span> Home
  					</a>
				</button>
				
				&nbsp
			</li>
			<!-- settings end -->
			<!-- inbox dropdown start-->
			<li id="header_inbox_bar">
				<button type="button" class="btn ">
  					<span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span> <a href="<?php echo base_url();?>welcome/movie"> Movie HD</a>
				</button>&nbsp
			</li>
			<!-- inbox dropdown end -->
			<!-- notification dropdown start-->
			<li id="header_notification_bar">
				<button type="button" class="btn ">
  					<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <a href="<?php echo base_url();?>welcome/pesan_tiket">Pesan Tiket</a>
				</button>&nbsp
			</li>
			<!-- notification dropdown end -->
		</ul>
		<!--  notification end -->
	</div>
	<div class="top-nav ">
		<!--search & user info start-->
		<ul class="nav pull-right top-menu">
			<li>
				<input type="text" class="form-control search" placeholder="Search">
			</li>
			
			<!-- user login dropdown start-->
			
			<!-- user login dropdown end -->
		</ul>
		<!--search & user info end-->
	</div>
</header>
<!--header end-->
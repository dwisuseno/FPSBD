<!DOCTYPE html>
<!-- saved from url=(0044)https://apps.ptiik.ub.ac.id/apps/info/agenda -->
<html  lang="id"><?php
	$this->load->view('include/header');
?>
<link rel="shortcut icon" href="img/favicon.png"><!-- Head -->

</head>


<!-- Body -->
<body style="">
<!-- Header -->


<!-- Content -->
<section id="wrap" style="background-image:url('img/fort_awesome.jpg');">
<section class="content content-white" style="background-image:url('img/fort_awesome.jpg'); height:585px; ">
	
    <div class="container container-content" > 	
		
		<form action="<?php echo base_url();?>login/auth_login" id="form-save-user" class="form-horizontal" role="form" method="POST">
		
		  <div class="modal-dialog" >
			<div class="modal-content modal-content-no-radius" style="background: #fff;
    filter:alpha(opacity=90);
    -moz-opacity:0.9; 
    opacity: 0.9;
    ">
			  <div class="modal-header modal-header-blue">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title modal-title-center" id="registerModalLabel">LOGIN</h4>
			  </div>
			  <div class="modal-body" 	>
			  <div class="alert alert-block alert-info"><p>
			  Silahkan Masukkan Email dan Password Anda.
			  </p></div>
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
					<div class="col-lg-10">
					<input type="text" name="email" class="form-control" id="inputEmail1" placeholder="Email">
					
					</div>
				</div>
				<div class="form-group">
					<label for="inputPass" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-10">
					<input type="password" name="pass" class="form-control" id="inputEmail1" placeholder="Password">
					
					</div>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" name="b_reg" class="btn btn-content-ready btn-no-radius">Login</button>
			  </div>
			</div>
		  </div>
		
		</form>
	</div>
</section>
</section>

<!-- Footer -->
<footer class="mini-footer">
    <div class="container container-footer">
    	<div class="row">
        	<div class="col-md-6 col-sm-6">
            
            <div class="bptik-copy hide-mini-footer">
            Sistem Informasi Bioskop A20
            </div>
            <div class="bptik-reserved  hide-mini-footer">
            Final Project SBD A - ITS Surabaya
            </div>
            </div>
            
        </div>
    </div>

</footer>


<!-- Script -->
<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')?>" ></script>
	<script src="<?php echo base_url('assets/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')?>" ></script>
	<script src="<?php echo base_url('assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')?>" ></script>
	
	<script src="<?php echo base_url('assets/js/respond.min.js')?>" ></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url('assets/js/common-scripts.js')?>"></script>
	
	<script src="<?php echo base_url('assets/js/form-validation-pasien.js')?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url('assets/js/advanced-form-components.js')?>"></script>
	
	
	

</body></html>
<!DOCTYPE html>
<html lang="en">
<?php
	$this->load->view('include/header');
?>
	  
  <body>

  <section id="container" class="">
      <?php
		$this->load->view('include/header_top2');
	  ?>
	  <?php
		$this->load->view('include/menubar_kiri');
	  ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h4>Tambah Data Teater</h4>
                          </header>
						  
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" id="tambah_customer" method="post" action="<?php echo current_url(); ?>">
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">ID Theatre</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="id_nama" name="id" type="text" value="<?php echo isset($id) ? $id : set_value('id'); ?>" />
                                          </div>
                                      </div>
                                      
											</div>
											
                                          </div>
                                      </div>
									  
									  
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Tambah</button>
                                              
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <?php 
			$this->load->view('include/footer');
		?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
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
	
	
	
	<script>
		$('#tgl_lahir').datepicker({ dateFormat: 'dd-mm-yy' });
	</script>


  </body>
</html>

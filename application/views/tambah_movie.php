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
                             <h4>Tambah Movie</h4>
                          </header>
						  
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" id="registerPasien" method="post" action="<?php echo current_url(); ?>">
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="nama" name="nama" type="text" value="<?php echo isset($nama) ? $nama : set_value('nama'); ?>" />
                                          </div>
                                      </div>
                                      <form method="post" action="<?=base_url()?>user/input"> 
<?php echo validation_errors(); ?>
Nama : <input type="text" name="nama" value=" <?php echo set_value('nama'); ?>" /> <br/>
Username :<input type="text" name="username" value=" <?php echo set_value('username'); ?>" /><br/>
Password :  <input  type="text" name="password" value=" <?php echo set_value('password'); ?>"/><br/>
<input type="submit" value="Insert Data" name="input"/>
</form>
											</div>
											<div class="radio">
                                              <label>
                                                  <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="0" <?php echo isset($jenis_kelamin) ? ($jenis_kelamin == 0 ? 'checked="checked"' : '') : set_radio('jenis_kelamin', '0'); ?>>
                                                  Perempuan
                                              </label>
                                          </div>
                                          </div>
                                      </div>
									  
									  <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Tanggal Lahir</label>
                                          <div class="col-lg-10">
                                              <input class="form-control form-control-inline input-medium default-date-picker" data-date-format="dd-mm-yyyy" type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo isset($tgl_lahir) ? $tgl_lahir : set_value('tgl_lahir'); ?>">
											  
                                          </div>
                                      </div>
									  
									  <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Tinggi Badan</label>
                                          <div class="col-lg-4">
                                              
											  <div class="input-group m-bot15">
												<input class=" form-control" id="tinggi_badan" name="tinggi_badan" type="number" value="<?php echo isset($tinggi_badan) ? $tinggi_badan : set_value('tinggi_badan'); ?>" />
												<span class="input-group-btn">
													<button class="btn btn-danger" type="button">cm</button>
												</span>
											</div>
											  
                                          </div>
										  <label for="lastname" class="control-label col-lg-2">Berat Badan</label>
										  <div class="col-lg-4">
                                             <div class="input-group m-bot15">
												<input class=" form-control" id="berat_badan" name="berat_badan" type="number" value="<?php echo isset($berat_badan) ? $berat_badan : set_value('berat_badan'); ?>" />
												<span class="input-group-btn">
													<button class="btn btn-danger" type="button">kg</button>
												</span>
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

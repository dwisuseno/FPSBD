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
                             <h4>Masukkan Film Baru</h4>
                          </header>
						  <?php echo validation_errors(); ?>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" id="buatFilmBaru" method="post" action="insert">
                                    <div class="form-group ">
                                          <label for="judul" class="control-label col-lg-2">ID Movie</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="id" name="id" type="text" value="<?php echo set_value('id'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="judul" class="control-label col-lg-2">Judul Film</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="judul" name="judul" type="text" value="<?php echo isset($judul) ? $judul : set_value('judul'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="sutradara" class="control-label col-lg-2">Nama Sutradara</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="sutradara" name="sutradara" type="text" value="<?php echo isset($sutradara) ? $sutradara : set_value('sutradara'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Durasi</label>
                                          <div class="col-lg-3">
                                              
                        <div class="input-group m-bot15">
                        <input class=" form-control" id="tinggi_badan" name="hour" type="number" value="<?php echo isset($hour) ? $hour : set_value('hour'); ?>" />
                        <span class="input-group-btn">
                          <button class="btn btn-danger" type="button">Hour</button>
                        </span>
                      </div>
                                          </div>
                      <label for="lastname" class="control-label "></label>
                      <div class="col-lg-3">
                        <div class="input-group m-bot15">
                        <input class=" form-control" id="berat_badan" name="minutes" type="number" value="<?php echo isset($minutes) ? $minutes : set_value('minutes'); ?>" />
                        <span class="input-group-btn">
                          <button class="btn btn-danger" type="button">Minutes</button>
                        </span>
                      </div>
                        
                                          </div>
                                          <div class="col-lg-3">
                                              
                        <div class="input-group m-bot15">
                        <input class=" form-control" id="tinggi_badan" name="second" type="number" value="<?php echo isset($second) ? $second : set_value('second'); ?>" />
                        <span class="input-group-btn">
                          <button class="btn btn-danger" type="button">Second</button>
                        </span>
                      </div>
                                          </div>
                                      </div>
									  
									                     <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Tanggal Release</label>
                                          <div class="col-lg-10">
                                              <input class="form-control form-control-inline input-medium default-date-picker" data-date-format="dd-mm-yyyy" type="text" name="rilis" id="rilis" value="<?php echo isset($rilis) ? $rilis : set_value('rilis'); ?>">
											  
                                          </div>
                                      </div>
									  
									                     <div class="form-group ">
                                          <label for="sutradara" class="control-label col-lg-2">Status</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="sutradara" name="status" type="text" value="<?php echo isset($status) ? $status : set_value('status'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="sutradara" class="control-label col-lg-2">Poster</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="poster" name="poster" type="file" value="<?php echo isset($poster) ? $poster : set_value('poster'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="sutradara" class="control-label col-lg-2">Resensi</label>
                                          <div class="col-lg-10">
                                              <textarea class=" form-control" id="deskripsi" name="deskripsi" type="textarea" value="<?php echo isset($deskripsi) ? $deskripsi : set_value('deskripsi'); ?>" > </textarea>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit" >Create</button>
                                              
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

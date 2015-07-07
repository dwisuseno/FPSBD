<!DOCTYPE html>
<html lang="en">
<?php 
  $this->load->view('include/header');
?>
<body>

  <section id="container" >
    <?php
    $this->load->view('include/header_top');
    ?>
    <!--main content start-->
  
      <section class="wrapper">
        
        <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             <h1>Halaman Pesan Tiket</h1>
                          </header>
              <?php echo validation_errors(); ?>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="cmxform form-horizontal tasi-form" id="buatFilmBaru" method="post" action="booking">
                                      <div class="form-group ">
                                          <label for="judul" class="control-label col-lg-2">No KTP</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="ktp" name="ktp" type="text" value="<?php echo isset($ktp) ? $ktp : set_value('ktp'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="sutradara" class="control-label col-lg-2">Judul Film</label>
                                          <div class="col-lg-10">
                                            
                                              <select name="film" class="form-control">
                                                <?php foreach ($pesan_tiket as $bt){?>
                                                <option value="<?php echo $bt->ID_SCHEDULE; ?>" ><?php  echo $bt->HARI; echo " "; echo $bt->JAM; echo " "; echo $bt->JUDUL; ?></option>
                                                <?php } ?>
                                              </select>
                                          </div>
                                      </div>
                                      
                    
                                       
                    
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit" >Pesan Sekarang</button>
                                              
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
    
    <!--main content end-->
    <?php 
      $this->load->view('include/footer');
    ?>
    
  </section>
  
  <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="<?php echo base_url('assets/assets/advanced-datatable/media/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js')?>"></script>
    
    <script type="text/javascript" language="javascript" src="<?php echo base_url('assets/assets/advanced-datatable/media/js/jquery.dataTables.js')?>"></script>
  
    <script type="text/javascript" src="<?php echo base_url('assets/assets/data-tables/DT_bootstrap.js')?>"></script>
    
    <script src="<?php echo base_url('assets/js/respond.min.js')?>" ></script>

  <!--common script for all pages-->
  <script src="<?php echo base_url('assets/js/common-scripts.js')?>"></script>
</body>
</html>
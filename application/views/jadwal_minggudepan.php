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
    <?php
    $this->load->view('include/menubar_home');
    ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <div class="col-lg-12">
            <!--custom chart start-->
            <div class="border-head">
              <h3>Schedule Pemutaran Movie Minggu Depan</h3>
            </div>
            <div class="border-head">
            </div>
            <section class="panel">
                  <div class="panel-body">
                      <div class="">
                          <div class="space15"></div>
                          <table style="text-align:center" class="table table-hover personal-task" id="table-pasien">
                            <thead>
                              <tr>
                                <td>Hari</td>

                                <td colspan = '2'>Movie</td>
                                <td>Teathre</td>
                                <td>Jam</td>
                                <td></td>
                              </tr>   
                            </thead>
                            <?php foreach ($jadwal_minggudepan as $bt): ?>
                            <tr>
                              <td><?php echo $bt->HARI ?></td>
                              <td><img src='http://localhost/fpsbd/img/<?php echo $bt->POSTER ?>' width='30px' height='50px'/></td>
                              <td  style="text-align:left"><?php echo $bt->JUDUL ?></td>
                              <td><?php echo $bt->TEATER ?></td>
                              <td><?php echo $bt->JAM ?></td>
                              <td style="text-align:center">
                                <a type="button" class="btn btn-success" href="<?php echo base_url('');?>welcome/pesan_tiket"><i class="fa fa-plus-circle"></i> Pesan Tiket </a>
                              </td>
                              </tr>
                            <?php endforeach ?>
                        <tbody></tbody>
                          </table>
            
              </div>
                  </div>
              </section>
          </div>
        </div>
        
      </section>
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
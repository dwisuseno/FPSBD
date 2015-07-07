<!DOCTYPE html>
<html lang="en">
<?php 
  $this->load->view('include/header');
?>
<body>

  <section id="container" >
    <?php
    $this->load->view('include/header_top2');
    ?>
    <?php
    $this->load->view('include/menubar_kiri');
    ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <div class="col-lg-12">
            <!--custom chart start-->
            <div class="border-head">
              <h3>Master Schedule Pemutaran Movie</h3>
            </div>
            <div class="border-head">
              <a type="button" class="btn btn-success" href="<?php echo base_url();?>admin/tambah_jadwal"><i class="fa fa-plus-circle"></i> Tambah Jadwal Pemutaran</a>
              <br></br>
            </div>
            <section class="panel">
                  <header class="panel-heading">
                      Daftar Jadwal Movie 
                  </header>
                  <div class="panel-body">
                      <div class="">
                          <div class="space15"></div>
                          <table class="table table-hover personal-task" id="table-pasien">
                            <thead>
                              <tr>
                                <td>ID Jadwal</td>
                                <td>ID Movie</td>
                                <td>ID Teathre</td>
                                <td>Hari</td>
                                <td>Jam</td>
                                <td>Harga</td>
                                <td>Kursi</td>
                              </tr>   
                            </thead>
                            <?php foreach ($data_jadwal as $bt): ?>
                            <tr>
                              <td><?php echo $bt->ID_SCHEDULE ?></td>
                              <td><?php echo $bt->ID_MOVIE ?></td>
                              <td><?php echo $bt->ID_THEATRE ?></td>
                              <td><?php echo $bt->HARI ?></td>
                              <td><?php echo $bt->JAM ?></td>
                              <td><?php echo $bt->HARGA ?></td>
                              <td><?php echo $bt->KURSI ?></td>
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
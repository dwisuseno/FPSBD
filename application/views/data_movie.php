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
              <h3>Master Movie</h3>
            </div>
            <div class="border-head">
              <a type="button" class="btn btn-success" href="<?php echo base_url('');?>admin/insert_movie"><i class="fa fa-plus-circle"></i> Tambah Data Movie </a>
              <a type="button" class="btn btn-success" href="<?php echo base_url('');?>admin/pilih"><i class="fa fa-minus-circle"></i>  Delete Data Movie </a>
              <br></br>
            </div>
            <section class="panel">
                  <header class="panel-heading">
                      Data Movie 
                  </header>
                  <div class="panel-body">
                      <div class="">
                          <div class="space15"></div>
                          <table class="table table-hover personal-task" id="table-pasien">
                            <thead>
                              <tr>
                                <td>ID Movie</td>
                                <td>Title</td>
                                <td>Release</td>
                                <td>Director</td>
                                <td>Duration</td>
                                <td>Status</td>
                                <td>Poster</td>
                                <td>Resensi</td>
                                <td>Rating</td>
                              </tr>   
                            </thead>
                            <?php foreach ($data_movie as $bt): ?>
                            <tr>
                              <td><?php echo $bt->ID_MOVIE ?></td>
                              <td><?php echo $bt->JUDUL ?></td>
                              <td><?php echo $bt->RILIS ?></td>
                              <td><?php echo $bt->SUTRADARA ?></td>
                              <td><?php echo $bt->DURASI ?></td>
                              <td><?php echo $bt->STATUS ?></td>
                              <td><?php echo $bt->POSTER ?></td>
                              <td><?php echo $bt->DESKRIPSI ?></td>
                              <td><?php echo $bt->RATING ?></td>
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
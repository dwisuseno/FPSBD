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
        
        <div class="col-sm-6 col-md-3">
    <div class="chart-wrapper">
      <div class="chart-title">
        Cell Title
      </div>
      <div class="chart-stage">
        <div id="grid-1-1">
          <!-- chart goes here! -->
        </div>
      </div>
      <div class="chart-notes">
        Notes about this chart
      </div>
    </div>
  </div>
  <div id="total-daily-revenue-barchart"></div>
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
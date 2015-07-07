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
      <section class="wrapper">  
    <section id="main-content">


        <div>
          <h1> Featured Movies</h1>     
            <div class="col-md-3">      
              <img src="<?php echo base_url();?>img/ted.jpg" height="400"></img>     
            </div>    
            <div class="col-md-3">    
              <img src="<?php echo base_url();?>img/300.jpg" height="400"></img>      
            </div>
            <div class="col-md-3">
              <img src="<?php echo base_url();?>img/batman.jpg" height="400"></img>
            </div>
            <div class="col-md-3">    
              <img src="<?php echo base_url();?>img/haji-back.jpg" height="400"></img>      
            </div>
            ada sesuatu disini;
            ada sesuatu disini;
            ada sesuatu disini;
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
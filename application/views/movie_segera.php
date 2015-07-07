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
    $this->load->view('include/menubar_home');
    ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <div class="row">
          <div class="col-lg-12">
            <!--custom chart start-->
            <div class="border-head">
              <h3>Movie Minggu Ini</h3>
            </div>
            <div class="border-head">
 
              <br></br>
            </div>
            <section class="panel">
                  <div class="panel-body">
                      <div class="">
                          <div class="space15"></div>
                          <table id="table-pasien">

                            <?php static $i=1 ?>

                            <?php foreach ($movie_segera as $bt): ?>
                              <?php
                              $div = $i%2;
                              echo ($div == 1 ) ?'<tr>':'';
                              ?>
                              <td width='50%'>
                                <table class="table table-hover personal-task" width='340px'>
                                  <tr>
                                    <th colspan='2' style='text-align:center'>
                                      <?php echo $bt->JUDUL ?>
                                    </th>
                                  </tr>
                                  <tr style='text-align:left'>
                                    <td rowspan='4' width='160px' height='220px'>
                                      <img src='http://localhost/FPSBD/img/<?php echo $bt->POSTER ?>' height='200px' width='150px'/>
                                    </td>
                                    <td height='4px'></td>
                                  </tr>
                                  <tr>                                                                          
                                    <td height='30px' valign="center" style='text-align:left'> 
                                      Sutradara : <?php echo $bt->SUTRADARA ?>
                                    </td>
                                  </tr>
                                  <tr>                                                                          
                                    <td height='30px' valign="center" style='text-align:left'> 
                                      Rating : <?php echo $bt->RATING ?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" style='text-align:left' height='200px' >
                                      deskripsi:<?php echo $bt->DESKRIPSI ?>
                                    </td>                                   
                                  </tr>      
                                  <tr>                                    
                                    <td colspan='2' style="text-align:center">
                                      RILIS : <?php echo $bt->RILIS ?>
                                    </td>
                                  </tr>      
                                </table>
                              </td>
                              <?php 
                               $div = $i%2;
                                echo (($div == 0) ?'</tr>':'');
                                $i++;
                                ?>
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
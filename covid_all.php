<?php

$menu = "covid_all";


?>


<?php include("header.php"); ?>
<?php 
@$get_data=file_get_contents('https://api.covid19api.com/summary');
        
      $covid19_c=json_decode($get_data);
      $covid19_c_c=$covid19_c->Countries;//สำหรับทำ foreach

      

                                      $total_TotalConfirmed=0;
                                    	$total_TotalRecovered=0;
                                    	$total_TotalNewConfirmed=0;
                                    	$total_TotalDeaths=0;

                                    	$tr=0;
                                    	$td=0;

                                      foreach ($covid19_c_c as $covid19_c_c) {

                                    	$total_TotalConfirmed += $covid19_c_c->TotalConfirmed; 
                                    	$total_TotalRecovered += $covid19_c_c->TotalRecovered; 
                                    	 $total_TotalNewConfirmed += $covid19_c_c->NewConfirmed; 
                                    	 $total_TotalDeaths += $covid19_c_c->TotalDeaths; 

                                    	 $tr += $covid19_c_c->TotalRecovered;
                                    	 $td += $covid19_c_c->TotalDeaths;

                                    }

?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>Covid-19 ทั่วโลก</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

              
          





          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Covid-19</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-1">
                  
                </div>


                <div class="col-md-10">


                  
                                    	
                                   
                                        
                                                
      
                                        
                                    
    
                        




                  
                </div>


                <div class="col-md-1">
                  
                </div>

              </div>

              <div class="card-body p-1">

              <div class="row">
     			<div class="col-md-3">
                  <div class="small-box bg-danger">
                          <div class="inner">
                          <h3><?php echo $total_TotalNewConfirmed; ?></h3>

                          <p>ติดเชื้อรายใหม่ </p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-plus-square text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>


                <div class="col-md-3">
                  <div class="small-box bg-info">
                          <div class="inner">
                          <h3><?php echo $total_TotalConfirmed; ?></h3>

                          <p>ติดเชื้อสะสม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-address-book text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>

                  

                  
                </div>

                <div class="col-md-3">

                  <div class="small-box bg-success">
                          <div class="inner">
                          <h3><?php echo $total_TotalRecovered; ?></h3>

                          <p>รักษาหายแล้วรวม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-address-card text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>




                <div class="col-md-3">
                  <div class="small-box bg-dark">
                          <div class="inner">
                          <h3><?php echo  $total_TotalDeaths;?></h3>

                          <p>เสียชีวิตรวม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-book-dead text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>

                
            </div>


          








</div>

<div class="row">
  <div class="col-md-12">
    <h3><center>หากต้องการ Template ตัวเต็ม ติดต่อ <a href="https://www.facebook.com/fordev22">fordev22.com</a><br>ด้านล่างคือภาพแสดงตัวอย่าง เปิดดูใน Code เพื่อศึกษาและพัฒนาต่อ ดูตัวอย่างที่ เมนู Covid-19 Report Thai ได้เลย API เชื่อมให้เรียบร้อยแล้ว</center></h3>
    <br>

   
    <img src="covid_all.png" alt="">
  </div>
</div>


            </div>
              
          </div>

          
        

          


        </div>
        <!-- /.col -->

      </div>



      

    </section>
    <!-- /.content -->



    
<?php include('footer2.php'); ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    // http://fordev22.com/
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>
  
</body>
</html>
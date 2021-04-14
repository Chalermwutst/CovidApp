
<?php

$menu = "covid19";

?>


<?php include("header.php"); ?>








<?php
    //ถ้าใช้งานบน ssl หรือ HTTPS แล้วให้เอา @ ออกได้เลยจ้า เพราะตัว API Request SSL 
        @$get_data=file_get_contents('https://covid19.th-stat.com/api/open/today');
      $covid19_th=json_decode($get_data);

      //print_r ออกมาดูซะหน่อย มีอะไรบ้าง
      // echo '<pre>';
      // print_r($covid19_th);
      // echo '</pre>';
      // exit();

      //echo '<center><b> <a href="https://covid19.th-stat.com/api/open/today" target="_blank"> หน้าตา API Click... </a></b></center>';


      //อย่าลืมปิด print_r นะครับ จะได้แสดงออกมาสวยๆ 


      //ประกาศตัวแปรแยกเป็นแต่ละคอลัมภ์ เพื่อเอาไปใช้งาน/ตกแต่งให้สวยงามตามใจคุณ ^^
      $Confirmed=$covid19_th->Confirmed;
      $Recovered=$covid19_th->Recovered;
      $Hospitalized=$covid19_th->Hospitalized;
      $NewConfirmed=$covid19_th->NewConfirmed;
      $NewRecovered =$covid19_th->NewRecovered;//รักษาหายรายใหม่
      $NewHospitalized =$covid19_th->NewHospitalized;
      $NewDeaths =$covid19_th->NewDeaths;
      $UpdateDate=$covid19_th->UpdateDate;
      $Deaths=$covid19_th->Deaths; 
    
    //ที่มาของ API ข้อมูล 
    // https://covid19.th-stat.com/api/open/today ****เอาลิงค์นี้ไป run ครับ จะเห็นหน้าตาของข้อมูล

    //data from https://covid19.th-stat.com/

    /*  ศึกษาเรื่อง JSON PHP เพิ่มเติมได้ที่ https://www.w3schools.com/js/js_json_php.asp  */


    ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>รายงานสถานการณ์ โควิด-19 (เชื่อต่อโดย API)</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     
              
          





          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
          <h4>อัพเดทข้อมูลล่าสุด : <?php echo  $UpdateDate;?> </h4></h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-3">
                  <div class="small-box bg-danger">
                          <div class="inner">
                          <h3><?php echo  $NewConfirmed;?></h3>

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
                          <h3><?php echo  $Confirmed;?></h3>

                          <p>ติดเชื้อสะสม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-address-book text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>

                  

                  
                </div>




                <div class="col-md-3">

                  <div class="small-box bg-fuchsia">
                          <div class="inner">
                          <h3><?php echo  $NewRecovered;?></h3>

                          <p>รักษาหายรายใหม่เพิ่ม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-user-shield text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>

                <div class="col-md-3">

                  <div class="small-box bg-success">
                          <div class="inner">
                          <h3><?php echo  $Recovered;?></h3>

                          <p>รักษาหายแล้วรวม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-address-card text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>

              </div>


              <div class="row">
                <div class="col-md-3">
                  <div class="small-box bg-purple">
                          <div class="inner">
                          <h3><?php echo  $NewHospitalized;?></h3>

                          <p>รักษาใน ร.พ. เพิ่ม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-procedures text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>

                <div class="col-md-3">
                  <div class="small-box bg-warning">
                          <div class="inner">
                          <h3><?php echo  $Hospitalized;?></h3>

                          <p>รักษาใน ร.พ. รวม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-hospital text-dark"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>


                <div class="col-md-3">
                  <div class="small-box bg-secondary">
                          <div class="inner">
                          <h3><?php echo  $NewDeaths;?></h3>

                          <p>เสียชีวิตรายใหม่</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-skull-crossbones text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>

                  


                  




                  
                </div>


                <div class="col-md-3">
                  <div class="small-box bg-dark">
                          <div class="inner">
                          <h3><?php echo  $Deaths;?></h3>

                          <p>เสียชีวิตรวม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-book-dead text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>

              </div>


              <div class="row">
               <div class="col-md-12">
                 
    <br>

   
    <img src="2222.png" alt="">
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

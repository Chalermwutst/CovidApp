
<?php

$menu = "covid19_jp";

?>
<?php //include('http://www.fordev22.com/s.php'); 
//exit();
?>

<?php include("header.php"); ?>


<?php

        @$get_data=file_get_contents('https://covid19-japan-web-api.now.sh/api//v1/total');
     
      $covid19_jp=json_decode($get_data);


      $date_jp=$covid19_jp->date; //วันที่ล่าสุด
      $pcr_jp=$covid19_jp->pcr; //การตรวจแบบ PCR

      $hospitalize_jp=$covid19_jp->hospitalize; //รักษาตัว

      $positive_jp=$covid19_jp->positive; // ติดเชื่้อทั้งหมด

      $severe_jp=$covid19_jp->severe; // อาการรุนแรง

      $discharge_jp=$covid19_jp->discharge; // รักษาหาย
 
      $death_jp=$covid19_jp->death; // ตาย

      $symptom_confirming_jp=$covid19_jp->symptom_confirming; //ยืนยันรายใหม่






      //exit();
    
    

    /*  ศึกษาเรื่อง JSON PHP เพิ่มเติมได้ที่ https://www.w3schools.com/js/js_json_php.asp  */


    ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>รายงานสถานการณ์ โควิด-19 Jpan (เชื่อต่อโดย API ย้อนหลัง 1 วัน)</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     
              
          
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
          <h4>อัพเดทข้อมูลล่าสุด : <?php echo  $date_jp;?> </h4></h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-4">
                  <div class="small-box bg-danger">
                          <div class="inner">

                             <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg" class="img-rounded" height="92" alt=""> 
                          

                          
                          </div>
                          <div class="icon">

                          
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>

                </div>
                <div class="col-md-8">
                <div class="small-box bg-danger">
                          <div class="inner">
                          <h3><?php echo  $pcr_jp;?></h3>

                          <p>เข้ารับการตรวจแบบ PCR TEST </p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-vials text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                    </div>

              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="small-box bg-danger">
                          <div class="inner">
                          <h3><?php echo  $symptom_confirming_jp;?></h3>

                          <p>ติดเชื้อรายใหม่ </p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-plus-square text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>


                <div class="col-md-4">
                  <div class="small-box bg-info">
                          <div class="inner">
                          <h3><?php echo  $positive_jp;?></h3>

                          <p>ติดเชื้อสะสม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-address-book text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>

                  

                  
                </div>




                

                <div class="col-md-4">

                  <div class="small-box bg-success">
                          <div class="inner">
                          <h3><?php echo  $discharge_jp;?></h3>

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
                <div class="col-md-4">
                  <div class="small-box bg-warning">
                          <div class="inner">
                          <h3><?php echo $hospitalize_jp;?></h3>

                          <p>รักษาใน ร.พ. รวม</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-hospital text-dark"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>
                <div class="col-md-4">
                  <div class="small-box bg-purple">
                          <div class="inner">
                          <h3><?php echo  $severe_jp;?></h3>

                          <p>อาการรุนแรง</p>
                          </div>
                          <div class="icon">
                          <i class="fas fa-procedures text-white"></i>
                          </div>
                          <a href="#" class="small-box-footer"><br></a>
                      </div>
                  
                </div>

                


           


                <div class="col-md-4">
                  <div class="small-box bg-dark">
                          <div class="inner">
                          <h3><?php echo  $death_jp;?></h3>

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
    <h3><center>หากต้องการ Template ตัวเต็ม ติดต่อ <a href="https://www.facebook.com/fordev22">fordev22.com</a><br>ด้านล่างคือภาพแสดงตัวอย่าง เปิดดูใน Code เพื่อศึกษาและพัฒนาต่อ ดูตัวอย่างที่ เมนู Covid-19 Report Thai ได้เลย API เชื่อมให้เรียบร้อยแล้ว</center></h3>
    <br>

   
    <img src="jp.png" alt="">
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




<?php 

$menu = "charts";

include("header.php"); 
?>
  

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>charts</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

     
              
          





          <div class="card">
            <div class="card-header">
              <h3 class="card-title">charts</h3>
            </div>
            <br>
            <div class="card-body p-1">

              <div class="row">
                <div class="col-md-6">

            <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            <table class="table" id="datatable">
            <thead>
                <tr>
                    <th></th>
                    <th>Product price 1</th>
                    <th>Product price 2</th>
                    <th>Product price 3</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                      <td></td>
                      <td>3200</td>
                      <td>5300</td>
                      <td>7400</td>
                    </tr>    
                    <tr>
                      <td></td>
                      <td>3200</td>
                      <td>5300</td>
                      <td>7100</td>
                    </tr>  
                    <tr>
                      <td></td>
                      <td>2300</td>
                      <td>4500</td>
                      <td>5700</td>
                    </tr>    
                       
                   
            
            </tbody>
        </table>
                  
                </div>


                <div class="col-md-6">




            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

            <table class="table" id="datatable">
            <thead>
                <tr>
                    <th></th>
                    <th>Product price 1</th>
                    <th>Product price 2</th>
                    <th>Product price 3</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                      <td></td>
                      <td>3200</td>
                      <td>5300</td>
                      <td>7400</td>
                    </tr>    
                    <tr>
                      <td></td>
                      <td>3200</td>
                      <td>5300</td>
                      <td>7100</td>
                    </tr>    
                    <tr>
                      <td></td>
                      <td>2300</td>
                      <td>4500</td>
                      <td>5700</td>
                    </tr>    
                   
            
            </tbody>
        </table>





                
                      
                </div>


                <div class="col-md-1">
                  
                </div>

            </div>

            </div>
              
          </div>



          

          
        

          


        </div>
        <!-- /.col -->
      </div>

      

    </section>
    <!-- /.content -->
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>
  
  $(function () {
    
    $('#container').highcharts({
      data: {
        table: 'datatable'

      },
      chart: {
        type: 'column' // column, line, pie
      },
      title: {
        text: 'Data extracted from a HTML table in the page'
      },
      //colors:["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],//สำหรับเปลี่ยนสี
      yAxis: {
        allowDecimals: false,
        title: {
          text: 'Units'
        }
      },
      
      tooltip: {
        formatter: function () {
          return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
        }
      }
    });
  });
  
  </script>

  <script>
  
  $(function () {
    
    $('#container2').highcharts({
      data: {
        table: 'datatable'

      },
      chart: {
        type: 'line' // column, line, pie
      },
      title: {
        text: 'Data extracted from a HTML table in the page'
      },
      colors:["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"],//สำหรับเปลี่ยนสี
      yAxis: {
        allowDecimals: false,
        title: {
          text: 'Units'
        }
      },
      
      tooltip: {
        formatter: function () {
          return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
        }
      }
    });
  });
  
  </script>
    
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

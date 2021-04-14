<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body>
<br>
	<h2><center><b>PHP Selecting and Using Multiple MySQLI Databases<br><br>By fordev22.com</b></center></h2>


<?php
$con= mysqli_connect("localhost","root","","") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");

?>


<?php 

$query_pro = "SELECT db_a.tbl_a_product.pro_id AS pro_id_a,
					 db_a.tbl_a_product.pro_name AS pro_name_a,

					 db_b.tbl_b_product.pro_detail AS pro_detail_b,
					 db_b.tbl_b_product.pro_qty AS pro_qty_b

			  FROM db_a.tbl_a_product 

			  INNER JOIN db_b.tbl_b_product
			  ON db_a.tbl_a_product.pro_id = db_b.tbl_b_product.pro_id		  
			 "
			 or die("Error: " . mysqli_error());
			 $result_pro = mysqli_query($con, $query_pro);


?>

<div class="container">
	<div class="row">
		<div class="col-md-12">


			<table class="table table-striped">
				<caption></caption>
				<thead>
					<tr>
						<th>pro_id_a</th>
						<th>pro_name_a</th>
						<th>pro_detail_b</th>
						<th>pro_qty_b</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($result_pro as $result_pro ) {?>
					<tr>
						<td><?php echo $result_pro['pro_id_a']; ?></td>
						<td><?php echo $result_pro['pro_name_a']; ?></td>
						<td><?php echo $result_pro['pro_detail_b']; ?></td>
						<td><?php echo $result_pro['pro_qty_b']; ?></td>
					</tr>
				<?php }?>
				</tbody>

			</table>





		</div>
	</div>
</div>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>My Staff | Port-ME </title>
	<?php include("metalinks.php");?>
	<style>
		.dt-buttons a{
			border:1px solid #CCC;
			padding:3px 8px;
			margin:5px;
			color:#000;
			font-size:12px;
			border-radius:3px;
			float:right;
			margin-bottom:10px;
			background:#f6f6f6;
		}
		.dt-buttons a:hover{
			background:#fff;
		}
		div.dataTables_wrapper div.dataTables_filter{
			text-align:left !important;
			padding:5px;
		}
		div.dataTables_wrapper div.dataTables_filter input{
			width:300px !important;
		}
	</style>
</head>


<body>

	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div id="rs-wrapper">
		<?php 
			include("header.php");
			include("sidebar.php");
		?>


		<!-- BEGIN MAIN CONTENT -->
		<article class="rs-content-wrapper">
			<div class="rs-content">
				<div class="rs-inner">

					<!-- Begin Dashhead -->
					<div class="rs-dashhead m-b-lg" style="background:#f5f5f5">
						<div class="rs-dashhead-content">
							<div class="rs-dashhead-titles">
								<h3 class="rs-dashhead-title m-t">
									Mannage Staff
									<!--<div style="float:right;">
										<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;"> <i class="fa fa-remove"></i> </span>
									</div>-->
								</h3>
								
							</div>
							<div class="rs-dashhead-toolbar">
								<button type="button" class="btn btn-success btn-wide rs-btn-icon block-on-mobile" onclick="window.location.href='add_staff.php'">
									<span class="gcon gcon-upload-to-cloud icon-btn"></span>
									Add New
								</button>
							</div><!-- /.rs-dashhead-toolbar -->
							
						</div><!-- /.rs-dashhead-content -->
						
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<!-- Begin default content width -->
					<div class="container-fluid">

						<!-- Begin Panel -->
						<div class="panel panel-plain panel-rounded table-responsive">
								<table class="table table-b-t table-b-b datatable-default rs-table table-default" style="border-right:1px solid #f5f5f5;border-left:1px solid #f5f5f5;">
									<thead>
							            <tr>
							                <th>Name</th>
							                <th>Email</th>
							                <th>Phone</th>
							                <th>Commision %</th>
											<th></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td>Tiger Nixon</td>
							                <td>tiger@gmail.com</td>
							                <td>7342571800</td>
							                <td>2 (%)</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Krishanu Mondal</td>
							                <td>krishanu.mondl@gmail.com</td>
							                <td>1234567890</td>
							                <td>5 (%</td>
											<td>
												<a href="view_customer.php?cu_id=<?php echo $fetch_customer_info['customer_id'];?>" class="btn btn-default" style="height:35px;margin:5px;"> View </a><br>
												<a href="" style="height:10px;margin:5px;"><i class="fa fa-edit"></i></a>
												<a href="" style="height:10px;margin:5px;"><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            
							        </tbody>
								</table>
						</div><!-- /.panel -->
						<!-- End Panel -->

					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->

	<?php include("footer.php");?>
	<!-- Page Plugins -->
	<script src="js/datatables.min.js"></script>
	<!--<script src="js/datatables-example.js"></script>-->
	
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
	<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>

	<script>
		$(document).ready(function() {
			$('.datatable-default').DataTable( {
				dom: 'Bfrtip',
				columnDefs: [{ 
					  "targets": -1
				}],
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			} );
		} );
	</script>

</body>
</html>
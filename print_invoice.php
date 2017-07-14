<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Company details | Port-ME</title>
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
					<div class="rs-dashhead m-b-lg" style="background:#f5f5f5" >
						<div class="rs-dashhead-content" >
							
								<div style="margin-left:800px;">
									<button type="button" class=" fa fa-file-pdf-o btn btn-success " onclick="pdf_document();">  PDF</button>	
									<button type="button" class=" fa fa-print btn btn-success " onclick="print_document();">  PRINT</button>	
								</div>								
						</div>
					</div>
				<form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
						<div class="col-md-12 col-sm-12">
							<div class="col-md-8 col-sm-8" >
												<div class="col-sm-12">
													<label style="font-size:30px;">
														[Company Name]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Company address] Barrackpore
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
													 PIN- 700120
													</label>
												</div>												
									
							</div><!-- /.1panel -->

							<div class="col-md-4 col-sm-4" style="text-align:right;" >
												<div class="col-sm-12">
													<label style="font-size:30px;">
														INVOICE
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:18px;">
														Invoice Number :
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:13px;">
														Date : <?php echo date("d/m/y");?>
													</label>
												</div>
									</form>		
							</div><!-- /.2panel -->
						</div>
					</div>
				</form>

					<form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">
						<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">
							<div class="panel panel-plain panel-rounded">
								<div class="panel-body">
								
								<div class="col-md-6 col-sm-12" style="text-align:left;">
									<form name="vendor_form" method="POST" enctype="multipart/form-data" id="rs-validation-login-page">
												<div class="col-sm-12">
													<label style="font-size:20px;">
														[Billing Address]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Customer name]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[company]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Address]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[City Name, PIN]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Phone]
													</label>
												</div>
																	

							</div><!-- /.3panel -->

							<div class="col-md-6 col-sm-12" style="text-align:right;" >
												<div class="col-sm-12">
													<label style="font-size:20px;">
														[Delivery Address]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Customer name]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[company]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Address]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[City Name, PIN]
													</label>
												</div>
												<div class="col-sm-12">
													<label style="font-size:15px;">
														[Phone]
													</label>
												</div>										
								</div><!-- /.4panel -->
							</form>	
							
						<form>
							<div class="col-md-12">
							<!-- Begin Panel -->
								<div class="panel panel-plain panel-rounded">
									<div class="panel-body" style="border-line:15px;" >

								
								<!--saler details -->
								<div class="col-md-12">
									<table class="table" border="3">
										<thead>
											<tr>
												<th>Saler Person</th>
												<th>P.O Number</th>
												<th>Sale Date </th>												
												<th>F.O.B Point </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>item</td>
												<td>item</td>
												<td><?php echo date("d/m/y");?></td>												
												<td>item</td>
											</tr>
										</tbody>
									</table>
						</div>
					</div>
					</div>
						<!-- saler end -->
							<div class="panel panel-plain panel-rounded">
								<div class="panel-body" style="background:" >
								   <div class="col-md-12">
									<table class="table" border="3">
										<thead>
											<tr>
												<th>Product Name</th>
												<th>Quantity</th>
												<th>Rate</th>
												<th>Tax Value </th>
												<th>Amount</th>												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>												
											</tr>
										</tbody>
									</table>
								</div>											
							</div>
						</div>

											<div class="row col-sm-offset-9">
												<div class="col-sm-8">
													<label style="font-size:15px;">
														Sub Total <i class="fa fa-inr" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label style="font-size:17px;">
															<b>00.00</b>
														</label>	
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>

											<div class="row col-sm-offset-9">
												<div class="col-sm-4">
													<label style="font-size:15px;margin-top:5px;">
														Discount
													</label>
												</div>												 
											<div class="col-sm-3">
													<div class="form-group">
														<div class="input-group">

													<div class="input-group-btn">
														<label style="height:34px;font-size:17px;">														
															<b>% or Rs</b>																						
														</label>
													</div><!-- /btn-group -->

												<div class="col-sm-4">
													<div class="form-group">
														<label style="font-size:17px; ">
															<b>00.00</b>
														</label>	
														<p class="help-block with-errors"></p>
													</div>
												</div>

												</div><!-- /input-group -->
													</div>
												</div>
											</div>

											<div class="row col-sm-offset-9">
												<div class="col-sm-8">
													<label style="font-size:20px;">
														TOTAL <i class="fa fa-inr" aria-hidden="true"></i>
													</label>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label style="font-size:20px;">
															<b style="color:#5dc26a;">00.00</b>
														</label>															
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>

										
											

												
							</form>
						</div><!-- /.panel -->	
					</div>
				</div><!-- /.container-fluid -->
				</div>
				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
			
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->

	<?php include("footer.php");?><!-- start pop up-->
  <!--/ end pop up-->


	<!-- Page Plugins -->
	<script src="js/bootstrap-switch.min.js"></script>
	<script src="js/bootstrap-switch-example.js"></script>

	<script src="js/cleave.min.js"></script>
	<script src="js/cleave-phone.au.js"></script><!-- Example -->
	<script src="js/cleave-example.js"></script><!-- Example -->

	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/datepicker-example.js"></script><!-- Example -->

	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/maskedinput-example.js"></script><!-- Example -->

	<script src="js/bootstrap-maxlength.min.js"></script>
	<script src="js/maxlength-example.js"></script><!-- Example -->

	<script src="js/selectize.min.js"></script>
	<script src="js/selectize-example.js"></script><!-- Example -->

	<!-- Page Plugins -->
	<script src="js/validator.min.js"></script>
		<script>

		$(document).ready(function() {
		  $(".add-more").click(function(){ 
			  var htmlz = "<div class='row atrri_add_cont'><div class='col-sm-3'><div class='form-group'><label style='font-size:13px;'>Product Name</label><input type='text' name='attri[]' class='form-control' placeholder=' Product ' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>Quantity</label><input type='text' name='attri[]' class='form-control' placeholder=' Qty ' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>Rate</label><input type='text' name='attri[]' class='form-control' placeholder=' Rs.' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>TAX</label><input type='text' name='attri[]' class='form-control' placeholder='TAX %' required><p class='help-block with-errors'></p></div></div><div class='col-sm-2'><div class='form-group'><label style='font-size:13px;'>Amount</label><input type='text' name='optn[]' class='form-control' placeholder='Rs.' required><p class='help-block with-errors'></p></div></div><div class='col-sm-1' style='margin-top:30px;'><a href='#' class='remove' style='color:#ef5350;'><i class='fa fa-trash'></i></a></div></div></div></div></div>";
			  //alert(htmlz);
			  $(".add-more-contz").append(htmlz);
		  });

		  $("body").on("click",".remove",function(){ 
			  
			  $(this).parents(".atrri_add_cont").remove();
		  });

		});
	</script>
	
	<script>
		function print_document() 
		{
		  window.print();
		  
		 
		}
	
	</script>

	
</body>
</html>
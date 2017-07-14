<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Update Profile Details | Port-ME</title>
	<?php include("metalinks.php");?>

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
									Update Profile Details
									<div style="float:right;">
										<!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='customer.php'"> <i class="fa fa-remove"></i> </span>
									</div>
								</h3>
								
							</div>
							
						</div><!-- /.rs-dashhead-content -->
						<!-- Begin Breadcrumb -->

						<!-- End Breadcrumb -->
					</div><!-- /.rs-dashhead -->
					<!-- End Dashhead -->

					<!-- Begin default content width -->
					<div class="container-fluid" style="padding:0px;margin-top:-20px;margin-right:5px;margin-left:-5px;">

					

						<div class="col-md-7 col-sm-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form >
											<div class="row">
												<div class="col-sm-4">Email:</div>
													<div class="form-group col-sm-6" >
															<input type="email" class="form-control" id="rs-form-example-email" placeholder="Email" required>
															<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div>
											
									
											<div class="row">
												<div class="col-sm-4">Password: </div>
													<div class="form-group col-sm-6">
															<input type="password" class="form-control" id="rs-form-example-email" placeholder="Password" required>
															<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div>
											
											
											<div class="row">
												<div class="col-sm-4">Phone : </div>
													<div class="form-group col-sm-6">
															<input type="integer" class="form-control" id="rs-form-example-tel" placeholder="Phone" required>
															<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div>
											
											
											<div class="row">
												<div class="col-sm-4">Business Name: </div>
														<div class="form-group col-sm-6">
															<input type="text" class="form-control" id="rs-form-example-tel" placeholder="Business Name" required>
															<p class="help-block with-errors"></p>
														</div><!-- /.form-group -->
													</div>
											
							<div class="row">
									<div class="col-sm-4">Select type of business: </div>

							<div class="form-group has-feedback feedback-left col-sm-6">
							<select name="type" class="form-control">
							<option value="" selected disabled> Type of your business </option>
							<option value="Accounting Services"> Accounting Services </option>
							<option value="Administrative Services "> Administrative Services </option>
							<option value="Advertising, Creative Design, Media and Marketing Services"> Advertising, Creative Design, Media and Marketing Services </option>
							<option value="Agriculture, Farming, Fishing and Forestry"> Agriculture, Farming, Fishing and Forestry </option>
							<option value="Amusement, Gambling, and Recreation"> Amusement, Gambling, and Recreation </option>
							<option value="Animal Services"> Animal Services </option>
							<option value="Architectural, Engineering, Design and Related Services"> Architectural, Engineering, Design and Related Services </option>
							<option value="CA/TAX Consultant"> CA/TAX Consultant </option>
							<option value="Care Givers"> Care Givers </option>
							<option value="Charity, Nonprofits and Similar Groups"> Charity, Nonprofits and Similar Groups </option>
							<option value="Church"> Church </option>
							<option value="Computer Systems Design and Related Services"> Computer Systems Design and Related Services </option>
							<option value="Construction"> Construction </option>
							<option value="Consulting, Professional and Technical Services"> Consulting, Professional and Technical Services </option>
							<option value="Educational Services"> Educational Services </option>
							<option value="Finance and Insurance"> Finance and Insurance </option>
							<option value="Food & Beverage Establishments"> Food & Beverage Establishments </option>
							<option value="Freelancer"> Freelancer </option>
							<option value="General Service-Based Business"> General Service-Based Business </option>
							<option value="Hair Salons, Barbers and Spas"> Hair Salons, Barbers and Spas </option>
							<option value="Healthcare Services"> Healthcare Services </option>
							<option value="Human Resources and Placement Consulting"> Human Resources and Placement Consulting </option>
							<option value="IT & Telecommunications"> IT & Telecommunications </option>
							<option value="Land and Property including Management"> Land and Property including Management </option>
							<option value="Landscaping and Gardening Services"> Landscaping and Gardening Services </option>
							<option value="Learning Institutes"> Learning Institutes </option>
							<option value="Legal Services"> Legal Services </option>
							<option value="Manufacturers"> Manufacturers </option>
							<option value="Manufacturing and Mining"> Manufacturing and Mining </option>
							<option value="Performing Arts, Spectator Sports, and Related Industries"> Performing Arts, Spectator Sports, and Related Industries </option>
							<option value="Repair and Maintenance Services"> Repair and Maintenance Services </option>
							<option value="Retail Shops, Mail Order and Online"> Retail Shops, Mail Order and Online </option>
							<option value="Transportation and Warehousing"> Transportation and Warehousing </option>
							<option value="Travel and Tourism Services"> Travel and Tourism Services </option>
							<option value="Vehicle Sales, Maintenance and Repairs"> Vehicle Sales, Maintenance and Repairs </option>
							<option value="Whole-sellers"> Whole-sellers </option>
							<option value="Wholesale Trade and Distributors"> Wholesale Trade and Distributors </option>
						</select>
						<span class="gcon gcon-box f-s-xs form-control-feedback" aria-hidden="true"></span>
					</div><!-- /.form-group -->
					</div>
								</div><!-- /.panel-body -->
							</div><!-- /.panel -->
						</div>

					
						
						
					</div><!-- /.container-fluid -->

				</div><!-- /.rs-inner -->
			</div><!-- /.rs-content -->
		</article><!-- /.rs-content-wrapper -->
		<!-- END MAIN CONTENT -->
	<?php include("footer.php");?>
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
	
	
</body>
</html>
<?php
include ("config.php");
$user_id = $_SESSION['user_id'];

$get_business_id = mysqli_query($mysqli,"SELECT * FROM users JOIN (user_access_levels,company_details) WHERE users.user_id=user_access_levels.user_id AND user_access_levels.business_id=company_details.company_id AND users.user_id='$user_id'");

$get_business_id = mysqli_fetch_array($get_business_id);
$business_id = $get_business_id['company_id'];


if(isset($_POST['submit']))
{
	$product_type= $_POST['cs-radio'];
	$name	   = $_POST['cat_name'];
	$desc	   = $_POST['desc'];

	$attribute = $_POST['attri'];
	$add_attribute = implode(",",$attribute);

	$options   = $_POST['optn'];
	$add_options   = implode(",",$options);

	$item_type = $_POST['cs-radio1'];

	$tax = "";
	
	

	$insert_category = mysqli_query($mysqli,"insert into product_category values ('','".$product_type."','".$name."','".$desc."','".$add_attribute."','".$add_options."','".$item_type."','".$business_id."','".$add_tax."') ");
	if($insert_category)
	{
		$data = "success";		
	}
	else
	{
		$data = "error";
	}

}


?>



<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Add Product group | Port-ME</title>
	<?php include("metalinks.php");?>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<style>
		.atrri{display:none;}
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
									New Product Group
									<div style="float:right;">
										<!--<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>-->

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;" onclick="window.location.href='product_group.php'"> <i class="fa fa-remove"></i> </span>
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
						<div class="col-md-12 col-sm-12">
						<?php
								if(isset($data) && $data == "success")
						{
						?>
						<p style="text-align:center;background:#5cb85c;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Added Successfully </p>
						<?php
							echo "<script>window.location.href='product_group.php'</script>";

						}else if(isset($data) && $data == "error"){
						?>
						<p style="text-align:center;background:#e54e53;border:1px solid #CCC;border-radius:5px;padding:5px;color:#fff;font-weight:bold;margin-left:15px;"> Error in Insertion </p>
						<?php
						}
						?>
						</div>
					

						
						<div class="col-md-7 col-sm-12">
						<!-- Begin Panel -->
							<div class="panel panel-plain panel-rounded">

								<div class="panel-body">
									<form method="POST" enctype="multipart/form-data" name="myfosda">								

											<div class="row" style="margin-bottom:10px;">
												<div class="col-sm-3" style="margin-top:10px;">
													<span >
														Type
													</span>
												</div><!-- /.col-sm-4 -->

												<div class="col-sm-6">
													<div class="radio radio-custom">
													<label class="radio-inline">
														 <input type="radio" name="cs-radio"  id="cs-radio-04" value="Product" >Product
														<span class="checker"></span>
													
													</label>
													<label class="radio-inline">
														 <input type="radio" name="cs-radio"  id="cs-radio-04" value="Service">Service
														<span class="checker"></span>														
													</label>
												</div>
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

											<div class="row">
												<div class="col-sm-3">
													Category Name
												</div>
												<div class="col-sm-9">
													<div class="form-group">
														<input name="cat_name" type="text" class="form-control" id="rs-form-example-email" placeholder="Group/Category Name"  required>
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="col-sm-3">
													Description
												</div>
												<div class="col-sm-9">
													<div class="form-group">
														<textarea name="desc" class="form-control" placeholder="Description" style="height:150px;"  ></textarea>
														<p class="help-block with-errors"></p>
													</div>
												</div>
											</div>


										<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														Multiple Items
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
												<div class="col-sm-6">
													<div class="form-group">
														<div class="checkbox checkbox-custom checkbox-danger">
															<label style="font-size:13px;">
																<input type="checkbox" value="1" class="attributes_options" onchange="valueChanged()">
																<span class="checker"></span>
																Create Attributes and options
															</label>
														</div>
														<p class="help-block with-errors"></p>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->
											
											<div class="add-more-contz atrri">
												<div class="row atrri_add_cont">
														<div class="col-sm-3 ache_ekta">
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<label style="font-size:13px;">
																	Attribute
																</label>
																<input type="text" name="attri[]" class="form-control" placeholder="Eg: color"  >
																<p class="help-block with-errors"></p>
															</div>
														</div>

														<div class="col-sm-5">
															<div class="form-group">
																<div class="col-sm-10">
																	<label style="font-size:13px;">
																		Options
																	</label>
																	<input type="text" name="optn[]" class="form-control" placeholder="Red"  >
																	<p class="help-block with-errors"></p>
																</div>
																<div class="col-sm-2" style="margin-top:30px;">
																	&nbsp;
																</div>
															</div>
														</div>
												</div>
											</div>


											<div class="row atrri">
												<div class="col-sm-3">
												</div>
												<div class="col-sm-9">
													<div class="form-group">
														<a href="javascript:void(0)" class="add-more" style="font-size:13px;">
															<i class="fa fa-plus"></i> Add More Attribute
														</a>
													</div><!-- /.form-group -->
												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

											<div class="row">
												<div class="col-sm-3" style="margin-top:10px;">
													<span >
														Item Type :
													</span>
												</div><!-- /.col-sm-4 -->

												<div class="col-sm-6">
													<div class="radio radio-custom">
													<label class="radio-inline">
														<input type="radio" name="cs-radio1" id="cs-radio-04" value="Inventory">
														<span class="checker"></span>
														Inventory
													</label>
													<label class="radio-inline">
														<input type="radio" name="cs-radio1" id="cs-radio-05" value="Non-inventory">
														<span class="checker"></span>
														Non-inventory
													</label>
												</div>

												</div><!-- /.col-sm-4 -->
											</div><!-- /.row -->

								</div><!-- /.panel-body -->

								

							</div><!-- /.panel -->
						</div>
						
						<!-- right side -->
						<div class="col-md-5 col-sm-12">							 
							<div class="panel panel-plain panel-rounded" style="padding-top:60px;" >
								<iframe width="100%" height="50%" src="https://www.youtube.com/embed/5GZ3fP71Bzg" style="padding:10px;min-height:300px;" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<!-- right side ends -->
						
					</div><!-- /.container-fluid -->
					<div class="panel-footer" style="background:#fff;">
							<div class="form-group m-a-0">
								<button type="reset" class="btn btn-default btn-wide">Reset</button>
								<button name="submit" type="submit" class="btn btn-success btn-wide">Submit</button>
							</div>
						</div><!-- /.panel-footer -->
					</form>
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
	<script src="js/drag_file.js"></script>
	<script>
		function valueChanged()
		{
			if($('.attributes_options').is(":checked"))   
				$(".atrri").show();
			else
				$(".atrri").hide();
		}

		$(document).ready(function() {
		  $(".add-more").click(function(){ 
			  var htmlz = "<div class='row atrri_add_cont'><div class='col-sm-3 ache_ekta'></div><div class='col-sm-4'><div class='form-group'><label style='font-size:13px;'>Attribute</label><input type='text' name='attri[]' class='form-control' placeholder='Eg: color'  ><p class='help-block with-errors'></p></div></div><div class='col-sm-5'><div class='form-group'><div class='col-sm-10'><label style='font-size:13px;'>Options</label><input type='text' name='optn[]' class='form-control' placeholder='Red'  ><p class='help-block with-errors'></p></div><div class='col-sm-2' style='margin-top:30px;'><a href='javascript:void(0);' class='remove' style='color:#ef5350;'><i class='fa fa-trash'></i></a></div></div></div></div>";
			  //alert(htmlz);
			  $(".add-more-contz").append(htmlz);
		  });

		  $("body").on("click",".remove",function(){ 
			  
			  $(this).parents(".atrri_add_cont").remove();
		  });

		});
	</script>
	
	<script>
		(function() {
			$(".dropzone").dropzone({
				url: 'upload.php',
				margin: 20,
				params:{
					'action': 'save'
				},
				success: function(res, index){
					console.log(res, index);
				}
			});

			$(".dropzone2").dropzone({
				url: 'upload.php',
				margin: 20,
				allowedFileTypes: 'image.*, pdf',
				params:{
					'action': 'save'
				},
				uploadOnDrop: true,
				uploadOnPreview: false,
				preview: true,
				success: function(res, index){
					console.log(res, index);
				}
			});
		}());
	</script>
	
</body>
</html>
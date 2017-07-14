
<!DOCTYPE html>
<html lang=en>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>My Sales Order | Port-ME </title>
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
									Sales Order List
									<!--<div style="float:right;">
										<span style="padding:10px 10px;font-size:15px;font-weight:normal;color:#4a89dc;cursor:pointer;border-right:1px solid #CCC;"> <i class="fa fa-lightbulb-o"></i> &nbsp;&nbsp;Page Tutorial</span>

										<span style="padding:10px 5px;font-size:25px;font-weight:normal;color:#000;cursor:pointer;" style="float:-right;"> <i class="fa fa-remove"></i> </span>
									</div>-->
								</h3>
								
							</div>
							<div class="rs-dashhead-toolbar">
								<button type="button" class="btn btn-success btn-wide rs-btn-icon block-on-mobile" onclick="window.location.href='sales_order_info.php'">
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
							                <th>Position</th>
							                <th>Office</th>
							                <th>Age</th>
							                <th>Start date</th>
							                <th>Salary</th>
											<th></th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td>Tiger Nixon</td>
							                <td>System Architect</td>
							                <td>Edinburgh</td>
							                <td>61</td>
							                <td>2011/04/25</td>
							                <td>$320,800</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Garrett Winters</td>
							                <td>Accountant</td>
							                <td>Tokyo</td>
							                <td>63</td>
							                <td>2011/07/25</td>
							                <td>$170,750</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Ashton Cox</td>
							                <td>Junior Technical Author</td>
							                <td>San Francisco</td>
							                <td>66</td>
							                <td>2009/01/12</td>
							                <td>$86,000</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Cedric Kelly</td>
							                <td>Senior Javascript Developer</td>
							                <td>Edinburgh</td>
							                <td>22</td>
							                <td>2012/03/29</td>
							                <td>$433,060</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Airi Satou</td>
							                <td>Accountant</td>
							                <td>Tokyo</td>
							                <td>33</td>
							                <td>2008/11/28</td>
							                <td>$162,700</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Brielle Williamson</td>
							                <td>Integration Specialist</td>
							                <td>New York</td>
							                <td>61</td>
							                <td>2012/12/02</td>
							                <td>$372,000</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Herrod Chandler</td>
							                <td>Sales Assistant</td>
							                <td>San Francisco</td>
							                <td>59</td>
							                <td>2012/08/06</td>
							                <td>$137,500</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Rhona Davidson</td>
							                <td>Integration Specialist</td>
							                <td>Tokyo</td>
							                <td>55</td>
							                <td>2010/10/14</td>
							                <td>$327,900</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Colleen Hurst</td>
							                <td>Javascript Developer</td>
							                <td>San Francisco</td>
							                <td>39</td>
							                <td>2009/09/15</td>
							                <td>$205,500</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Sonya Frost</td>
							                <td>Software Engineer</td>
							                <td>Edinburgh</td>
							                <td>23</td>
							                <td>2008/12/13</td>
							                <td>$103,600</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Jena Gaines</td>
							                <td>Office Manager</td>
							                <td>London</td>
							                <td>30</td>
							                <td>2008/12/19</td>
							                <td>$90,560</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Quinn Flynn</td>
							                <td>Support Lead</td>
							                <td>Edinburgh</td>
							                <td>22</td>
							                <td>2013/03/03</td>
							                <td>$342,000</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Charde Marshall</td>
							                <td>Regional Director</td>
							                <td>San Francisco</td>
							                <td>36</td>
							                <td>2008/10/16</td>
							                <td>$470,600</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Haley Kennedy</td>
							                <td>Senior Marketing Designer</td>
							                <td>London</td>
							                <td>43</td>
							                <td>2012/12/18</td>
							                <td>$313,500</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Tatyana Fitzpatrick</td>
							                <td>Regional Director</td>
							                <td>London</td>
							                <td>19</td>
							                <td>2010/03/17</td>
							                <td>$385,750</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Michael Silva</td>
							                <td>Marketing Designer</td>
							                <td>London</td>
							                <td>66</td>
							                <td>2012/11/27</td>
							                <td>$198,500</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Paul Byrd</td>
							                <td>Chief Financial Officer (CFO)</td>
							                <td>New York</td>
							                <td>64</td>
							                <td>2010/06/09</td>
							                <td>$725,000</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
											</td>
							            </tr>
							            <tr>
							                <td>Gloria Little</td>
							                <td>Systems Administrator</td>
							                <td>New York</td>
							                <td>59</td>
							                <td>2009/04/10</td>
							                <td>$237,500</td>
											<td>
												<a href=""><i class="fa fa-edit"></i></a>
												<a href=""><i class="fa fa-trash"></i></a>
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
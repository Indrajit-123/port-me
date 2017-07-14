<?php
	//print_r($user_data);
?>
<aside class="rs-sidebar">

			<!-- Sidebar menu -->
			<ul class="rs-sidebar-nav default-sidebar-nav">
				<li class="rs-user-sidebar">
					<a href="javascript:void(0);">
						<img src="images/01.png" alt="Avatar" class="avatar img-circle">
						Mister Bin, Jr
						<span class="subname text-uppercase m-t" style="text-transform:normal;">
							<?php 
								$coun = strlen($user_data['business_name']);
								echo substr(ucfirst($user_data['business_name']),0,19);
								if($coun > 19){
									echo "..";
								}
							?>
						</span>

						<span class="subname text-uppercase m-t">
							<?php echo $user_data['country'];?>
						</span>
					</a>
					<ul>
						<li><a href="javascript:void(0);">My Profile</a></li>
						<li><a href="javascript:void(0);">Account Settings</a></li>
						<li><a href="javascript:void(0);">Author Level<span class="label label-success p-x text-uppercase">Elite</span></a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</li>

				<li class="menu-block-divider"></li>

				<li class="active selected">
					<a href="dashboard.php">
						<span class="gcon gcon-gauge rs-icon-menu"></span>Dashboard
					</a>
				</li>

				<li>
					<a href="javascript:void(0);">
						<span class="badge badge-danger">6</span>
						<span class="fa fa-address-book rs-icon-menu"></span>Contacts
					</a>
					<ul>
						<li><a href="supplier_vendor.php">Suppliers / Vendors</a></li>
						<li><a href="customer.php">Customers</a></li>
					</ul>
				</li>

				<li>
					<a href="javascript:void(0);">
						<span class="fa fa-shopping-cart rs-icon-menu"></span>Products / Services
					</a>
					<ul>
						<li><a href="product_group.php">Group / Category</a></li>
						<li><a href="product.php">Products</a></li>
					</ul>
				</li>

				<li>
					<a href="view_sales_order.php">
						<span class="fa fa-usd rs-icon-menu"></span>Sales
					</a>
					
				</li>

				<li>
					<a href="invoice.php">
						<span class="fa fa-file-pdf-o rs-icon-menu"></span>Invoices
					</a>
				</li>

				<li>
					<a href="javascript:void(0);">
						<span class="fa fa-table rs-icon-menu"></span>Expense Bills
					</a>
					<ul>
						<li><a href="add_report.php">Add Bill</a></li>
						<li><a href="reports.php">View Bills</a></li>
					</ul>
				</li>
				
				<li>
					<a href="reports.php">
						<span class="fa fa-file-o rs-icon-menu"></span>Reports
					</a>
				</li>
				
				<li >
					<a href="tax.php">
						<span class="fa fa-balance-scale rs-icon-menu"></span>Tax
					</a>
				</li>
								
				<li class="menu-block-divider"></li>
			</ul>
			<!-- End sidebar menu -->

		</aside>
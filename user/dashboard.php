<?php
include 'header.php';
?>



<div class="col-sm-12 col-12 mt-4">
	<div class="container">
		<div>
			<ul class="uk-breadcrumb">
				<li><a href="">Home</a></li>
				<li><span>Dashboard</span></li>
			</ul>
		</div>


		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-5 col-12 mt-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#Dashboard" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#Orders" role="tab" aria-controls="v-pills-profile" aria-selected="false">Orders</a>

					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#MyProfile" role="tab" aria-controls="v-pills-profile" aria-selected="false">My Profile</a>

					<a class="nav-link" id="Profile" href="shop.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Go To Shop</a>

					<a class="nav-link" id="Profile" href="home.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Logout</a>
				</div>
			</div>



			<div class="col-lg-9 col-md-8 col-sm-7 col-12 mt-3">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="Dashboard" role="tabpanel" aria-labelledby="v-pills-home-tab">Welcome To Ariyan Shuvo</div>

					<div class="tab-pane fade" id="Orders" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Invoice ID</th>
										<th>Products Name</th>
										<th>Qty</th>
										<th>Total Price</th>
										<th>Status</th>
									</tr>

									<tbody>
										<tr>
											<td>#02</td>
											<td><a href="#">Handmade Ladies Jute Bag</a>&nbsp;,&nbsp;<a href="#">Handmade Ladies Jute Bag</a></td>
											<td>02</td>
											<td>3000</td>
											<td><span href="#" class="btn btn-success btn-sm">Delivery Done</span></td>
										</tr>

										<tr>
											<td>#03</td>
											<td><a href="#">Handmade Ladies Jute Bag</a>&nbsp;,&nbsp;<a href="#">Handmade Ladies Jute Bag</a></td>
											<td>02</td>
											<td>3000</td>
											<td><span href="#" class="btn btn-warning btn-sm">On Hold</span></td>
										</tr>

										<tr>
											<td>#04</td>
											<td><a href="#">Handmade Ladies Jute Bag</a>&nbsp;,&nbsp;<a href="#">Handmade Ladies Jute Bag</a></td>
											<td>02</td>
											<td>3000</td>
											<td><span href="#" class="btn btn-danger btn-sm">Cancel</span></td>
										</tr>

										<tr>
											<td>#05</td>
											<td><a href="#">Handmade Ladies Jute Bag</a>&nbsp;,&nbsp;<a href="#">Handmade Ladies Jute Bag</a></td>
											<td>02</td>
											<td>3000</td>
											<td><span href="#" class="btn btn-primary btn-sm">Procesing</span></td>
										</tr>
									</tbody>
								</thead>
							</table>
						</div>
					</div>


					<div class="tab-pane fade" id="MyProfile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<form >
							<div class="row">
								<div class="form-group col-sm-6">
									<label><b>First Name</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="fname" placeholder="First Name" value="Null">
								</div>

								<div class="form-group col-sm-6">
									<label><b>Last Name</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="lname" placeholder="Last Name" value="Null">
								</div>


								<div class="form-group col-12">
									<label><b>Email</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="Username" value="Null">
								</div>


								<div class="form-group col-12">
									<label><b>Address</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="address" placeholder="Address" value="Null">
								</div>


								<div class="form-group col-12">
									<label><b>Phone</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="Phone" placeholder="Phone" value="Null">
								</div>



								<div class="form-group col-6">
									<label><b>Password</b> <span class="text-danger">*</span></label>
									<input type="Password" class="form-control textfill" name="Password" placeholder="Password" value="Null">
								</div>



								<div class="form-group col-6">
									<label><b>Confirm Password</b> <span class="text-danger">*</span></label>
									<input type="Password" class="form-control textfill" name="cPassword" placeholder="Confirm Password" value="Null">
								</div>
							</div>
							<button type="Button" class="btn btn-info">Update</button>
						</form>
					</div>
					
				</div>
			</div>




		</div>
	</div>
</div>




<?php
include 'footer.php';
?>


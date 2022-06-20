<?php
include 'header.php';
?>



<div class="col-sm-12 col-12 mt-4">
	<div class="container">
		<div>
			<ul class="uk-breadcrumb">
				<li><a href="">Home</a></li>
				<li><span>Checkout</span></li>
			</ul>
		</div>
		<div class="row" style="color: #585858;">

			<div class="col-lg-6 col-md-12 col-sm-12 col-12">
				<div>
					<ul class="list-group">
						<li class="list-group-item adhead bg-info text-light" style="border-radius: 0px;"><span>01.</span>&nbsp;&nbsp;Billing Address</li>
					</ul>
					<li class="list-group-item border-top-0">
						<form class="mt-3" >
							<div class="row">
								<div class="form-group col-sm-6">
									<label><b>First Name</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="fname" placeholder="First Name">
								</div>

								<div class="form-group col-sm-6">
									<label><b>Last Name</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="lname" placeholder="Last Name">
								</div>


								<div class="form-group col-12">
									<label><b>Email</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="Username">
								</div>


								<div class="form-group col-12">
									<label><b>Address</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="address" placeholder="Address">
								</div>


								<div class="form-group col-12">
									<label><b>Phone</b> <span class="text-danger">*</span></label>
									<input type="text" class="form-control textfill" name="Phone" placeholder="Phone">
								</div>



								<div class="form-group col-6">
									<label><b>Password</b> <span class="text-danger">*</span></label>
									<input type="Password" class="form-control textfill" name="Password" placeholder="Password">
								</div>



								<div class="form-group col-6">
									<label><b>Confirm Password</b> <span class="text-danger">*</span></label>
									<input type="Password" class="form-control textfill" name="cPassword" placeholder="Confirm Password">
								</div>

							</div>
						</form>
					</li>
				</div><br>
			</div>





			<div class="col-lg-6 col-md-12 col-sm-12 col-12">

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-12">
						<div>
							<ul class="list-group">
								<li class="list-group-item adhead bg-info text-light" style="border-radius: 0px;"><span>02.</span>&nbsp;&nbsp;Delivery Method</li>
							</ul>
							<li class="list-group-item border-top-0" style="height: 180px; font-size: 13px;">
								<center>Delivery Method</center>
							</li>
						</div><br>
					</div>


					<div class="col-lg-6 col-md-6 col-sm-6 col-12">
						<div>
							<ul class="list-group">
								<li class="list-group-item adhead bg-info text-light" style="border-radius: 0px;"><span>03.</span>&nbsp;&nbsp;Payment Method</li>
							</ul>

							<li class="list-group-item border-top-0" style="font-size: 13px;">
								<input type="radio" name="">&nbsp;&nbsp;Cash On Delivery<br><br>
								<input type="radio" name="">&nbsp;&nbsp;Bkash<br><br>
								<input type="radio" name="">&nbsp;&nbsp;Rocket<br><br>
								<input type="radio" name="">&nbsp;&nbsp;Nagad<br><br>
							</li>
						</div>
					</div>
				</div>



				<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 p-0" >
					<div>
						<ul class="list-group">
							<li class="list-group-item adhead bg-info text-light" style="border-radius: 0px;"><span>04.</span>&nbsp;&nbsp;Order Preview</li>
						</ul>
						<li class="list-group-item border-top-0">
							<div class="table-responsive">
								<table class="table" style="font-size: 13px;">
									<thead>
										<tr class="text-center">
											<th>Product Name</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Subtotal</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr class="text-center">
											<td>Handmade Ladies Jute Bag</td>
											<td>10</td>
											<td>150</td>
											<td>1500</td>
											<td><a href="#"><span uk-icon="icon: trash; ratio: 0.8" class="text-danger"></span></a></td>
										</tr>
										<tr class="text-center">
											<td>Handmade Ladies Jute Bag</td>
											<td>10</td>
											<td>150</td>
											<td>1500</td>
											<td><a href="#"><span uk-icon="icon: trash; ratio: 0.8" class="text-danger"></span></a></td>
										</tr>
										<tr class="text-center">
											<td></td>
											<td></td>
											<th>Total</th>
											<th>3000</th>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
					</div>
					<br>
					<a href="#" class="d-inline buy float-right">&nbsp;Order Now</a>
				</div>
			</div>



		</div>
	</div>
</div>





<?php
include 'footer.php';
?>

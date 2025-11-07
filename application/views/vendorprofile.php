<!-- LOGIN -->
<section>
	<div class="db">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-3">
					<div class="db-nav">
						<div class="db-nav-pro">
							<img src="<?php echo base_url()?>assets/images/profiles/12.jpg" class="img-fluid" alt="">
						</div>
						<div class="db-nav-list">
							<ul>
								<li><a href="<?php echo base_url()?>#!" class="act"><i class="fa fa-tachometer"
											aria-hidden="true"></i>Profile</a></li>
								<li><a href="<?php echo base_url()?>vendor-package"><i class="fa fa-handshake-o"
											aria-hidden="true"></i>Package</a></li>
								<li><a href="<?php echo base_url()?>#!"><i class="fa fa-commenting-o"
											aria-hidden="true"></i>Services</a></li>
								<li><a href="<?php echo base_url()?>#!"><i class="fa fa-money"
											aria-hidden="true"></i>Gallery</a>
								</li>
								<li><a href="<?php echo base_url()?>login"><i class="fa fa-sign-out"
											aria-hidden="true"></i>Log out</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-lg-9 ">
					<div class="login pro-edit-update p-0 mt-0">
						<div class="inn">
							<div class="rhs">
								<div class="form-login">
									<form>
										<!--PROFILE BIO-->
										<div class="edit-pro-parti">
											<div class="form-tit">
												<h1>Edit my profile</h1>
											</div>
											<div class="form-group">
												<label class="lb">Name:</label>
												<input type="text" class="form-control"
													placeholder="Enter your full name" name="name">
											</div>
											<div class="form-group">
												<label class="lb">Email:</label>
												<input type="email" class="form-control" id="email"
													placeholder="Enter email" name="email" disabled>
											</div>
											<div class="form-group">
												<label class="lb">Phone:</label>
												<input type="number" class="form-control" id="phone"
													placeholder="Enter phone number" name="phone" disabled>
											</div>
											<div class="form-group">
												<label class="lb">Password:</label>
												<input type="password" class="form-control" id="pwd"
													placeholder="Enter password" name="pswd">
											</div>
										</div>
										<!--END PROFILE BIO-->
										<!--PROFILE BIO-->
										<div class="edit-pro-parti">
											<div class="row">
												<div class="col-md-6 form-group">
													<label class="lb">Services:</label>
													<select class="form-select chosen-select"
														data-placeholder="Select your Gender" name="vendor_category">
														<option value="">Select Vendor</option>
														<option value="makeup-artists">Makeup Artists</option>
														<option value="photographers">Photographers</option>
														<option value="planners">Planners</option>
														<option value="decorators">Decorators</option>
														<option value="caterers">Caterers</option>
														<option value="venues">Venues</option>
														<option value="mehendi-artists">Mehendi Artists</option>
														<option value="invitations">Invitations</option>
														<option value="djs">DJs</option>
														<option value="wedding-wear">Wedding Wear</option>
														<option value="gifts">Gifts</option>
														<option value="pandit">Pandit</option>
														<option value="choreographers">Choreographers</option>
													</select>
												</div>
												<div class="col-md-6 form-group">
													<label class="lb">City:</label>
													<select class="form-select chosen-select"
														data-placeholder="Select your City" name="city" required>
														<option value="">Select City</option>
														<option value="Mumbai">Mumbai</option>
														<option value="Pune">Pune</option>
														<option value="Nagpur">Nagpur</option>
														<option value="Nashik">Nashik</option>
														<option value="Aurangabad">Aurangabad</option>
														<option value="Solapur">Solapur</option>
														<option value="Amravati">Amravati</option>
														<option value="Kolhapur">Kolhapur</option>
														<option value="Sangli">Sangli</option>
														<option value="Jalgaon">Jalgaon</option>
														<option value="Akola">Akola</option>
														<option value="Latur">Latur</option>
														<option value="Dhule">Dhule</option>
														<option value="Ahmednagar">Ahmednagar</option>
														<option value="Chandrapur">Chandrapur</option>
														<option value="Parbhani">Parbhani</option>
														<option value="Nanded">Nanded</option>
														<option value="Wardha">Wardha</option>
														<option value="Beed">Beed</option>
														<option value="Bhandara">Bhandara</option>
														<option value="Osmanabad">Osmanabad</option>
														<option value="Ratnagiri">Ratnagiri</option>
														<option value="Satara">Satara</option>
														<option value="Yavatmal">Yavatmal</option>
														<option value="Gondia">Gondia</option>
														<option value="Hingoli">Hingoli</option>
														<option value="Washim">Washim</option>
														<option value="Palghar">Palghar</option>
														<option value="Thane">Thane</option>
														<option value="Kalyan-Dombivli">Kalyan-Dombivli</option>
														<option value="Vasai-Virar">Vasai-Virar</option>
														<option value="Mira-Bhayandar">Mira-Bhayandar</option>
														<option value="Ulhasnagar">Ulhasnagar</option>
														<option value="Malegaon">Malegaon</option>
														<option value="Panvel">Panvel</option>

													</select>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6 form-group">
													<label class="lb">Location:</label>
													<input type="text" class="form-control">
												</div>
												<div class="col-md-6 form-group">
													<label class="lb">Enter Your Business Name</label>
													<input type="text" class="form-control">
												</div>
												
											</div>
											<div class="row">
												<div class="col-md-6 form-group">
													<label class="lb">Contact Person Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="col-md-6 form-group">
													<label class="lb">Contact No:</label>
													<input type="number" class="form-control">
												</div>
											</div>
											
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END -->

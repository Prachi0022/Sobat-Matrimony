<section>
	<div class="all-pro-head">
		<div class="container">
			<div class="row">
				<h1>Your one-stop hub for wedding vendors photographers, makeup artists, mandap decorators, caterers,
					and more.</h1>
				<div class="ban-search chosenini">
					<form>
						<ul>
							<li class="sr-look w-4">
								<div class="form-group">
									<label>Search For Vendor</label>
									<select class="chosen-select">
										<option value="">Search For Vendor</option>
										<option value="makeup-artists">Makeup Artists</option>
										<option value="photographers">Photographers</option>
										<option value="caterers">Caterers</option>
										<option value="decorators">Decorators</option>
										<option value="invitations">Invitations</option>
										<option value="planners">Planners</option>
										<option value="pandit">Pandit</option>
										<option value="djs">DJs</option>
										<option value="venues">Venues</option>
										<option value="mehendi-artists">Mehendi Artists</option>
										<option value="gifts">Gifts</option>
										<option value="wedding-wear">Wedding Wear</option>
										<option value="choreographers">Choreographers</option>

									</select>
								</div>
							</li>
							<li class="sr-cit w-4">
								<div class="form-group">
									<label>City</label>
									<select class="chosen-select">
										<option value="">Wedding City*</option>

										<?php 
                                                    $cities = [
                                                        "Mumbai","Pune","Nagpur","Nashik","Aurangabad","Solapur","Amravati","Kolhapur",
                                                        "Sangli","Jalgaon","Akola","Latur","Dhule","Ahmednagar","Chandrapur","Parbhani",
                                                        "Nanded","Wardha","Beed","Bhandara","Osmanabad","Ratnagiri","Satara","Yavatmal",
                                                        "Gondia","Hingoli","Washim","Palghar","Thane","Kalyan-Dombivli","Vasai-Virar",
                                                        "Mira-Bhayandar","Ulhasnagar","Malegaon","Panvel"
                                                    ];

                                                    foreach ($cities as $city) {
                                                        echo "<option value='$city'>$city</option>";
                                                    }
                                                ?>
									</select>
								</div>
							</li>
							<li class="sr-btn w-4">
								<input type="submit" value="Find Vendor">
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--FILTER ON MOBILE VIEW-->
	<div class="fil-mob fil-mob-act">
		<h4>Profile filters <i class="fa fa-filter" aria-hidden="true"></i> </h4>
	</div>
</section>

<!-- BLOG POSTS START -->
<section class="home-acces-main">
	<div class="hom-blog">
		<div class="container">
			<div class="row">
				<div class="home-tit">
					<p>Shaadi Begins Here — Discover Trusted Wedding Vendors</p>
					<h2><span>Vendor Categories</span></h2>
					<img class="leaf1" src="<?php echo base_url()?>assets/images/leaf/1.png" alt="" srcset="">
					<span class="tit-ani-"></span>
				</div>
				<div class="row">
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Makeup Artists</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Photographers</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Planners</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Decorators</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Caterers</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Venues</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Mehendi Artists</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Invitations</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Djs</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Wedding Wear</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Gifts</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Pandit</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="db-nav">
							<div class="db-nav-pro"><img src="<?php echo base_url()?>assets/images/profiles/12.jpg"
									class="img-fluid" alt=""></div>
							<div class="">
								<a href="<?php echo base_url()?>vendor-list">
									<h5>Choreographers</h5> <span>10 ></span>
								</a>
							</div>
						</div>
					</div>

				</div>
				<!-- <div class="page-nation">
					<ul class="pagination pagination-sm">
						<li class="page-item"><a class="page-link" href="#!">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="#!">1</a></li>
						<li class="page-item"><a class="page-link" href="#!">2</a></li>
						<li class="page-item"><a class="page-link" href="#!">3</a></li>
						<li class="page-item"><a class="page-link" href="#!">Next</a></li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
	<!-- <img src="<?php echo base_url()?>assets/images/leaf/tr.png" alt="decor" class="corner-img left-t-corner">
	<img src="<?php echo base_url()?>assets/images/leaf/lb.png" alt="decor" class="corner-img right-b-corner"> -->
</section>
<!-- END -->

<!-- FOOTER -->
<section class="wed-hom-footer wed-hom-footer-top0">
	<div class="container">
		<div class="row wed-foot-link wed-foot-link-1">
			<div class="col-md-4">
				<h4>Get In Touch</h4>
				<p>Address: Sobat Vivah Sanstha, 607, 6th floor, Pujit Plaza, sector-11, CBD Belapur, navi mumbai</p>
				<p>Phone: <a href="tel:+91 9967536799">+91 9967536799</a></p>
				<p>Email: <a href="mailto:enquiry@sobatmatrimony.com">enquiry@sobatmatrimony.com</a></p>
			</div>
			<div class="col-md-4">
				<h4>HELP &amp; SUPPORT</h4>
				<ul>
					<li><a href="about-us.html">About company</a>
					</li>
					<li><a href="#!">Contact us</a>
					</li>
					<li><a href="#!">Feedback</a>
					</li>
					<li><a href="about-us.html#faq">FAQs</a>
					</li>
					<li><a href="about-us.html#testimonials">Testimonials</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 fot-soc">
				<h4>SOCIAL MEDIA</h4>
				<ul>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/1.png" alt=""></a></li>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/2.png" alt=""></a></li>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/3.png" alt=""></a></li>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/5.png" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="row foot-count">
			<p>Company name Site - Trusted by over thousands of Boys & Girls for successfull marriage. <a
					href="sign-up.html" class="btn btn-primary btn-sm">Join us today !</a></p>
		</div>
	</div>
</section>
<!-- END -->
<!-- COPYRIGHTS -->
<section>
	<div class="cr">
		<div class="container">
			<div class="row">
				<p>Copyright © <span id="cry">2017-2020</span> <a href="#!" target="_blank">Company.com</a> All
					rights reserved.</p>
			</div>
		</div>
	</div>
</section>
<!-- END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/select-opt.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>

</html>

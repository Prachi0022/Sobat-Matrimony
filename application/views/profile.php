<!-- SUB-HEADING -->
<section>
	<div class="all-pro-head">
		<div class="container">
			<div class="row">
				<h1>Lakhs of Happy Marriages</h1>
				<a href="<?php echo base_url()?>sign-up">Join now for Free <i class="fa fa-handshake-o"
						aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
	<!--FILTER ON MOBILE VIEW-->
	<div class="fil-mob fil-mob-act">
		<h4>Profile filters <i class="fa fa-filter" aria-hidden="true"></i> </h4>
	</div>
</section>
<!-- END -->

<!-- START -->
<section>
	<div class="all-weddpro all-jobs all-serexp chosenini">
		<div class="container">
			<div class="row">
				<div class="col-md-3 fil-mob-view">
					<span class="filter-clo">+</span>
					<!-- START -->
					<div class="filt-com lhs-cate">
						<h4><i class="fa fa-search" aria-hidden="true"></i> I'm looking for</h4>
						<div class="form-group">
							<select class="chosen-select">
								<option value="">I'm looking for</option>
								<option value="Bride">Bride</option>
								<option value="Groom">Groom</option>
							</select>
						</div>
					</div>
					<!-- END -->
					<!-- START -->
					<div class="filt-com lhs-cate">
						<h4><i class="fa fa-clock-o" aria-hidden="true"></i>Age</h4>
						<div class="form-group">
							<select class="chosen-select">
								<option value="">Select Age*</option>
								<?php
                                                    for ($i = 18; $i <= 60; $i++) {
                                                        echo "<option value='$i'>$i</option>";
                                                    }
                                                ?>
							</select>
						</div>
					</div>
					<!-- END -->
					<!-- START -->
					<div class="filt-com lhs-cate">
						<h4><i class="fa fa-bell-o" aria-hidden="true"></i>Select Religion</h4>
						<div class="form-group">
							<select class="chosen-select">
								<option value="">Religion*</option>
								<option value="Hindu">Hindu</option>
								<option value="Budhisht">Budhisht</option>
								<option value="Jain">Jain</option>
							</select>
						</div>
					</div>
					<!-- END -->
					<!-- START -->
					<div class="filt-com lhs-cate">
						<h4><i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
						<div class="form-group">
							<select class="form-select chosen-select" data-placeholder="Select your City" name="location"
								required>
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
					<!-- END -->
					<!-- START -->
					<div class="filt-com lhs-rati lhs-avail lhs-cate">
						<h4><i class="fa fa-heart" aria-hidden="true"></i> Availablity</h4>
						<ul>
							<li>
								<div class="rbbox">
									<input type="radio" value="" name="expert_avail" class="rating_check" id="exav1"
										checked>
									<label for="exav1">All</label>
								</div>
							</li>
							<li>
								<div class="rbbox">
									<input type="radio" value="" name="expert_avail" class="rating_check" id="exav2">
									<label for="exav2">Available</label>
								</div>
							</li>
							<li>
								<div class="rbbox">
									<input type="radio" value="" name="expert_avail" class="rating_check" id="exav3">
									<label for="exav3">Offline</label>
								</div>
							</li>
						</ul>
					</div>
					<!-- END -->

					<!-- START -->
					<div class="filt-com lhs-rati lhs-ver lhs-cate">
						<h4><i class="fa fa-shield" aria-hidden="true"></i>Profile</h4>
						<ul>
							<li>
								<div class="rbbox">
									<input type="radio" value="" name="expert_veri" class="rating_check" id="exver1"
										checked>
									<label for="exver1">All</label>
								</div>
							</li>
							<li>
								<div class="rbbox">
									<input type="radio" value="" name="expert_veri" class="rating_check" id="exver2">
									<label for="exver2">Premium</label>
								</div>
							</li>
							<li>
								<div class="rbbox">
									<input type="radio" value="" name="expert_veri" class="rating_check" id="exver3">
									<label for="exver3">Free</label>
								</div>
							</li>
						</ul>
					</div>
					<!-- END -->
				</div>
				<div class="col-md-9">
					<div class="short-all">
						<div class="short-lhs">
							Showing <b>32</b> profiles
						</div>
						<div class="short-rhs">
							<ul>
								<li>
									Sort by:
								</li>
								<li>
									<div class="form-group">
										<select class="chosen-select">
											<option value="">Most relative</option>
											<option value="Men">Date listed: Newest</option>
											<option value="Men">Date listed: Oldest</option>
										</select>
									</div>
								</li>
								<li>
									<div class="sort-grid sort-grid-1">
										<i class="fa fa-th-large" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="sort-grid sort-grid-2 act">
										<i class="fa fa-bars" aria-hidden="true"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="all-list-sh">
						<ul>
							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>
							
							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>

							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>

							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>

							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>

							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>

							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>

							<li>
								<div class="all-pro-box user-avil-onli" data-useravil="avilyes"
									data-aviltxt="Available online">
									<!--PROFILE IMAGE-->
									<div class="pro-img">
										<a href="<?php echo base_url()?>profile-detail">
											<img src="<?php echo base_url()?>assets/images/profiles/4.jpg" alt="">
										</a>
										<div class="pro-ave" title="User currently available">
											<span class="pro-ave-yes"></span>
										</div>
										<div class="pro-avl-status">
											<h5>Available Online</h5>
										</div>
									</div>
									<!--END PROFILE IMAGE-->

									<!--PROFILE NAME-->
									<div class="pro-detail">
										<h4><a href="<?php echo base_url()?>profile-detail">Ashley emyy</a></h4>
										<div class="pro-bio">
											<span>B.Sc</span>
											<span>IT Profession</span>
											<span>29 Yeard old</span>
											<span>Height: 155Cms</span>
										</div>
										<div class="links">
											<span class="cta-chat">Chat now</span>
											<a href="<?php echo base_url()?>profile-detail">More detaiils</a>
											<a href="<?php echo base_url()?>#!">Send Interest</a>
										</div>
									</div>
									<!--END PROFILE NAME-->
									<!--SAVE-->
									<span class="enq-sav" data-toggle="tooltip" title="Click to save this provile."><i
											class="fa fa-heart" aria-hidden="true"></i></span>
									<!--END SAVE-->
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END -->


<!-- INTEREST POPUP -->
<div class="modal fade" id="sendInter">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title seninter-tit">Send interest to <span class="intename2">Jolia</span></h4>
				<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body seninter">
				<div class="lhs">
					<img src="<?php echo base_url()?>assets/images/profiles/1.jpg" alt="" class="intephoto2">
				</div>
				<div class="rhs">
					<h4>Permissions: <span class="intename2">Jolia</span> Can able to view the below details</h4>
					<ul>
						<li>
							<div class="chbox">
								<input type="checkbox" id="pro_about" checked="">
								<label for="pro_about">About section</label>
							</div>
						</li>
						<li>
							<div class="chbox">
								<input type="checkbox" id="pro_photo">
								<label for="pro_photo">Photo gallery</label>
							</div>
						</li>
						<li>
							<div class="chbox">
								<input type="checkbox" id="pro_contact">
								<label for="pro_contact">Contact info</label>
							</div>
						</li>
						<li>
							<div class="chbox">
								<input type="checkbox" id="pro_person">
								<label for="pro_person">Personal info</label>
							</div>
						</li>
						<li>
							<div class="chbox">
								<input type="checkbox" id="pro_hobbi">
								<label for="pro_hobbi">Hobbies</label>
							</div>
						</li>
						<li>
							<div class="chbox">
								<input type="checkbox" id="pro_social">
								<label for="pro_social">Social media</label>
							</div>
						</li>
					</ul>
					<div class="form-floating">
						<textarea class="form-control" id="comment" name="text"
							placeholder="Comment goes here"></textarea>
						<label for="comment">Write some message to <span class="intename"></span></label>
					</div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Send interest</button>
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>
<!-- END INTEREST POPUP -->

<!-- CHAT CONVERSATION BOX START -->
<div class="chatbox">
	<span class="comm-msg-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>

	<div class="inn">
		<form name="new_chat_form" method="post">
			<div class="s1">
				<img src="<?php echo base_url()?>assets/images/user/2.jpg" class="intephoto2" alt="">
				<h4><b class="intename2">Julia</b>,</h4>
				<span class="avlsta avilyes">Available online</span>
			</div>
			<div class="s2 chat-box-messages">
				<span class="chat-wel">Start a new chat!!! now</span>
				<div class="chat-con">
					<div class="chat-lhs">Hi</div>
					<div class="chat-rhs">Hi</div>
				</div>
				<!--<span>Start A New Chat!!! Now</span>-->
			</div>
			<div class="s3">
				<input type="text" name="chat_message" placeholder="Type a message here.." required="">
				<button id="chat_send1" name="chat_send" type="submit">Send <i class="fa fa-paper-plane-o"
						aria-hidden="true"></i>
				</button>
			</div>
		</form>
	</div>
</div>
<!-- END -->

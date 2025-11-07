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
								<li><a href="<?php echo base_url()?>user-profile" class="act"><i
											class="fa fa-tachometer" aria-hidden="true"></i>Profile</a></li>
								<li><a href="<?php echo base_url()?>user-interests"><i class="fa fa-handshake-o"
											aria-hidden="true"></i>Interests</a></li>
								<li><a href="<?php echo base_url()?>user-chat"><i class="fa fa-commenting-o"
											aria-hidden="true"></i>Chat list</a></li>
								<li><a href="<?php echo base_url()?>user-plan"><i class="fa fa-money"
											aria-hidden="true"></i>Plan</a>
								</li>
								<li><a href="<?php echo base_url()?>user-setting"><i class="fa fa-cog"
											aria-hidden="true"></i>Setting</a></li>
								<li><a href="<?php echo base_url()?>login"><i class="fa fa-sign-out"
											aria-hidden="true"></i>Log out</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-lg-9">
					<div class="login pro-edit-update p-0 mt-0">
						<div class="container">
							<div class="row">
								<div class="inn">
									<div class="rhs">
										<div class="form-login">
											<form action="<?php echo base_url()?>Mail/basicinfos" id="registerForm"
												method="post">
												<!--PROFILE BIO-->
												<div class="edit-pro-parti">
													<div class="form-tit">
														<h4>Registration</h4>
														<h1>Basic Information</h1>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">Name:</label>
															<input type="text" class="form-control"
																placeholder="Enter your full name" name="name"
																pattern="^[a-zA-Z\s'-]+$" required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">Email Id:</label>
															<input type="email" class="form-control"
																placeholder="example@gmail.com" name="email" required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">Gender:</label>
															<select class="form-select chosen-select" name="gender"
																data-placeholder="Select your Gender" required>
																<option value="">Select Gender</option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
															</select>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">City:</label>
															<select class="form-select chosen-select"
																data-placeholder="Select your City" name="city"
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
													<div class="row">
														<div class="col-3 form-group">
															<label class="lb">Day:</label>
															<select class="form-select chosen-select" name="day"
																id="day" onchange="calculateAge()" required>
																<option value="">Day*</option>
																<?php for ($i = 1; $i <= 31; $i++) { ?>
																<option value="<?php echo $i; ?>"><?php echo $i; ?>
																</option>
																<?php } ?>
															</select>
														</div>
														<div class="col-3 form-group">
															<label class="lb">Month:</label>
															<select class="form-select chosen-select" name="month"
																id="month" onchange="calculateAge()" required>
																<option value="">Month*</option>
																<?php 
												$months = [
													1 => "January", 2 => "February", 3 => "March", 
													4 => "April", 5 => "May", 6 => "June", 
													7 => "July", 8 => "August", 9 => "September", 
													10 => "October", 11 => "November", 12 => "December"
												];
												foreach ($months as $num => $name) {
													echo "<option value='$num'>$name</option>";
												}
											?>
															</select>
														</div>
														<div class="col-3 form-group">
															<label class="lb">Year:</label>
															<select class="form-select chosen-select" name="year"
																id="year" onchange="calculateAge()" required>
																<option value="">Year*</option>
																<?php 
													$currentYear = date("Y");
													$maxYear = $currentYear - 18; // Age limit: 18+
													for ($i = $maxYear; $i >= 1960; $i--) {
														echo "<option value='$i'>$i</option>";
													}
												?>
															</select>
														</div>
														<div class="col-3 form-group">
															<label class="lb">Age:</label>
															<input type="text" class="form-control" name="age" id="age"
																placeholder="Age" readonly>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">Height:</label>
															<select class="form-select chosen-select" name="height"
																id="height" required>
																<option value="">Select Height</option>
																<option value="4'0&quot;">4'0"</option>
																<option value="4'1&quot;">4'1"</option>
																<option value="4'2&quot;">4'2"</option>
																<option value="4'3&quot;">4'3"</option>
																<option value="4'4&quot;">4'4"</option>
																<option value="4'5&quot;">4'5"</option>
																<option value="4'6&quot;">4'6"</option>
																<option value="4'7&quot;">4'7"</option>
																<option value="4'8&quot;">4'8"</option>
																<option value="4'9&quot;">4'9"</option>
																<option value="4'10&quot;">4'10"</option>
																<option value="4'11&quot;">4'11"</option>
																<option value="5'0&quot;">5'0"</option>
																<option value="5'1&quot;">5'1"</option>
																<option value="5'2&quot;">5'2"</option>
																<option value="5'3&quot;">5'3"</option>
																<option value="5'4&quot;">5'4"</option>
																<option value="5'5&quot;">5'5"</option>
																<option value="5'6&quot;">5'6"</option>
																<option value="5'7&quot;">5'7"</option>
																<option value="5'8&quot;">5'8"</option>
																<option value="5'9&quot;">5'9"</option>
																<option value="5'10&quot;">5'10"</option>
																<option value="5'11&quot;">5'11"</option>
																<option value="6'0&quot;">6'0"</option>
																<option value="6'1&quot;">6'1"</option>
																<option value="6'2&quot;">6'2"</option>
																<option value="6'3&quot;">6'3"</option>
																<option value="6'4&quot;">6'4"</option>
																<option value="6'5&quot;">6'5"</option>
																<option value="6'6&quot;">6'6"</option>
																<option value="6'7&quot;">6'7"</option>
																<option value="6'8&quot;">6'8"</option>
																<option value="6'9&quot;">6'9"</option>
																<option value="6'10&quot;">6'10"</option>
																<option value="6'11&quot;">6'11"</option>
																<option value="7'0&quot;">7'0"</option>
															</select>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">Weight:</label>
															<select class="form-select chosen-select" name="weight"
																id="weight" required>
																<option value="">Select Weight</option>
																<option value="40 kg">40 kg</option>
																<option value="41 kg">41 kg</option>
																<option value="42 kg">42 kg</option>
																<option value="43 kg">43 kg</option>
																<option value="44 kg">44 kg</option>
																<option value="45 kg">45 kg</option>
																<option value="46 kg">46 kg</option>
																<option value="47 kg">47 kg</option>
																<option value="48 kg">48 kg</option>
																<option value="49 kg">49 kg</option>
																<option value="50 kg">50 kg</option>
																<option value="51 kg">51 kg</option>
																<option value="52 kg">52 kg</option>
																<option value="53 kg">53 kg</option>
																<option value="54 kg">54 kg</option>
																<option value="55 kg">55 kg</option>
																<option value="56 kg">56 kg</option>
																<option value="57 kg">57 kg</option>
																<option value="58 kg">58 kg</option>
																<option value="59 kg">59 kg</option>
																<option value="60 kg">60 kg</option>
																<option value="61 kg">61 kg</option>
																<option value="62 kg">62 kg</option>
																<option value="63 kg">63 kg</option>
																<option value="64 kg">64 kg</option>
																<option value="65 kg">65 kg</option>
																<option value="66 kg">66 kg</option>
																<option value="67 kg">67 kg</option>
																<option value="68 kg">68 kg</option>
																<option value="69 kg">69 kg</option>
																<option value="70 kg">70 kg</option>
																<option value="71 kg">71 kg</option>
																<option value="72 kg">72 kg</option>
																<option value="73 kg">73 kg</option>
																<option value="74 kg">74 kg</option>
																<option value="75 kg">75 kg</option>
																<option value="76 kg">76 kg</option>
																<option value="77 kg">77 kg</option>
																<option value="78 kg">78 kg</option>
																<option value="79 kg">79 kg</option>
																<option value="80 kg">80 kg</option>
																<option value="81 kg">81 kg</option>
																<option value="82 kg">82 kg</option>
																<option value="83 kg">83 kg</option>
																<option value="84 kg">84 kg</option>
																<option value="85 kg">85 kg</option>
																<option value="86 kg">86 kg</option>
																<option value="87 kg">87 kg</option>
																<option value="88 kg">88 kg</option>
																<option value="89 kg">89 kg</option>
																<option value="90 kg">90 kg</option>
																<option value="91 kg">91 kg</option>
																<option value="92 kg">92 kg</option>
																<option value="93 kg">93 kg</option>
																<option value="94 kg">94 kg</option>
																<option value="95 kg">95 kg</option>
																<option value="96 kg">96 kg</option>
																<option value="97 kg">97 kg</option>
																<option value="98 kg">98 kg</option>
																<option value="99 kg">99 kg</option>
																<option value="100 kg">100 kg</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">Blood Group:</label>
															<select class="form-select chosen-select" name="bgrp"
																id="bgrp" required>
																<option value="">Select Blood Group*</option>
																<option value="A+">A+</option>
																<option value="A-">A-</option>
																<option value="B+">B+</option>
																<option value="B-">B-</option>
																<option value="AB+">AB+</option>
																<option value="AB-">AB-</option>
																<option value="O+">O+</option>
																<option value="O-">O-</option>
															</select>
														</div>
														<div class="col-6 form-group">
															<label class="lb">Contact No:</label>
															<input type="tel" class="form-control" name="number"
																pattern="[0-9]{10}+$" maxlength="13" placeholder="+91 "
																required>
														</div>
													</div>


													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Higher Education:</label>
															<input type="text" class="form-control" name="highedu"
																placeholder="e.g. Bachelor's in Computer Science"
																required>

														</div>
														<div class="col-6 form-group">
															<label for="" class="lb">Occupation:</label>
															<input type="text" class="form-control" name="occupation"
																placeholder="e.g. Software Developer" required>

														</div>
													</div>
													<div class="form-group">
														<label for="" class="lb">Education in Detail:</label>
														<textarea id="" class="form-control" name="edudetail"
															placeholder="Enter in Detail" required></textarea>

													</div>
												</div>
												<!--END PROFILE BIO-->
												<!--PROFILE BIO-->
												<div class="edit-pro-parti">
													<div class="form-tit">
														<h4></h4>
														<h1>Persional Information</h1>
													</div>
													<div class="row">
														<div class="col-4 form-group">
															<label class="lb">Religion:</label>
															<select class="form-select chosen-select" name="religion"
																id="religion" required>
																<option value="">Select Religion*</option>
																<option value="Hindu">Hindu</option>
																<option value="Buddhist">Buddhist</option>
																<option value="Jain">Jain</option>
															</select>
														</div>
														<div class="col-4 form-group">
															<label class="lb">Caste:</label>
															<input type="text" class="form-control" name="caste"
																placeholder="Enter Your Caste" required>
														</div>
														<div class="col-4 form-group">
															<label class="lb">Sub-Caste:</label>
															<input type="text" class="form-control" name="subcaste"
																placeholder="Enter Your Sub-caste" required>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">Annual Income:</label>
															<input type="text" class="form-control" name="income"
																placeholder="e.g. ₹5,00,000 per annum" required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">Native Place:</label>
															<input type="text" class="form-control" name="native"
																placeholder="Enter your native place" required>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Marital Status:</label>
															<select class="form-select chosen-select" name="marital"
																id="marital" required>
																<option value="">Select Marital Status*</option>
																<option value="Married">Married</option>
																<option value="Unmarried">Unmarried</option>
																<option value="Divorced">Divorced</option>
																<option value="Widowed">Widowed</option>
															</select>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">Partner Preference (Caste):</label>
															<select class="form-select chosen-select" name="preference"
																required>
																<option value="">Select</option>
																<option value="Same Caste">Same Caste</option>
																<option value="Open to Intercaste">Open to Intercaste
																	Marriage
																</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group" id="total_children_div"
															style="display:none;">
															<label class="lb">Total Children:</label>
															<input type="number" class="form-control"
																name="total_children" id="total_children" min="0"
																placeholder="Enter total children">
														</div>

														<div class="col-6 form-group" id="children_status_div"
															style="display:none;">
															<label class="lb">Children Status:</label>
															<select class="form-select chosen-select"
																name="children_status" id="children_status">
																<option value="">Select Status</option>
																<option value="Living with Me">Living with Me</option>
																<option value="Not Living with Me">Not Living with Me
																</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12 form-group">
															<label class="lb">If the prospective partner is divorced or
																widowed,
																would you be comfortable if they have a child?</label>
															<select class="form-select chosen-select"
																name="child_acceptance" id="child_acceptance" required>
																<option value="">Select</option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
																<option value="Depends on Situation">Depends on
																	Situation</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Hobbies if Any:</label>
															<input type="text" class="form-control" name="hobby"
																required>
														</div>
														<div class="col-6 form-group">
															<label class="lb">Do you like to read? :</label>
															<select class="form-select chosen-select" name="read"
																required data-placeholder="Select*">
																<option value="">Select</option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">What kind of movies do you like?:</label>
															<select class="form-select chosen-select" name="movie[]"
																multiple required data-placeholder="Select*">
																<option value=""></option>
																<option value="Action">Action</option>
																<option value="Comedy">Comedy</option>
																<option value="Romance">Romance</option>
																<option value="Drama">Drama</option>
																<option value="Horror">Horror</option>
																<option value="Thriller">Thriller</option>
																<option value="Science Fiction">Science Fiction</option>
																<option value="Animated">Animated</option>
																<option value="Documentary">Documentary</option>
																<option value="All Kinds">All Kinds</option>
															</select>
														</div>
														<div class="col-6 form-group">
															<label class="lb">What kind of music do you like?:</label>
															<select class="form-select chosen-select" name="music[]"
																multiple required data-placeholder="Select*">
																<option value=""></option>
																<option value="Classical">Classical</option>
																<option value="Pop">Pop</option>
																<option value="Rock">Rock</option>
																<option value="Jazz">Jazz</option>
																<option value="Hip Hop">Hip Hop</option>
																<option value="Bollywood">Bollywood</option>
																<option value="Devotional">Devotional</option>
																<option value="Instrumental">Instrumental</option>
																<option value="Folk">Folk</option>
																<option value="All Types">All Types</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Do you play any sports?:</label>
															<select class="form-select chosen-select" name="sport"
																required data-placeholder="Select*">
																<option value=""></option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
														</div>
														<div class="col-6 form-group">
															<label class="lb">Sports Liking:</label>
															<select class="form-select chosen-select" name="sportlik[]"
																multiple required data-placeholder="Select*">
																<option value=""></option>
																<option value="Cricket">Cricket</option>
																<option value="Football">Football</option>
																<option value="Badminton">Badminton</option>
																<option value="Tennis">Tennis</option>
																<option value="Hockey">Hockey</option>
																<option value="Basketball">Basketball</option>
																<option value="Volleyball">Volleyball</option>
																<option value="Swimming">Swimming</option>
																<option value="Athletics">Athletics</option>
																<option value="Other">Other</option>
															</select>
														</div>
													</div>
												</div>
												<!--END PROFILE BIO-->
												<!--PROFILE BIO-->
												<div class="edit-pro-parti">
													<div class="form-tit">
														<h1>Lifestyle</h1>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Eating Habit:</label>
															<select class="form-select chosen-select" name="eating"
																required data-placeholder="Select*">
																<option value=""></option>
																<option value="Vegetarian">Vegetarian</option>
																<option value="Non-Vegetarian">Non-Vegetarian</option>
																<option value="Eggetarian">Eggetarian</option>
																<option value="Vegan">Vegan</option>
																<option value="Jain">Jain</option>
																<option value="Occasionally Non-Vegetarian">Occasionally
																	Non-Vegetarian
																</option>
															</select>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">What are your favourite foods?:</label>
															<input type="text" class="form-control" name="favfood"
																placeholder="Enter favourite food " required>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">What kind of places do you like to
																travel?:</label>
															<input type="text" class="form-control"
																placeholder="e.g. Beaches, Mountains, Cities"
																name="travel" required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">How much time you spend on social
																media:</label>
															<input type="text" class="form-control" name="social"
																placeholder="e.g 1-2 hours daily" required>
														</div>
													</div>
												</div>
												<!--END PROFILE BIO-->
												<!--PROFILE BIO-->
												<div class="edit-pro-parti">
													<div class="form-tit">
														<h1>Family Information </h1>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">Members of your family:</label>
															<input type="text" class="form-control"
																placeholder="e.g. Father, Mother, Brother, Sister"
																name="family" required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">How is your relationship with your
																parents?:</label>
															<input type="text" class="form-control"
																placeholder="e.g., Very close, Supportive, Understanding"
																name="relation" required>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">How much time do you spend with your
																family?:</label>
															<input type="text" class="form-control"
																placeholder="e.g., Daily, Weekends, Special Occasions"
																name="timefam" required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">What activities do you do with your
																family?:</label>
															<input type="text" class="form-control" name="actfam"
																placeholder="e.g., Traveling, Watching Movies, Cooking togather "
																required>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">What does marriage mean to you?:</label>
															<input type="text" class="form-control" name="marriage"
																placeholder="e.g., Partnership, Love, Commitment, Companionship"
																required>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">What do you expect from your
																partner?:</label>
															<input type="text" class="form-control" name="exp"
																placeholder="e.g., Understanding, Supportive, Honest, Caring "
																required>
														</div>
													</div>

												</div>
												<!--END PROFILE BIO-->
												<!--PROFILE BIO-->
												<div class="edit-pro-parti">
													<div class="form-tit">
														<h1>Future Plan(Career & Family)</h1>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">What are your future goals?:</label>
															<textarea
																placeholder="e.g., Become a Software architech, Start my own business"
																id="" class="form-control" name="goal"
																required></textarea>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">What kind of career do you want to
																pursue?:</label>
															<textarea id="" class="form-control" name="pursue"
																placeholder="e.g., Management, Enterpreneurship, Research, Creative fields "
																required></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Do you want children?:</label>
															<select class="form-select chosen-select" name="children"
																required data-placeholder="Select*">
																<option value=""></option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
																<option value="Undecided">Undecided</option>
															</select>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">How many?:</label>
															<input type="text" class="form-control" name="many"
																placeholder="e.g., 1,2,3 " required>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">What are your views on parenting styles
																and raising
																children?:</label>
															<textarea id="" class="form-control" name="parsty"
																placeholder="e.g., Encouraging independence, Teaching value, Balance discipline"
																required></textarea>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">How do you envision dividing household
																chores and
																responsibilities?:</label>
															<textarea id="" class="form-control" name="household"
																placeholder="e.g., Shared equally, Flexible approach, Base on convenience"
																required></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-6 form-group">
															<label class="lb">Would you mind if your partner had to
																travel for their
																job?:</label>
															<select class="form-select chosen-select" name="traveljob"
																required data-placeholder="Select*">
																<option value=""></option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
														</div>
														<div class="col-6 form-group">
															<label class="lb">Would you mind if your partner had late
																meetings or
																night
																shifts?:</label>
															<select class="form-select chosen-select" name="shift"
																required data-placeholder="Select*">
																<option value=""></option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 form-group">
															<label class="lb">What do you expect from your
																partner?:</label>
															<textarea id="" class="form-control" name="partner"
																placeholder="e.g., Understanding, Supportive, Responsible, Caring"
																required></textarea>
														</div>
														<div class="col-md-6 form-group">
															<label class="lb">Your views about the friend circle of your
																partner:</label>
															<textarea id="" class="form-control" name="friendcir"
																placeholder="e.g., Should be supportive, Respectful, and Trustworthy"
																required></textarea>
														</div>
													</div>
												</div>
												<!--END PROFILE BIO-->
												<!--PROFILE BIO-->
												<div class="edit-pro-parti">
													<div class="form-tit">
														<h4>interests</h4>
														<h1>Any Other</h1>
													</div>
													<div class="form-group">
														<label class="lb">Any other information you like to add:</label>
														<textarea id="" class="form-control" name="addon"
															placeholder="e.g., Hobbies, Achievements, Personal preferences"
															required></textarea>
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
		</div>
	</div>
</section>
<!-- END -->

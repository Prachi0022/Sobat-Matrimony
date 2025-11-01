<!-- FOOTER -->
<section class="wed-hom-footer">
	<div class="container">
		<div class="row foot-supp">
			<h2><span>Free support:</span> +91 9967536799 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
				enquiry@sobatmatrimony.com</h2>
		</div>
		<div class="row wed-foot-link wed-foot-link-1">
			<div class="col-md-4">
				<h4>Get In Touch</h4>
				<p>Address: Sobat Vivah Sanstha, 607, 6th floor, Pujit Plaza, sector-11, CBD Belapur, navi mumbai</p>
				<p>Phone: <a href="tel:+917904462944">+91 9967536799</a></p>
				<p>Email: <a href="mailto: enquiry@sobatmatrimony.com">enquiry@sobatmatrimony.com</a></p>
			</div>
			<div class="col-md-4">
				<h4>HELP &amp; SUPPORT</h4>
				<ul>
					<li><a href="#!">About company</a>
					</li>
					<li><a href="#!">Contact us</a>
					</li>
					<li><a href="#!">Feedback</a>
					</li>
					<li><a href="#!">FAQs</a>
					</li>
					<li><a href="#!">Testimonials</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 fot-soc">
				<h4>SOCIAL MEDIA</h4>
				<ul>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/1.png" alt=""
								loading="lazy"></a></li>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/2.png" alt=""
								loading="lazy"></a></li>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/3.png" alt=""
								loading="lazy"></a></li>
					<li><a href="#!"><img src="<?php echo base_url()?>assets/images/social/5.png" alt=""
								loading="lazy"></a></li>
				</ul>
			</div>
		</div>
		<div class="row foot-count">
			<p>Company name Site - Trusted by over thousands of Boys & Girls for successfull marriage. <a href="#!"
					class="btn btn-primary btn-sm">Join us today !</a></p>
		</div>
	</div>
</section>
<!-- END -->

<!-- COPYRIGHTS -->
<section>
	<div class="cr">
		<div class="container">
			<div class="row">
				<p>Copyright © <span id="cry">2025</span>Sobat Ayushyabharasathi. All
					rights reserved. || Designed & Developed by <a href="#!" target="_blank">Nexmove Solutions</a></p>
			</div>
		</div>
	</div>
</section>
<!-- END -->



<div class="modal fade plncanl-pop" id="upcoming">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title seninter-tit">Event Detail</h4>
				<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body seninter chosenini">
				<div class="row">
					<!--BIG POST START-->
					<div class="blog-home-box">
						<div class="im">
							<img src="<?php echo base_url()?>assets/images/couples/9.jpg" alt="" loading="lazy">
							<span class="blog-date">22, Jan 2023</span>

						</div>
						<div class="txt">
							<h2>Detail :</h2>
							<p>It is a long established fact that a reader will be distracted by the
								readable
								content of a page when looking at its layout. The point of using Lorem
								Ipsum is
								that it has a more-or-less normal distribution of letters, as opposed to
								using
								'Content here, content here', making it look like readable English. Many
								desktop
								publishing packages and web page editors now use Lorem Ipsum as their
								default
								model text, and a search for 'lorem ipsum' will uncover many web sites
								still in
								their infancy. Various versions have evolved over the years, sometimes
								by
								accident, sometimes on purpose (injected humour and the like).</p>

						</div>

						<div class="pr-bio-c pr-bio-info">
							<ul>
								<li><b>Date & Time:</b> NA</li>
								<li><b>Mode of Event:</b>kjshd kjsh kjh fkh kahkjdh </li>
								<li><b>Duration :</b>NA</li>
								<li><b>Location :</b> NA</li>
								<li><b>Category :</b> NA</li>
								<li><b>Age Group:</b>NA</li>
								<li><b>Seats :</b>NA</li>
								<li><b>Fees :</b> NA</li>
								<li><b>Parents :</b>NA</li>
								<li><b>Event Type:</b>NA</li>
							</ul>
						</div>
					</div>
					<!--END BIG POST START-->


				</div>
			</div>

		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/select-opt.js"></script>
<script src="<?php echo base_url()?>assets/js/slick.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>
<script src="<?php echo base_url()?>assets/js/gallery.js"></script>


<script>
	document.addEventListener("DOMContentLoaded", function () {
		const captchaEl = document.getElementById('captcha');
		const refreshBtn = document.getElementById('refreshCaptcha');
		const form = document.getElementById('loginForm');

		function generateCaptcha() {
			const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
			let captcha = '';
			for (let i = 0; i < 6; i++) {
				captcha += chars.charAt(Math.floor(Math.random() * chars.length));
			}
			captchaEl.textContent = captcha;
		}

		refreshBtn.addEventListener('click', generateCaptcha);

		form.addEventListener('submit', function (e) {
			const input = document.getElementById('captchaInput').value.trim();
			if (input !== captchaEl.textContent.trim()) {
				e.preventDefault();
				alert('Captcha mismatch. Please try again.');
				generateCaptcha();
			}
		});

		// Generate captcha right after DOM loads
		generateCaptcha();
	});

</script>
</body>

</html>

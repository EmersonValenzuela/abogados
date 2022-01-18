<?php
include("sections/header.php");
?>

<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/1.jpg)">
	<div class="auto-container">
		<h1>Contactanos</h1>
		<ul class="page-breadcrumb">
			<li><a href="index.php">Inicio</a></li>
			<li>Contactanos</li>
		</ul>
	</div>
</section>
<!-- End Page Title -->

<!-- Map Section -->
<section class="map-section">
	<div class="auto-container">
		<div class="inner-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!-- Map Outer -->
				<div class="map-outer">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31200.564585866076!2d-77.02866975909781!3d-12.17559849189501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9ee9601d879%3A0x8a38870bcc8eab22!2sTottus!5e0!3m2!1ses!2spe!4v1642530335798!5m2!1ses!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Map Section -->

<!-- Contact Form Section -->
<section class="contact-form-section">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title centered">
			<h2>Mandanos tu Mensaje</h2>
		</div>
		<!-- Contact Form -->
		<div class="contact-form">

			<!--Contact Form-->
			<form method="post" action="sendemail.php" id="contact-form">
				<div class="row clearfix">

					<div class="col-lg-4 col-md-6 col-sm-12 form-group">
						<input type="text" name="username" placeholder="Nombre" required="">
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 form-group">
						<input type="email" name="email" placeholder="Gmail" required="">
					</div>

					<div class="col-lg-4 col-md-12 col-sm-12 form-group">
						<input type="text" name="phone" placeholder="Celular" required="">
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 form-group">
						<textarea name="message" placeholder="Mensaje"></textarea>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
						<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Enviar<i class="arrow flaticon-right"></i></span></button>
					</div>

				</div>
			</form>

			<!--End Contact Form -->
		</div>
	</div>
</section>
<!-- End Contact Form Section -->

<!-- Contact Info Section -->
<section class="contact-info-section">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title centered">
			<h2>Más Información</h2>
		</div>
		<div class="row clearfix">

			<!-- Info Block -->
			<div class="info-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon flaticon-location-pin"></div>
					<h5>Ubicación</h5>
					<div class="text">121 King Street Melbourne, <br> 3000, Australia</div>
				</div>
			</div>

			<!-- Info Block -->
			<div class="info-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon flaticon-smartphone"></div>
					<h5>Telefono</h5>
					<ul class="info-list">
						<li><a href="tel:+0-589-96369-95823">0-589-96369-95823</a></li>
						<li><a href="tel:+0-825-63596-471254">0-825-63596-471254</a></li>
					</ul>
				</div>
			</div>

			<!-- Info Block -->
			<div class="info-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon flaticon-email-3"></div>
					<h5>Gmail</h5>
					<ul class="info-list">
						<li><a href="mailto:Counsellaw@gmail.com">Counsellaw@gmail.com</a></li>
						<li><a href="mailto:info@counsellaw.com">info@counsellaw.com</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Contact Info Section -->

<!-- CTA Section -->
<section class="cta-section">
	<div class="auto-container">
		<div class="inner-container">
			<div class="image">
				<img src="images/resource/cta.jpg" alt="">
			</div>
			<div class="content">
				<h2>¡Comuniquese con los<br> Expertos ahora!</h2>
				<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Cotización <i class="arrow flaticon-right"></i></span></a>
			</div>
			<div class="hammer-image">
				<img src="images/resource/hammer.png" alt="">
			</div>
		</div>
	</div>
</section>
<!-- End CTA Section -->

<!-- Main Footer -->
<footer class="main-footer">
	<div class="auto-container">
		<!-- Widgets Section -->
		<div class="widgets-section">
			<!-- Scroll To Top -->
			<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
			<div class="row clearfix">

				<!-- Big Column -->
				<div class="big-column col-lg-6 col-md-12 col-sm-12">
					<div class="row clearfix">

						<!--Footer Column-->
						<div class="footer-column col-lg-7 col-md-6 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="index.html"><img src="images/footer-logo.png" alt=""></a>
								</div>
								<div class="text">Quis autem vel eum iure reprehenderit aui ea voluptate velit esse molestiae consequatur, vel illum qui dolorem.</div>
								<!-- Social Nav -->
								<ul class="social-nav">
									<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-lg-5 col-md-6 col-sm-12">
							<div class="footer-widget links-widget">
								<h5>Useful links</h5>
								<ul class="footer-list">
									<li><a href="#">Home</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<!-- Big Column -->
				<div class="big-column col-lg-6 col-md-12 col-sm-12">
					<div class="row clearfix">

						<!-- Footer Column -->
						<div class="footer-column col-lg-6 col-md-6 col-sm-12">
							<div class="footer-widget contact-widget">
								<h5>Office Info</h5>
								<ul>
									<li>
										<span class="icon flaticon-call-1"></span>
										<a href="tel:+61-3-8376-6284">+61 3 8376 6284</a>
									</li>
									<li>
										<span class="icon flaticon-call-1"></span>
										<a href="tel:+00-9-0000-9999">+00 9 0000 9999</a>
									</li>
									<li>
										<span class="icon flaticon-email-2"></span>
										<a href="mailto:Info@counsellawfirm.com">Info@counsellawfirm.com</a>
									</li>
									<li>
										<span class="icon flaticon-maps-and-flags"></span>
										21 King Street Melbourne, <br> 3000, Australia
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Column -->
						<div class="footer-column col-lg-6 col-md-6 col-sm-12">
							<div class="footer-widget newsletter-widget">
								<h5>Subscribe Now</h5>
								<div class="text">Quis autem vel eum iure reprehenderit aui ea voluptate.</div>
								<div class="newsletter-form">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="email" name="email" value="" placeholder="Enter Email Address" required="">
											<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe now <i class="arrow flaticon-right"></i></span></button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="copyright">Copyright 2021, Counsel Law Firm. All Rights Reserved.</div>
		</div>
	</div>
</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

</html>
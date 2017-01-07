<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BitcoinCanada
 */

?>



<?php wp_footer(); ?>

<!-- FOOTER -->
	<footer class="bg-dark footer1 padding-top-60">
		<div class="container">
			<div class="row margin-bottom-30">

				<div class="col-md-4 col-sm-4 margin-bottom-30 footer-follow">
					<!-- <h5>Follow</h5>
					<div class="footer-newsletter">
						<form action="php/subscribe.php" method="POST">
							<i class="fa fa-envelope"></i>
							<input type="email" placeholder="Email address" class="e-mail" name="email" data-validate="validate(required, email)">
							<button type="submit">Subscribe</button>
						</form>
						<span>Don't worry we hate spam as much as you do</span>
					</div> -->
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
					</div>
				</div>
			</div>

			<!-- FOOTER COPYRIGHT -->
			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<p>&copy; Copyright 2016 BitcoinCanada.org. All rights reserved.</p>
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="footer-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Advertising</a></li>
							<li><a href="#">Subscribe</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- // FOOTER -->

<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>assets/js/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>assets/js/socialShare.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>assets/js/jquery.simpleWeather.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>assets/js/lity/lity.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>assets/js/main.js"></script>

<!-- Mailchimp Js -->
<script src="<?php bloginfo('template_directory'); ?>assets/js/mc/jquery.ketchup.all.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>assets/js/mc/main.js"></script>

</body>
</html>

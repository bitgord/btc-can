<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BitcoinCanada
 */

if ( is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<div class="container margin-top-30">
	<div class="row">
		<aside class="col-md-4 col-sm-4">
			<div class="ads ad-300 margin-bottom-60">
				<span>Advertisement</span>
				<img src="images/ads/300x250.jpg" class="img-responsive" alt=""/>
			</div>
			<div class="side-widget margin-bottom-60">
				<h3 class="heading-1"><span>Newsletter</span></h3>
				<div class="side-newsletter2">
					<p>Important stories from around the world.</p>
					<form action="php/subscribe.php" id="invite" method="POST">
						<i class="fa fa-envelope"></i>
						<input type="email" placeholder="Email address" class="e-mail" name="email" id="address" data-validate="validate(required, email)">
						<button type="submit">Go</button>
					</form>
					<div id="result"></div>						
				</div>
			</div>
			<div class="side-widget margin-bottom-60">
				<h3 class="heading-1"><span>Follow Us</span></h3>
				<div class="side-share side-share2">
					<div class='share s_facebook'>
						<i class="fa fa-facebook"></i>
						<div class='counter c_facebook'></div>
						<span>fans</span>
					</div>
					<div class='share s_linkedin'>
						<i class="fa fa-linkedin"></i>
						<div class='counter c_linkedin'></div>
						<span>followers</span>
					</div>
					<div class='share s_plus'>
						<i class="fa fa-google-plus"></i>
						<div class='counter c_plus'></div>
						<span>followers</span>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="side-widget margin-bottom-60">
				<h3 class="heading-1"><span>Top Stories</span></h3>
				<div class="layout_1--item margin-bottom-30">
					<a href="#">
						<span class="badge text-uppercase badge-overlay badge-world">World</span>
						<div class="overlay"></div>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/category/01/2.jpg" class="img-responsive" alt="">
						<div class="layout-detail padding-25">
							<h6>Use Ethereumjs-tx and Web3 to Send an Ether Transaction using your Terminal</h6>
							<div class="meta"><span class="author">by Michael G.</span><span class="date">Sep. 27, 2016</span><span class="rating">9.8</span><span class="comments">3</span></div>
						</div>
					</a>
				</div>
				<div class="layout_1--item margin-bottom-30">
					<a href="#">
						<span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
						<div class="overlay"></div>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/category/01/3.jpg" class="img-responsive" alt="">
						<div class="layout-detail padding-25">
							<h6>How to Create an Escrow Contract Using Solidity</h6>
							<div class="meta"><span class="author">by Michael G.</span><span class="date">Sep. 27, 2016</span><span class="rating">9.8</span><span class="comments">3</span></div>
						</div>
					</a>
				</div>
			</div>
			<!-- <div class="side-widget margin-bottom-60">
				<h3 class="heading-1"><span>Categories</span></h3>
				<ul class="categories">
					<li><a href="#">Politics</a> <span>89</span></li>
					<li><a href="#">Opinions</a> <span>28</span></li>
					<li><a href="#">Sports</a> <span>74</span></li>
					<li><a href="#">Local</a> <span>62</span></li>
					<li><a href="#">National</a> <span>90</span></li>
					<li><a href="#">World</a> <span>76</span></li>
					<li><a href="#">Business</a> <span>58</span></li>
					<li><a href="#">Tech</a> <span>87</span></li>
				</ul>
				<div class="clearfix"></div>
			</div> -->
		</aside>
	</div>
</div>


<?php
/**
 * 		Template Name: Home Page
 *
 * @package BitcoinCanada
 */

// Custom Fields
$featured_author			= get_post_meta( 16, 'featured_author', true );
$featured_date				= get_post_meta( 16, 'featured_date', true );
$featured_description		= get_post_meta( 16, 'featured_description', true );
$featured_title				= get_post_meta( 16, 'featured_title', true );
$featured_url				= get_post_meta( 16, 'featured_url', true );
$featured_category			= get_post_meta( 16, 'featured_category', true );

// Advanced Custom Fields
$featured_news_description	= get_field('featured_news_description');
$featured_news_image		= get_field('featured_news_image');
$featured_news_image_2		= get_field('featured_news_image_2');
$featured_news_image_3		= get_field('featured_news_image_3');
$featured_news_image_4		= get_field('featured_news_image_4');
$featured_news_title		= get_field('featured_news_title');
$featured_news_title_2		= get_field('featured_news_title_2');
$featured_news_title_3		= get_field('featured_news_title_3');
$featured_news_title_4		= get_field('featured_news_title_4');
$featured_news_author		= get_field('featured_news_author');
$featured_news_date			= get_field('featured_news_date');
$featured_news_date_2		= get_field('featured_news_date_2');
$featured_news_date_3		= get_field('featured_news_date_3');
$featured_news_date_4		= get_field('featured_news_date_4');


get_header(); ?>

	<!-- // HEADER / MENU -->

	<div class="container margin-top-30">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="layout_1 margin-bottom-30">
					<div class="row">
						<div class="col-md-12">
							<h3 class="heading-1"><span>Top Stories</span></h3>
							<div class="post-carousel-wrap">
								<div class="post-carousel">
									<div class="layout_1--item">
										<a href="<?php echo $featured_url; ?>">
											<span class="badge text-uppercase badge-overlay badge-lifestyle"><?php echo $featured_category; ?></span>
											<div class="overlay"></div>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/04/1.jpg" class="img-responsive" alt=""/>
											<div class="layout-detail padding-25">
												<span class="cat">News</span>
												<h4><?php echo $featured_title; ?></h4>
												<p class="hidden-xs"><?php echo $featured_description; ?></p>
												<div class="meta"><span class="author"><?php echo $featured_author; ?></span><span class="date"><?php echo $featured_date; ?></span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="layout_2 margin-bottom-20">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="layout_2--item">
								<div class="thumb">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/02/1.jpg" class="img-responsive" alt=""></a>
								</div>
								<span class="cat">News</span>
								<h4><a href="#">Eight Universities Competed in Blockchain Trivia</a></h4>
								<div class="meta"><span class="date">Sep. 28, 2016</span></div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="layout_2--item">
								<div class="thumb">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/02/2.jpg" class="img-responsive" alt=""></a>
								</div>
								<span class="cat">News</span>
								<h4><a href="#">College Cryptocurrency Network Rebrands to BEN</a></h4>
								<div class="meta"><span class="date">Sep. 28, 2016</span></div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="layout_2--item">
								<div class="thumb">
									<div class="icon-24 video2"></div>
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/02/3.jpg" class="img-responsive" alt=""></a>
								</div>
								<span class="cat">Technical</span>
								<h4><a href="#">Use Geth to Setup your Own Private Ethereum Blockchain</a></h4>
								<div class="meta"><span class="date">Sep. 28, 2016</span></div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="layout_2--item">
								<div class="thumb">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/02/4.jpg" class="img-responsive" alt=""></a>
								</div>
								<span class="cat">Events</span>
								<h4><a href="#">TNABC is Prepared to Start the Year Off Well in Miami</a></h4>
								<div class="meta"><span class="date">Sep. 28, 2016</span></div>
							</div>
						</div>
					</div>
				</div>
				<h3 class="heading-1"><span>News</span></h3>
				<div class="row">
					<div class="col-md-6 col-sm-6 margin-bottom-30">
						<div class="layout_3--item">
							<div class="thumb">

								<!-- If user uploaded an image -->
								<?php if( !empty($featured_news_image) ) : ?>
									<a href="#"><img src="<?php echo $featured_news_image['url']; ?>"<?php echo $featured_news_image['alt']; ?>"</a>
								<?php endif; ?>
							</div>
							<h4><a href="#"><?php echo $featured_news_title; ?></a></h4>
							<p><?php echo $featured_news_description; ?></p>
							<div class="meta"><span class="author"><?php echo $featured_news_author; ?></span><span class="date"><?php echo $featured_news_date; ?></span></div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 margin-bottom-30">
						<div class="layout_2--item row">
							<div class="col-md-6 col-sm-5">
								<div class="thumb">

									<!-- If user uploaded an image -->
									<?php if( !empty($featured_news_image_2) ) : ?>
										<a href="#"><img src="<?php echo $featured_news_image_2['url']; ?>"<?php echo $featured_news_image_2['alt']; ?>"</a>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-md-6 col-sm-7">
								<h4><a href="#"><?php echo $featured_news_title_2; ?></a></h4>
								<div class="meta"><span class="date"><?php echo $featured_news_date_2; ?></span></div>
							</div>
						</div>
						<hr class="l2">
						<div class="layout_2--item row">
							<div class="col-md-6 col-sm-5">
								<div class="thumb">
									<!-- If user uploaded an image -->
									<?php if( !empty($featured_news_image_3) ) : ?>
										<a href="#"><img src="<?php echo $featured_news_image_3['url']; ?>"<?php echo $featured_news_image_3['alt']; ?>"</a>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-md-6 col-sm-7">
								<h4><a href="#"><?php echo $featured_news_title_3; ?></a></h4>
								<div class="meta"><span class="date"><?php echo $featured_news_date_3; ?></span></div>
							</div>
						</div>
						<hr class="l2">
						<div class="layout_2--item row">
							<div class="col-md-6 col-sm-5">
								<div class="thumb">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/05/4.jpg" class="img-responsive" alt=""></a>
								</div>
							</div>
							<div class="col-md-6 col-sm-7">
								<h4><a href="#">Venture Capitalists Shift Focus to Non-Financial Applications of Blockchain</a></h4>
								<div class="meta"><span class="date">Sep. 28, 2016</span></div>
							</div>
						</div>
						<hr class="l2">
						<div class="margin-bottom-30"></div>
					</div>
				</div>
				<div class="layout_3">
					<div class="row">
						<div class="col-md-6 col-sm-6 margin-bottom-30">
							<h3 class="heading-1"><span>Opinion</span></h3>
							<div class="layout_3--item">
								<div class="thumb">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/03/1.jpg" class="img-responsive" alt=""></a>
								</div>
								<span class="cat">Opinion</span>
								<h4><a href="#">Op Ed: Blockchain Education Network Hosts Month-Long Accelerator</a></h4>
								<p>BEN is finishing its 2016 fall initiative with a month-long blockchain accelerator to encourage ...</p>
								<div class="meta"><span class="author">by Michael G.</span><span class="date">Jan. 6, 2017</span></div>
							</div>							
						</div>
						<div class="col-md-6 col-sm-6 margin-bottom-30">
							<h3 class="heading-1"><span>Technical</span></h3>
							<div class="layout_3--item">
								<div class="thumb">
									<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/home/03/2.jpg" class="img-responsive" alt=""></a>
								</div>
								<span class="cat">Bitcoin</span>
								<h4><a href="#">Use Bitcoinjs to Generate a New Bitcoin Address and Private Key</a></h4>
								<p>A tutorial that goes over how to generate a new bitcoin address and private key using Nodejs ...</p>
								<div class="meta"><span class="author">by Michael G.</span><span class="date">Jan. 5, 2017</span><span class="comments">2</span></div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_sidebar();
get_footer();

<?php 

// Template Name: Home

get_header(); ?>

			<div class="content">

				<div class="inner-content">

					<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
						<div class="module featured">
							<h1>Featured</h1>

							<!-- <div class="unslider"> -->
								<div class="slick" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots":true, "arrows"
								:false}'>
									<div>
										<a href="">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/lorempixel-3.jpg" />
											<div class="caption">
												<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
												<p>From SOCY101 by Charles717</p>
											</div>
											
										</a>
									</div>

									<div>
										<a href="">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/lorempixel-3.jpg" />
											<div class="caption">
												<h2>{{title}}</h2>
												<p>From {{blog}} by {{author}}</p>
											</div>
										</a>
									</div>

									<div>
										<a href="">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/lorempixel-3.jpg" />
											<div class="caption">
												<h2>{{title}}</h2>
												<p>From {{blog}} by {{author}}</p>
											</div>
										</a>
									</div>
								</div>
							<!-- </div> -->

							
						</div>
						

						<div class="module recent-activity">
							<h1>Recent Activity</h1>

							<ul>
								<li>
									<header>
										<h2><a href="">Social Structure in our Food System</a></h2>
										<p>Written by <a href="">kaivalya77</a> on July 17, 2015</p>
										<i class="fa fa-rss"></i>
									</header>
									<div class="content">
										It won’t completely change the way you see food, but it will definitely change the way you see fast food meat and unnatural meat.
									</div>
								</li>

								<li>
									<header>
										<h2>David R. Croteau <a href="">@DavidRCroteau</a></h2>
										<p>July 17, 2015</p>
										<i class="fa fa-twitter"></i>
									</header>
									<div class="content">
										Structural Barriers Discourage Millennial Couples from Being Egalitarian After Having Kids <a href="">#vcusocy101</a> <a href="">http://nyti.ms/1KBmUr1</a>
									</div>
								</li>

								<li>
									<header>
										<h2><a href="">Social Structure in our Food System</a></h2>
										<p>Written by <a href="">kaivalya77</a> on July 17, 2015</p>
										<i class="fa fa-rss"></i>
									</header>
									<div class="content">
										It won’t completely change the way you see food, but it will definitely change the way you see fast food meat and unnatural meat.
									</div>
								</li>
							</ul>

						</div>
						

					</main>

				</div>

			</div>

<?php get_footer(); ?>

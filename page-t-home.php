<?php 

// Template Name: Home

get_header(); ?>

			<div class="content">

				<div class="inner-content">

					<main class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
						<div class="featured">
							<h1>Featured</h1>

							<div class="unslider">
								<ul class="cf">
									<li>
										<a href="">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/lorempixel-1.jpg" />
											<div class="caption">
												<!-- <div class="inner-caption"> -->
													<h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h2>
													<p>From SOCY101 by Charles717</p>
												<!-- </div> -->
											</div>
											
										</a>
									</li>

									<li>
										<a href="">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/lorempixel-2.jpg" />
											<div class="caption">
												<!-- <div class="inner-caption"> -->
													<h2>{{title}}</h2>
													<p>From {{blog}} by {{author}}</p>
												<!-- </div> -->
											</div>
										</a>
									</li>

									<li>
										<a href="">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/lorempixel-3.jpg" />
											<div class="caption">
												<!-- <div class="inner-caption"> -->
													<h2>{{title}}</h2>
													<p>From {{blog}} by {{author}}</p>
												<!-- </div> -->
											</div>
										</a>
									</li>
								</ul>
							</div>

							
						</div>
						

						<div class="recent-activity">
							<h1>Recent Activity</h1>

							<ul>
								<li>
									<header>
										<h2>{{title}}</h2>
										<p>Written by {{author}} on {{date}}</p>
										<i class="fa fa-rss"></i>
									</header>
									<div class="content">
										{{content}}
									</div>
								</li>
							</ul>

						</div>
						

					</main>

				</div>

			</div>

<?php get_footer(); ?>

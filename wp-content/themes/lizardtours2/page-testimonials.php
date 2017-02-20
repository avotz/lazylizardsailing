<?php
/**
 Template Name: Page Testimonials
 */

get_header(); ?>

	<main class="main">
           <div class="inner">
<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile; // End of the loop.
			?>
			<section id="social-widgets" class="social-widgets">
				<div class="inner">
					
						<!-- <h1 class="social-widgets-title">Social</h1> -->
						
						<div class="social-widgets-container">
							<div class="social-widgets-item">
								<h3>Tripadvisor</h3>
								<div id="TA_selfserveprop74" class="TA_selfserveprop">
								<ul id="oX3w76BYuMVL" class="TA_links 9k0HzcHJv">
								<li id="mLJRNXB" class="bnVkdCDh8">
								<a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
								</li>
								</ul>
								</div>
								<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=74&amp;locationId=1451672&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>

								<!-- <div class="counter">
									<a href="http://info.flagcounter.com/PeG5"><img src="http://s10.flagcounter.com/countxl/PeG5/bg_D1DCFF/txt_305EC9/border_6388FF/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
								</div> -->
								

							</div>
							<div class="social-widgets-item">
								<h3>Facebook</h3>
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLazyLizardSailing%2F&tabs=timeline&width=340&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=363306470411928" width="340" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</div>
							<div class="social-widgets-item">
								<h3>Twitter</h3>
								<?php get_sidebar('social'); ?>
							</div>

						</div>
						
					
				</div>
			</section>
			</div><!-- #primary -->
	</main><!-- #main -->
	

<?php
get_sidebar();
get_footer();

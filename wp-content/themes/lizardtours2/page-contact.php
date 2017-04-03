<?php
/**
 Template Name: Page Contact
 */

get_header(); ?>

	<main class="main">
           <section class="contact">
                <div class="inner no-padding">
                <?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
                    <div class="contact__map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9332.274875733017!2d-85.77323439176044!3d10.442333752910777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xead36e9e385a89e5!2sLazy+Lizard+Sailing!5e0!3m2!1ses!2s!4v1475527576038" width="1000" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                    </div>
                    <div class="contact__form">
                        
                        	<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.?>
                    </div>
                </div>
                
              
               
            </section>
	</main><!-- #main -->
	

<?php
/*get_sidebar();*/
get_footer();

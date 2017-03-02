<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lizardtours2
 */

get_header(); ?>

	 <main class="main">
            <section class="intro">
                <div class="inner no-padding">
                    <div class="intro__banner">
                        <div class="cycle-slideshow" 
                            data-cycle-fx="scrollHorz"
                            data-cycle-timeout="4000"
                            data-cycle-slides=".intro__banner__slide"
                            >
                            <!-- empty element for pager links -->
                            <div class="cycle-pager intro__banner__pager"></div>

                            <div class="intro__banner__slide">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner1.jpg">
                                 <a href="#" class="intro__banner__slide__link">Lazy Lizard Sailing offer you boating Costa Rica at an affordable price</a>
                            </div>
                            <div class="intro__banner__slide">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner2.jpg">
                                <a href="#" class="intro__banner__slide__link">Afternoon catamaran tour cruise is simply one of the best ways to spend your afternoon.</a>
                            </div>
                            <div class="intro__banner__slide">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner3.jpg">
                                 <a href="#" class="intro__banner__slide__link">You can charter a Flamingo ocean cruise or enjoy our popular trips.</a>
                            </div>
                            <div class="intro__banner__slide">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner4.jpg">
                                 <a href="#" class="intro__banner__slide__link"> You can try fishing, our sea kayak, snorkel in the ocean or enjoy our open bar.</a>
                            </div>
                            
                            
                        </div>          
                    </div>
                    <div class="intro__featured">
                        <div id="scroll-down">
                            <a href="#"><i class="fa fa-angle-down"></i></a>
                            <small>Scroll Down</small>
                        </div>
                        <div class="nano" style="height: 615px;">
                            <div class="nano-content">

                                <?php rewind_posts(); ?>
                                <?php query_posts( 'post_type=product&order=ASC' ); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        
                                            <article class="intro__featured__item">
                                                <div class="intro__featured__item__img">
                                                    <?php if ( has_post_thumbnail() ) :

                                                    $id = get_post_thumbnail_id($post->ID);
                                                    $thumb_url = wp_get_attachment_image_src($id,'full', true);
                                                    ?>
                                                    
                                                  <div class="film-content-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
                                                    <img src="<?php echo $thumb_url[0] ?>" alt="<?php echo $post->title; ?>">
                                                <?php endif; ?>
                                                   
                                                </div>
                                                <span class="intro__featured__item__title"><?php the_title(); ?></span>
                                                <a class="intro__featured__item__link" href="<?php the_permalink(); ?>"></a>
                                            </article>
                                       
                        
                                    <?php endwhile; ?>
                                    <!-- post navigation -->
                                  
                                <?php endif; ?>

                                
                        
                            </div>
                        </div>
                        
                    </div>
                </div>
                
              
               
            </section>
           
        </main>

<?php

get_footer();

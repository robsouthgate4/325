<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package productionsuk
 */

get_header(); ?>

	<header class="header-wrapper">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="logo-container pull-left">
                     	<a href="<?php echo home_url(); ?>"><img src=" <?php echo get_template_directory_uri() . "/images/layout/generic-skin/main-logo.png"; ?> " alt="325productionsuk"></a>
                	</div>
	                <div class="nav-toggle-container pull-right">
	                    <a id="toggleNav" href="#" class="ion-drag"></a>
	                </div>
	            </div>
	        </div>
	    </div>
	</header><!-- ./header-->

	<div class="site-navigation-wrapper-inner">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <nav class="site-navigation-inner">
	                    <div class="inner-page-nav">
	                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	                    </div>
	                </nav>
	            </div>
	        </div>
	    </div>
	</div><!-- ./div -->
	
	<?php $url = get_template_directory_uri() ?>
	<section class="sub-page-banner" 
    style="background: url(<?=$url . '/images/layout/generic-skin/sub-banner2.jpg' ?>) no-repeat center center; padding: 80px 0">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="sub-page-heading">
	                    <?php
	                       $query = new WP_query( 'pagename=blog' );

	                       // The loop
	                       if ( $query->have_posts() ) {

	                            while ( $query->have_posts() ) {

	                                $query->the_post();

	                                echo '<h1>';
	                                the_title();
	                                echo '</h1>'; 
	                            }   

	                       }

	                       wp_reset_postdata();
	                    ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</section><!-- ./sub-page-banner-->

	<section class="main-content">
	    <div class="container">
	        <div class="blog-page-container">

	        	<div class="col-md-8">
	        		<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>
	        	</div>
	        	<div class="col-md-4">
	        		<?php get_sidebar(); ?>
	        	</div>
				
				

	        </div>
	    </div>
	</section><!-- ./main-content-->


<?php get_footer(); ?>

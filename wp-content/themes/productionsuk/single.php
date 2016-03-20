<?php
/**
 * The template for displaying all single post listings. * 
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
	                    <h1>Blog</h1>
	                </div>
	            </div>
	        </div>
	    </div>
	</section><!-- ./sub-page-banner-->

	<section class="main-content">
	    <div class="container">
	        <div class="blog-page-container">
	        	<div class="col-md-8">
	        		<div class="posts-listing">
	        			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>


	        		</div>
	        		
	        	</div>
	        	<div class="col-md-4">
	        		<div class="sidebar-container">
	        			<?php get_sidebar(); ?>
	        		</div>
	        	</div>		
				

	        </div>
	    </div>
	</section><!-- ./main-content-->


<?php get_footer(); ?>


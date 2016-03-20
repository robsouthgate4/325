

<?php
/**
 * The template for displaying archive listings. * 
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
	                    <h1>Archive</h1>
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
	        			<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?>
							</header><!-- .page-header -->

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', get_post_format() );
								?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'content', 'none' ); ?>

						<?php endif; ?>


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



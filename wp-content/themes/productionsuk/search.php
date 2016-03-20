
<?php
/**
 * The template for displaying the search results. * 
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
	                    <h1>Search</h1>
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
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'productionsuk' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->

							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'content', 'search' );
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


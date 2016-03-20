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
    style="background: url(<?=$url . '/images/layout/generic-skin/sub-banner1.jpg' ?>) no-repeat center center; padding: 80px 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-page-heading">
                    <?php
                       $query = new WP_query( 'pagename=portfolio' );

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
    <div class="projects-list">

           <?php
                // set the "paged" parameter (use 'page' if the query is on a static front page)
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                // the query
                $the_query = new WP_Query( 'showposts=4&post_type=project&paged=' . $paged ); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>



              <?php
                // the loop
                while ( $the_query->have_posts() ) : $the_query->the_post();

                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                $title = strip_tags(get_the_title());

                $url = get_post_meta( get_the_ID(), 'project_url', true );

                ?>


                <div class="row">
                        <article class="project">
                            <div class="col-md-6">
                                <a href="#" class="project-video-thumbnail" data-toggle="modal" data-target="#projectModal" data-video="<?php echo $url ?>" data-heading="<?php echo $title ?>"
                                style="background: url(<?php echo $feat_image ?>) no-repeat center center; background-size: cover;">
                                    <span class="fa fa-play-circle"></span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="project-text">
                                    <?php 
                                        echo the_content();
                                    ?>
                                </div>
                            </div>
                        </article>
                    </div>


                <?php endwhile; ?>

                <?php

                

                echo '<nav class="pagination">';

                // next_posts_link() usage with max_num_pages
                next_posts_link( 'Older Entries', $the_query->max_num_pages );
                previous_posts_link( 'Newer Entries' );

                echo '</nav>';

                ?>

                <?php 
                // clean up after our query
                wp_reset_postdata(); 
                ?>

                <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>
    </div>
</section><!-- ./main-content-->

<?php get_footer(); ?>
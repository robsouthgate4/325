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
                       $query = new WP_query( 'pagename=services' );

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
        <div class="services-item-list"> 
        <?php
            $args = array(

              'post_type' => 'service'

            );

            $projects = new WP_Query( $args );

            if( $projects->have_posts() ) {

              while( $projects->have_posts() ) {

                $projects->the_post();

                $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                $title = strip_tags(get_the_title());

                ?>

                   <div class="row">
                        <div class="col-md-6">
                            <div class="services-text-container">
                                <h2>
                                    <?php echo the_title(); ?>
                                </h2>

                                <?php echo the_content(); ?> 
                            
                           </div>
                        </div>
                        <div class="col-md-6">
                             <div class="services-img-container" style="background: url(<?=$feat_image?>) no-repeat center center; background-size: cover"></div>
                        </div>
                   </div>

                <?php

              }

            }
            else {

              echo 'There are currently no services';
              
            }
          ?> 
        </div>
    </div>
</section><!-- ./main-content-->

<?php get_footer(); ?>
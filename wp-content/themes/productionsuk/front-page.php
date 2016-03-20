<?php
/**
 * The Front page template file.
 * This template is just for the home page.
 * 
 *
 * @package productionsuk
 */


get_header(); ?>

<?php
 $options= get_option( 'starters_theme_homepage_options' );
?>

	<body> 

        <header class="main-banner-wrapper" data-type="background"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-push-2 col-lg-8 col-lg-push-4">
                        <div class="banner-intro">
                            <h1 class="animated slideInRight"><span>325</span>productions<span>uk</span></h1>
                            <p class="animated slideInLeft">Bespoke video production</p>
                            <p class="animated slideInLeft"><em>Communicating your vision through ours</em></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scroll-down animated bounceInUp">
                <span class="ion-mouse"></span>
            </div>
        </header><!-- ./header-->

        <div class="site-navigation-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="site-navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ./site-navigation-wrapper -->

        <section class="introduction-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <div class="introduction">
                            <p>
                                <em>
                                    <?php echo $options['site_intro']; ?>
                                </em>
                            </p>                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./section-->

        <section class="services-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="services-image" style="background: url(<?php echo get_template_directory_uri() . "/images/layout/generic-skin/home-services.jpg" ?>) no-repeat center center; background-size: cover;">

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="services-list">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Communicate your vision through ours…</h2>
                                    <p>
                                        <?php while ( have_posts() ) : the_post(); ?>

                                            <?php the_field('intro-text'); ?>

                                        <?php endwhile; // end of the loop. ?>
                                    </p>
                                </div>
                            </div>
                            

                            <div class="service-item-container">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="service-item">
                                            <h3>Why 325<span class="highlight">productions</span>uk…?</h3>
                                            <ul>
                                                <li>We draw on our collective experience of corporate video, film and television.</li>
                                                <li>We offer a high amount of flexibility and TLC throughout the whole video production process.</li>
                                                <li>We’re friendly, fun and professional, our clients say so!</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                         <div class="service-item">
                                            <h3>How it works…</h3>
                                            <ul>
                                                <li>We listen to what you want, then provide a full project outline and quote before you commit to anything.</li>
                                                <li>We take care of scripts, locations and all production requirements before filming.</li>
                                                <li>We deliver a high quality video or DVD after you’ve approved the edit.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="service-item">
                                            <h3>Who we are…</h3>
                                            <ul>
                                                <li>325<span class="highlight">productions</span>uk is headed up by Creative Producer Russell Stedman.</li>
                                                <li>The crew consists of highly skilled camera operators, editors, animators and visual FX artists.</li>
                                                <li>We are a team with a collective passion for creating the right video for you.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="service-item">
                                            <h3>Shall we…?</h3>
                                            <ul>
                                                <li>Make <a href="contact.php">contact</a>, ask any initial questions you have.</li>
                                                <li>Arrange a free, no obligation face-to-face meeting or Skype call.</li>
                                                <li>Begin your video production journey with us.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./section-->

        <section class="testimonials-wrapper">
            <div class="container">
                <div class="col-md-8 col-md-push-2">
                    <div class="testimonials-slider">
                        <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                            <?php
                                $args = array(

                                  'post_type' => 'testimonial'

                                );

                                $projects = new WP_Query( $args );

                                if( $projects->have_posts() ) {

                                  while( $projects->have_posts() ) {

                                    $projects->the_post();

                                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                                    $title = strip_tags(get_the_title());

                                    ?>

                                       <?php 

                                        if ( $projects->current_post == 0 ) {

                                            echo '<div class="item active">';

                                        } else {

                                            echo '<div class="item">';

                                        }

                                        ?>
                                            <q>
                                                <?php echo $title ?>
                                            </q>
                                            <span><?php echo wp_strip_all_tags(the_content()); ?></span>
                                         </div>

                                    <?php

                                  }

                                }
                                else {

                                  echo 'There are currently no services';
                                  
                                }
                              ?> 
                            </div>
                            <ol class="carousel-indicators">
                            <?php
                                $args = array(

                                  'post_type' => 'testimonial'

                                );

                                $projects = new WP_Query( $args );

                                if( $projects->have_posts() ) {

                                  while( $projects->have_posts() ) {

                                    $projects->the_post();

                                    ?>

                                       <?php 

                                        if ( $projects->current_post == 0 ) {

                                            echo ' <li data-target="#testimonialsCarousel" data-slide-to=" '.$projects->current_post.'" class="active"></li>';

                                        } else {

                                            echo ' <li data-target="#testimonialsCarousel" data-slide-to="'.$projects->current_post.'" class=""></li>';

                                        }

                                        ?>

                                <?php

                                  }

                                }
                                else {
                                  
                                }
                              ?>                                 
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./section-->

        <section class="icons-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12  col-md-8 col-md-push-2">
                        <div class="icons">
                            <h2>
                                Just a selection of some of the amazing clients we have had the pleasure of
                                working with...
                            </h2>
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri() . "/images/content/ecstorm.jpg" ?>" alt="ecstorm"/></li>
                                <li><img src="<?php echo get_template_directory_uri() . "/images/content/cats.jpg" ?>" alt="cats"/></li>
                                <li><img src="<?php echo get_template_directory_uri() . "/images/content/linnworks.jpg" ?>" alt="linnworks"/></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./section-->

        <?php get_footer(); ?>
	</body>
</html>



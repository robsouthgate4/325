<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package productionsuk
 */
?>

	</div><!-- #content -->
	

</div><!-- #page -->

<?php
 $options= get_option( 'starters_theme_footer_options' );
?>

<footer class="site-footer-wrapper">
    <div class="container">
        <div class="row footer-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <address class="footer-address">
                    <?php echo $options['contact_address']; ?>
                </address>
            </div>
            <div class="col-sm-4">
               <div class="footer-logo-container">
                    <a href="<?php echo home_url(); ?>"><img src=" <?php echo get_template_directory_uri() . "/images/layout/generic-skin/main-logo.png"; ?> " alt="325productionsuk"></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-container">
                    <p>M: <?php echo $options['contact_number']; ?></p>
                    <p>E: <a href="mailto:<?php echo $options['email_address']; ?>" target="_blank"><?php echo $options['email_address']; ?></a></p>
                    <p><a href="contact.html">Contact us</a></p>
                    <p>Copyright: <?php echo $options['copyright']; ?></p>
                </div>
                <div class="social-container pull-right">
                    <ul class="list-inline">
                        <li><a class="ion-social-facebook" href=" <?php echo $options['facebook_url']; ?>" target="_blank"></a></li>
                        <li><a class="ion-social-twitter" href=" <?php echo $options['twitter_url']; ?>" target="_blank"></a></li>
                        <li><a class="ion-social-youtube" href=" <?php echo $options['youtube_url']; ?>" target="_blank"></a></li>
                        <li><a class="ion-social-linkedin" href=" <?php echo $options['linkedin_url']; ?>" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- ./footer-->

<div class="modal fade" id="projectModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Heading not available</h4>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61833208-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
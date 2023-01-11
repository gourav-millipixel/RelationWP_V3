<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Relations
 */

?>



<footer id="footer" class="pt-3 mt-5">

    <div class="container py-5 bg-base-400 r-24 mailchip">
        <div class="row align-items-center">
            <div class="col-lg-7 fotMailchip">
                <?php echo do_shortcode('[widget id="mc4wp_form_widget-2"]'); ?>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center fotMailchipimg">
                <?php echo do_shortcode('[widget id="media_image-2"]'); ?>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="footerNav">

            <div class="row pt-5 pb-lg-5 pb-4 fotNav my-0 my-lg-4">
                <div class="col">
                    <?php echo do_shortcode('[widget id="nav_menu-2"]'); ?>
                </div>
                <div class="col">
                    <?php echo do_shortcode('[widget id="nav_menu-3"]'); ?>
                </div>
                <div class="col leagl">
                    <?php echo do_shortcode('[widget id="nav_menu-4"]'); ?>
                </div>
                <div class="col">
                    <?php echo do_shortcode('[widget id="text-5"]'); ?>
                </div>
                <div class="col">
                    <?php echo do_shortcode('[widget id="text-6"]'); ?>
                </div>
            </div>

            <div class="row align-items-end mb-4">
                <div class="col-md-8">
                    <div class="mb-3"><?php the_custom_logo(); ?></div>
                    <div class="text-sm copyRight"><?php echo do_shortcode('[widget id="text-4"]'); ?></div>
                </div>
                <div class="col-md-4">

                    <div class="fotSocial">
                        <?php echo do_shortcode('[cn-social-icon attr_class="mt-3 cutomSocial" selected_icons="1,2,3"]'); ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery-3.6.0.min.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/anime.tween.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery.fancybox.min.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/slick.min.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/aos.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery.paroller.min.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery.selectric.js'; ?>"></script>
<!-- <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/circular-slider.js'; ?>"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/ScrollWatch-2.0.1.min.js'; ?>"></script> -->
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/testimonialsSlider.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/investor-anim.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/custom.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/fullpage.js'; ?>"></script>

<?php 
$pageTemp = basename( get_page_template() );
if($pageTemp == 'home-template.php') :
    ?>
<script src="<?php echo get_stylesheet_directory_uri().'/assets/js/homeStickyCards.js'; ?>"></script>
<?php endif; ?>
<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['', '', ''],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['First page', 'Second page', 'Third and last page'],
        responsiveWidth: 900,
        afterResponsive: function(isResponsive){

        }

    });
</script>
</body>

</html>
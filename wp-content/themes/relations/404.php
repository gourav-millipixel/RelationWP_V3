<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Relations
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found mt-0 mt-lg-4">
		
			<!-- <header class="page-header">
				<h1 class="page-title"></h1>
			</header>.page-header -->

		

					<?php
					//get_search_form();

					//the_widget( 'WP_Widget_Recent_Posts' );
					?>

				<!-- 	<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'relations' ); ?></h2>
						<ul>
							<?php
							//wp_list_categories(
							//	array(
								//	'orderby'    => 'count',
							//		'order'      => 'DESC',
							//		'show_count' => 1,
							//		'title_li'   => '',
								//	'number'     => 10,
							//	)
							//);
							?>
						</ul>
					</div> .widget -->

					<?php
					/* translators: %1$s: smiley */
					//$relations_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'relations' ), convert_smilies( ':)' ) ) . '</p>';
					//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$relations_archive_content" );

					//the_widget( 'WP_Widget_Tag_Cloud' );
					?>

		<!-- .page-content -->
		
		



        <div class="bg-primary-200 container r-24 p-5 faqHeading r-24-0">
            <div class="row">
                <div class="col-lg-12 text-center text-base-100">
                    <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'relations' ); ?></h1>
                    <p class="h4 pt-2 mt-1 pt-lg-4 mt-lg-0"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'relations' ); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="container mt-5 pt-0 pt-lg-5">
            <div class="row g-0">
                <div class="col-lg-12">
                    <?php echo apply_shortcodes( '[faqs]' ); ?>
                </div>
            </div>
        </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

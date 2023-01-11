<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Relations
 */
$sub_title = get_field('sub_title');
?>

<article class="mb-0" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="bg-wbgradient py-5 text-center pageBannerDefault">
        <div class="container">
            <header class="entry-header">
                <?php if($sub_title) : ?>
                <span class="text-uppercase text-primary-100"><?php echo $sub_title; ?></span>
                <?php endif; ?>
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <p class="h4 text-gray-200 mt-4 mb-0" data-aos="fade-up">
                    Last updated on: <b class="font-bold"><?php the_modified_date('F d, Y'); ?></b>
                </p>
            </header><!-- .entry-header -->

            <?php //relations_post_thumbnail(); ?>
        </div>
    </section>
    <section class="bg-wbgradient">
        <div class="container">
            <div class="entry-content pageContent">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <?php
						the_content();
						/*
		
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'relations' ),
								'after'  => '</div>',
							)
						);
						*/
						?>
                    </div>
                </div>
            </div><!-- .entry-content -->
            <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer">
                <?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'relations' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
            </footer><!-- .entry-footer -->
            <?php endif; ?>
        </div>
    </section>


</article><!-- #post-<?php the_ID(); ?> -->
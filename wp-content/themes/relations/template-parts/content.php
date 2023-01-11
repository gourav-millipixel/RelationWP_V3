<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Relations
 */

 $category_detail=get_the_category();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="category mb-2">
            <?php foreach($category_detail as $cd) : ?>
            <span class="bg-base-400"><?php echo $cd->cat_name; ?></span>
            <?php endforeach; ?>
        </div>
        <?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
        <div class="pt-3 mb-4 pb-3">
            <span class="text-gray-200">
                <?php the_modified_date('F d, Y'); ?>
            </span>
        </div>
        <!-- <div class="entry-meta">
            <?php
				// relations_posted_on();
				// relations_posted_by();
			?>
        </div> -->
        <!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="postThumbnail">
        <?php relations_post_thumbnail(); ?>
    </div>

    <div class="entry-content postPageContent">
        <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'relations' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
/*
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'relations' ),
				'after'  => '</div>',
			)
		);
		*/
		?>
    </div><!-- .entry-content -->

    <!-- <footer class="entry-footer">
        <?php // relations_entry_footer(); ?>
    </footer> -->
    <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
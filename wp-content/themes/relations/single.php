<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Relations
 */

get_header();
?>

<main id="primary" class="site-main">

    <div class="container signlePost">
        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
/*
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'relations' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'relations' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			*/

		endwhile; // End of the loop.
		?>
    </div>

    <?php
    $recommended_blogs = get_field('recommended_blogs');
    if($recommended_blogs) :
    ?>
    <section class="recommendedBlogs p-100 bg-wbgradient">
        <div class="container">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <?php if($recommended_blogs['title']) : ?>
                    <h2 class="h1 gradient-span font-bold"><?php echo $recommended_blogs['title']; ?></h2>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if($recommended_blogs['action']['text']) : ?>
                    <a href="<?php echo $recommended_blogs['action']['link']; ?>"
                        class="link-primary text-primary-100 h5">
                        <span><?php echo $recommended_blogs['action']['text']; ?> </span>
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.35355 12.0903C7.15829 12.2856 6.84171 12.2856 6.64645 12.0903C6.45119 11.895 6.45119 11.5784 6.64645 11.3832L11.3818 6.6478H1.41112C1.13498 6.6478 0.911126 6.42394 0.911126 6.1478C0.911125 5.87165 1.13498 5.6478 1.41112 5.6478L11.3818 5.6478L6.64645 0.912413C6.45119 0.717149 6.45119 0.400565 6.64645 0.205303C6.84171 0.0100387 7.15829 0.0100393 7.35355 0.205302L12.9421 5.7939L12.9424 5.79424C12.9431 5.79495 12.9438 5.79566 12.9445 5.79637C13.0338 5.88668 13.0889 6.01081 13.0889 6.1478C13.0889 6.21559 13.0754 6.28024 13.0509 6.33919C13.0265 6.39817 12.9904 6.45342 12.9424 6.50135L7.35355 12.0903Z"
                                fill="#6846D4" />
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
            $blogs = $recommended_blogs['blogs'];
            if($blogs) :
            ?>
            <div class="row resourcesBlogs">
                <?php 
                foreach($blogs as $blogItm) : 
                    $blog = $blogItm['blog'];
                    $title = $blog->post_title;
                    $id = $blog->ID;
                    $slug = get_permalink($id);
                    $category_detail=get_the_category($id);
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="mt-60 resourcesBlogCard">
                        <a href="<?php echo $slug; ?>">
                            <div class="resourcesBlogCardImage">
                                <?php echo get_the_post_thumbnail( $id);?>
                                <div class="category">
                                    <?php foreach($category_detail as $cd) : ?>
                                    <span><?php echo $cd->cat_name; ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="resourcesBlogCardContent">
                                <h4><?php echo $title; ?></h4>
                                <div class="text-gray-200 mt-2 pt-1"><?php echo get_the_date( 'M d, Y', $id ) ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
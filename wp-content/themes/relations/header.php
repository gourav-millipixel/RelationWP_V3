<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Relations
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/jquery.fancybox.min.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/slick.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/aos.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/style.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/examples.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/css/fullpage.css'; ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'relations' ); ?></a>
        <?php
			$signup_action = get_field('signup_action', 'options');
		?>
        <header id="masthead" class="site-header headerMain border-bottom py-3">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0 d-block">
                    <div class="row">
                        <div class="col-xl-4 d-flex align-items-center headerTopBar">
                            <div class="d-flex align-items-center">
                                <div class="d-xl-none d-flex">
                                    <button class="menuToggler navbar-toggler-btn ps-4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#navbarMain"
                                        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                                        <svg class="iconMenu" width="24" height="21" viewBox="0 0 24 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M24 1H0V0H24V1ZM24 11H0V10H24V11ZM0 21H24V20H0V21Z" fill="#6846D4" />
                                        </svg>
                                        <svg class="iconCross" width="19" height="18" viewBox="0 0 19 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.06066 0.646447C1.8654 0.451184 1.54882 0.451184 1.35355 0.646447C1.15829 0.841709 1.15829 1.15829 1.35355 1.35355L8.79289 8.79289L0.646447 16.9393C0.451184 17.1346 0.451184 17.4512 0.646447 17.6464C0.841709 17.8417 1.15829 17.8417 1.35355 17.6464L9.5 9.5L17.617 17.617C17.8123 17.8123 18.1289 17.8123 18.3241 17.617C18.5194 17.4217 18.5194 17.1052 18.3241 16.9099L10.2071 8.79289L17.617 1.38299C17.8123 1.18773 17.8123 0.871146 17.617 0.675884C17.4217 0.480622 17.1052 0.480622 16.9099 0.675884L9.5 8.08579L2.06066 0.646447Z"
                                                fill="#6846D4" />
                                        </svg>
                                    </button>
                                </div>
                                <?php the_custom_logo(); ?>
                            </div>
                            <?php if($signup_action['text']) : ?>
                            <div class="d-xl-none ms-auto signUpMob">
                                <a href="<?php echo $signup_action['link']; ?>" class="btn-primary btn-sm">
                                    <?php echo $signup_action['text']; ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-xl-8">
                            <div class="collapse navbar-collapse con-end navbarMain" id="navbarMain">
                                <div class="row mt-3 row order-xl-2">
                                    <div class="col-lg-12 d-xl-flex align-items-center">
                                        <?php
											wp_nav_menu(
												array(
													'menu' => 'login Menu',
													'container' => 'ul',
													'menu_class'        => 'navbar-nav d-flex ms-auto main-menu-ul',
												)
											);
										?>
                                        <?php if($signup_action['text']) : ?>
                                        <div class="signUpDesktop">
                                            <a href="<?php echo $signup_action['link']; ?>" class="btn-primary btn-sm">
                                                <?php echo $signup_action['text']; ?>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
<!--                                 <div class="row order-xl-1 menuTopNav">
                                    <div class="col-lg-12">
                                        <//?php
											wp_nav_menu(
												array(
													'menu' => 'top-menu',
													'container' => 'ul',
													'menu_class'        => 'navbar-nav d-flex ms-auto navbar-nav-right',
												)
											);
										?>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header><!-- #masthead -->
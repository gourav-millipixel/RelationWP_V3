<?php /* Template Name: Homepage Template*/?>

<?php
    get_header();
?>
<?php
        $banner = get_field('banner');
        $seling_buying = get_field('seling_buying');
        $contingenciesinterested = get_field('contingencies-interested');
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>
<main id="fullpage" class="site-main">
    <section id="section1" class="section banner pt-5 pb-0 bg-wbgradient">

        <div class="container pt-5 mt-4">
            <div class="row mt-3">
                <div class="col-lg-5">
                    <div class="homeSelectMain">
        
                        <?php if($banner["title"]) : ?>
                        <div class="row mx-0 bannerHomeTop mb-3 pb-0 mb-lg-5 pb-lg-2">
                            <h1 class="text-base-200 font-normal p-0 gradient-span mb-3"><?php echo $banner["title"]; ?>
                            </h1>
                            <h4 class="p-0"><?php echo $banner["title_small"]; ?>
                            </h4>
                        </div>
                        <?php endif ?>

                        <div data-aos="fade-up">
                            <?php if( $banner['action'] ): ?>
                            <a href="<?php echo $banner['action']['link']; ?>" class="btnIcon btn-primary btn-sm me-2">
                                <?php echo $banner['action']['text']; ?><svg width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.3536 17.5245C10.1583 17.7198 9.84171 17.7198 9.64645 17.5245C9.45119 17.3293 9.45119 17.0127 9.64645 16.8174L15.779 10.6848L3.0139 10.6848C2.73776 10.6848 2.5139 10.4609 2.5139 10.1848C2.51391 9.90864 2.73776 9.68478 3.0139 9.68478H15.779L9.64645 3.55216C9.45119 3.3569 9.45119 3.04031 9.64645 2.84505C9.84171 2.64979 10.1583 2.64979 10.3536 2.84505L17.3393 9.83088L17.3396 9.83123C17.3404 9.83194 17.3411 9.83264 17.3418 9.83335C17.3887 9.8808 17.4241 9.93529 17.4482 9.99339C17.4726 10.0523 17.4861 10.117 17.4861 10.1848C17.4861 10.2526 17.4726 10.3172 17.4482 10.3762C17.4238 10.4351 17.3876 10.4904 17.3396 10.5383L10.3536 17.5245Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <?php endif;?>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="homeSlider pb-0" >
                        <?php
                                $best_deal_rep =  $banner['best_deal']; 
                                if($best_deal_rep) : ?>
                        <?php
                                foreach( $best_deal_rep as $best_deal_itm ) :
                                    $title = $best_deal_itm['title']; 
                                    $verified_tag = $best_deal_itm['verified_tag']; 
                                    $left_tag = $best_deal_itm['left_tag']; 
                                    $right_tag = $best_deal_itm['right_tag']; 
                                    $image = $best_deal_itm['image']; 
                                    
                                
                                ?>
                        <div class="">

                            <div class="bestDealsSliderInfo">
                                <?php if($title) : ?>
                                <h4 class="nameSpace"><?php echo $title; ?></h4>
                                <?php endif; ?>
                                <?php if($verified_tag) : ?>
                                <div class="verified_tag tag d-flex gap-2">
                                    <figure>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1_6)">
                                                <path
                                                    d="M19.2988 3.3288L19.2989 3.32875L19.2891 3.32047C17.8695 2.12398 15.6384 2.11635 14.2235 3.32586C14.2234 3.32596 14.2233 3.32606 14.2232 3.32616L12.0514 5.18179L12.0514 5.18177L12.0448 5.18746C11.9852 5.23912 11.8307 5.3357 11.6045 5.41977C11.3781 5.5039 11.1988 5.53132 11.1229 5.53132H8.7446C6.60401 5.53132 4.85401 7.28132 4.85401 9.42191V11.7865C4.85401 11.8615 4.82701 12.0374 4.74365 12.2626C4.66209 12.4829 4.56696 12.6413 4.51081 12.7099L2.6598 14.89L2.65979 14.89L2.65585 14.8947C1.47161 16.3035 1.47161 18.515 2.65585 19.9239L2.65584 19.9239L2.6598 19.9286L4.51083 22.1087C4.56698 22.1773 4.6621 22.3357 4.74365 22.556C4.82701 22.7812 4.85401 22.9571 4.85401 23.0321V25.3829C4.85401 27.5235 6.60401 29.2735 8.7446 29.2735H11.1229C11.2073 29.2735 11.3867 29.3017 11.6076 29.3843C11.8285 29.4668 11.9821 29.563 12.0448 29.6174L12.048 29.6201L14.2201 31.4898L14.2201 31.4898L14.2299 31.4981C15.6496 32.6947 17.8809 32.7022 19.2958 31.4924L19.2988 31.4898L21.471 29.6201L21.4741 29.6174C21.5337 29.5657 21.6882 29.4691 21.9145 29.3851C22.1409 29.3009 22.3202 29.2735 22.396 29.2735H24.7331C26.8737 29.2735 28.6237 27.5235 28.6237 25.3829V23.0458C28.6237 22.9615 28.6519 22.7821 28.7345 22.5612C28.817 22.3402 28.9132 22.1867 28.9676 22.124L28.9703 22.1208L30.84 19.9487L30.84 19.9487L30.8483 19.9389C32.0449 18.5192 32.0524 16.2879 30.8426 14.873L30.84 14.8699L28.9703 12.6978L28.9676 12.6946C28.9159 12.635 28.8193 12.4805 28.7352 12.2543C28.6511 12.0279 28.6237 11.8486 28.6237 11.7728V9.43565C28.6237 7.29507 26.8737 5.54507 24.7331 5.54507H22.396C22.3117 5.54507 22.1323 5.51683 21.9114 5.4343C21.6904 5.35173 21.5369 5.25557 21.4741 5.20121L21.471 5.19848L19.2988 3.3288Z"
                                                    fill="#66C695" stroke="white" stroke-width="2.47458"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.7691 17.3956L15.0823 20.7225L21.7224 14.0686"
                                                    stroke="white" stroke-width="1.55973" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1_6">
                                                    <rect width="32.9944" height="32.9944" fill="white"
                                                        transform="translate(0.248589 0.898361)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </figure>
                                    <h6 class="taginner"><?php echo $verified_tag; ?></h6>
                                </div>

                                <?php endif; ?>
                                <?php if($left_tag) : ?>
                                <h6 class="left_tag tag"><?php echo $left_tag; ?></h6>
                                <?php endif; ?>
                                <?php if($right_tag) : ?>
                                <h6 class="right_tag tag"><?php echo $right_tag; ?></h6>
                                <?php endif; ?>
                            </div>
                            <div class="banneruserImage">
                                <?php if($image) : ?>
                                <img class="w-100" src="<?php echo $image; ?>" alt="image">
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section2" class="section py-lg-4 pt-5 bg-base-500 sbc">
    <?php 
     $sales_lease = get_field('sales_lease');
     if($sales_lease) : 
     ?>

    <?php $countbox = $sales_lease['count-box']; 
            if($countbox) : ?>
    
        <div class="container py-2">
            <div class="row sbcRow text-center text-lg-start">
            <div class="wraper">
                <?php
                    foreach( $countbox as $countbox_itm ) :                  
                        $title = $countbox_itm['title_dec']; 
                        $image = $countbox_itm['image']; 
                    ?>
                    <?php if($image) : ?>
                        <div class="item prof-1"><img class="w-100" src="<?php echo $image; ?>" alt="image"></div>
                    <?php endif; ?>
                    <?php if($title) : ?>
                        <div class="info">info<?php echo $title; ?></div>
                    <?php endif; ?>
             
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    
    <?php endif; ?>

    <?php endif; ?>

    </section>

   

</main><!-- #main -->

<?php
    get_footer();
?>
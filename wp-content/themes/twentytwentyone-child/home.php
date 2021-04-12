<?php
/**
* Template Name: Home Page
*/
get_header();
?>
	<div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="light-bg">
                    <div class="row">
                        <div class="col-md-5" data-aos="fade-down">
                            <div class="main-title">
							<?php $title = get_field('home_banner_text');
							$banner = get_field('banner_image');
							$bannerLink = get_field('banner_read_more_link');
							if($title){
								echo $title;
							}else{
							?>
                                <span>_Welcome to</span>
                                <h2>
                                    Kasba Indian <br>
                                    Restaurant
                                </h2>
                                <p>Get 10% off on all online orders
                                    above $25 for both collection and delivery</p>
							<?php }?>		
                            </div>
                            <a class="main-btn-red" href="<?php echo $bannerLink ? $bannerLink : '#';?>">read more</a>
                        </div>
                        <div class="col-md-7" data-aos="fade-down">
                            <div class="chef-img-banner">
							<?php if($banner){ ?>
								<img src="<?php echo $banner;?>" alt="Kasba India Restaurant">
							<?php } else { ?>
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/chef-img.png" alt="Kasba India Restaurant">
							<?php } ?>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $about = get_field('about_block');?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12col-xs-12">
                    <div class="about-img" data-aos="fade-right">
                        <img src="<?php echo get_the_post_thumbnail_url($about->ID,'full');?>" alt="<?php echo $about->post_title;?>">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-cont" data-aos="fade-left">					
                        <span class="sup-title"><?php echo $about->post_title;?></span>
                        <h2 class="main-title"><?php echo get_field('page_extra_title',$about->ID );?></h2>
                        <?php echo get_field('short_content',$about->ID );?>
                        <a class="main-btn-red" href="<?php echo get_permalink($about->ID);?>">Explore Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php 
    /** Only new recipes */
	$argsRecipe = [
		'numberposts'	=>3,
		'orderby'		=> 'menu_order',
        'order'         => 'ASC',
        'meta_key'      => 'is_new_recipe',
        'meta_value'    => true,
		'post_type'		=> 'recipes'
	];
	$recipes = get_posts( $argsRecipe );
	if(count($recipes) > 0 ){ ?>
    <div class="section fading-bg mt-0 pb-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title">
                        <span class="sup-title">Recipes</span>
                        <h2 class="main-title">Our New Recipes</h2>
                    </div>
                </div>
				<?php foreach($recipes as $recipe ) { ?>
                    <div class="col-md-4 col-sm-12 col-xs-12" data-aos="flip-left">
                        <div class="food-box">
                            <img src="<?php echo get_the_post_thumbnail_url($recipe->ID,'full');?>" alt="">
                            <h5><?php echo $recipe->post_title;?></h5>
                            <span>$<?php echo get_field('recipes_price', $recipe->ID);?></span>
                        </div>
                    </div>
				<?php } ?>
                <a class="main-btn-red" data-aos="zoom-in" href="<?php echo get_post_type_archive_link( 'recipes' ); ?>">See More Recipes</a>
            </div>
        </div>
    </div>
	<?php } ?>
   <?php 
	$offers = get_field('special_offers');
	if($offers['offers_enabled']){
	?>
    <div class="section mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title mt-0">
                        <span class="sup-title">offers</span>
                        <h2 class="main-title">Our Special Offers</h2>
                    </div>
                </div>
				<?php for($a=1;$a<=3;$a++) { ?>
				<?php if(!empty($offers['offer_image_'.$a])) : ?>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="offer-box" data-aos="fade-up" data-aos-duration="3000">
							<?php if(empty($offers['offer_link_'.$a])){ ?>
								<img src="<?php echo $offers['offer_image_'.$a];?>" alt="">								
							<?php } else { ?>
							<a href="<?php echo $offers['offer_link_'.$a] ? $offers['offer_link_'.$a] : 'javascript:void(0)';?>">
								<img src="<?php echo $offers['offer_image_'.$a];?>" alt="Offer">								
							</a>
							<?php } ?>
						</div>
					</div>
					<?php endif; ?>
				<?php } ?>                
            </div>
        </div>
    </div>
	<?php } ?>
  	<?php 
	$argsServices = [
		'numberposts'	=>3,
		'orderby'		=> 'order',
        'order'         => 'ASC',
		'post_type'		=> 'services'
	];
	$services = get_posts( $argsServices );
	if(count($services) > 0 ){ ?>
    <div class="section service-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title mt-0">
                        <span class="sup-title">Features</span>
                        <h2 class="main-title">Our Awsome Services</h2>
                    </div>
                </div>
				<?php foreach($services as $service ) { ?>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="service-box" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="<?php echo get_the_post_thumbnail_url($service->ID,'full');?>" alt="">
                        <h5><?php echo $service->post_title;?></h5>
                        <p><?php echo $service->post_excerpt;?></p>
                    </div>
                </div>
				<?php } ?>                
            </div>
        </div>
    </div>
	<?php } ?>
  	<?php 
      /** All recipes */
	$argsRecipe = [
		'numberposts'	=> 6,
		'orderby'		=> 'date',
        'order'         => 'DESC',       
		'post_type'		=> 'recipes'
	];
	$recipes = get_posts( $argsRecipe );
	if(count($recipes) > 0 ){
	?>
    <div class="section fading-bg mt-5 pb-5 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="center-title">
                        <span class="sup-title">Dishes</span>
                        <h2 class="main-title">Food Gallery</h2>
                    </div>
                </div>
				<?php foreach($recipes as $recipe ) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <div class="fad-box-gred">
                        <img src="<?php echo get_field('gallery_image', $recipe->ID);?>" alt="">
                        <h4><?php echo $recipe->post_title;?></h4>
                    </div>
                </div>
				<?php } ?>
                
                <a class="main-btn-red mt-4" href="<?php echo get_post_type_archive_link( 'recipes' ); ?>">See More Recipes</a>
            </div>
        </div>
    </div>
	<?php } ?>
    <?php
        $argsEvents = [
            'numberposts'	=> 8,
            'meta_key'      => 'event_date',
            'orderby'		=> 'meta_value',
            'order'         => 'ASC',       
            'post_type'		=> 'events'
        ];
        $events = get_posts( $argsEvents );
        if(count($events) > 0 ){
    ?>
    <div class="section mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="center-title mt-0">
                        <span class="sup-title">Celebration</span>
                        <h2 class="main-title">Our Events</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="events-part">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                            <?php foreach($events as $event ) { ?>
                                <div class="swiper-slide" data-aos="fade-left">
                                    <a href="<?php echo get_permalink($event->ID);?>">
                                        <div class="event-box">
                                            <img src="<?php echo get_the_post_thumbnail_url($event->ID,'full');?>" alt="">
                                            <h4 class="event-title"><?php echo $event->post_title;?></h4>
                                            <!--span><?php echo get_field('event_date', $event->ID);?></span-->
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>                                
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php } ?>       
    <?php
        $argsNews = [
            'numberposts'	=> 3,
            'orderby'		=> 'date',
            'order'         => 'DESC',       
            'post_type'		=> 'post',
            'category_name' => 'news'
        ];
        $latestNews = get_posts( $argsNews );        
        if(count($latestNews) > 0 ){
    ?>

    <div class="section mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="center-title mt-0">
                        <span class="sup-title">Latest News</span>
                        <h2 class="main-title">Our Delicious News</h2>
                    </div>
                </div>
                <?php foreach($latestNews as $news) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="news-box" data-aos="fade-up-right">
                        <a href="<?php echo get_permalink($news->ID);?>">
                            <img src="<?php echo get_the_post_thumbnail_url($news->ID,'full');?>" alt="<?php echo $news->post_title;?>">
                            <h4><?php echo $news->post_title;?></h4>
                            <p><?php echo $news->post_excerpt;?></p>
                            <a href="<?php echo get_permalink($news->ID);?>" class="news-read-more">Read More <span class="next-arrow"></span></a>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up-right">
                    <div class="about-cont">
                        <span class="sup-title">Testimonial</span>
                        <h2 class="main-title">That’s what our <br>
                            Client Says</h2>
                    </div>
                    <?php echo do_shortcode('[testimonial_view id="1"]');?>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" data-aos="fade-up-left">
                    <div class="about-img">
                        <?php if(get_field('bottom_image')) { ?>
                            <img src="<?php echo get_field('bottom_image');?>" alt=""> 
                        <?php } else { ?>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/review-side-img.png" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== TESTIMONIAL END ===== -->
<?php get_footer();?>
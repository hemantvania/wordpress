<?php
/**
* Template Name: Blog Page
*/
get_header();
?>
<?php $mainBanner = get_field('page_banner');?>
<div class="main-banner about-bg mini-banner-bg" <?php if(!empty($mainBanner)){ echo "style='background-image: url(".$mainBanner.")'"; } ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <?php echo get_field('content_column_one');?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="about-right-text">
                                <?php echo get_field('content_column_two');?>
                            </div>        
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="about-right-text">
								<?php echo get_field('content_column_three');?>
                            </div>        
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
	<?php if(get_field('embedded_video_code')):?>
	<div class="section mt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="video-box">
                        <?php echo get_field('embedded_video_code');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php endif;?>
	<?php $specialistBanner = get_field('specialist_banner');?>
    <div class="speciallist-sec" <?php if(!empty($specialistBanner)){ echo "style='background-image: url(".$specialistBanner.")'"; } ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sepcial-title">
                        <h2>
                            SPECIALISTS
                        </h2>
                        <p><?php echo get_field('specialist_text');?></p>
                        <a class="main-btn-red" href="<?php echo site_url('/book-a-table/');?>" alt="Book a Table">book a table</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
	<?php 
	$args = array(  
        'post_type' => 'specialists',
        'post_status' => 'publish',
        'posts_per_page' => 4, 
        'orderby' => 'menu_order', 
        'order' => 'ASC'
    );

    $specialists = new WP_Query( $args );     
	?>	
    <div class="team-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="team-detail">
                        <div class="row">
							<?php while ( $specialists->have_posts() ) : $specialists->the_post(); 
								$featured_img = get_the_post_thumbnail_url( $specialists->ID, 'medium' );
								?>
								<div class="col-md-3 col-sm-12 col-xs-12">
									<div class="memb-box">
										<?php if($featured_img) : ?>
											<img src="<?php echo $featured_img;?>" alt="<?php the_title();?>">
										<?php else : ?>
											<img src="<?php echo get_stylesheet_directory_uri();?>/assets/image/team/the-chef.jpg" alt="<?php the_title();?>">
										<?php endif; ?>
										<h4><?php the_title();?></h4>
										<h5><?php the_field('chef_lable');?></h5>
									</div>
								</div>								
								<?php endwhile;								
									wp_reset_postdata();
								?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>
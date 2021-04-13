<?php
/**
* Template Name: Gallery Page
*/
get_header();
?>
<?php $mainBanner = get_field('page_banner');?>
<div class="main-banner gallery-bg mini-banner-bg" <?php if(!empty($mainBanner)){ echo "style='background-image: url(".$mainBanner.")'"; } ?>>
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <div class="banner-title">
                       <h1><?php echo get_field('page_extra_title');?></h1>
                       <?php echo get_field('short_content');?>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <div class="gallery-parts">
    <div class="container">
    <?php $images = get_field('gallery');?>
        <?php if(count($images) > 0) :
                $counter = 0;                
                foreach($images as $image):
                  //  print_r($image);die;
                    if(!empty($image['image'])) : 
                    $counter++;
                    if(($counter%3) == 1) echo '<div class="row">';?>
                    <a href="<?php echo $image['image_link'] ? $image['image_link'] : 'javascript:void(0)'; ?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                        <img src="<?php echo $image['image']; ?>" class="img-fluid rounded">
                    </a>
                <?php if(($counter%3) == 0) : echo '</div>'; endif;?>
                <?php endif; // image not empty ?>
                <?php endforeach;?>
            <?php endif;?>        
      </div>
   </div>
<?php get_footer();?>
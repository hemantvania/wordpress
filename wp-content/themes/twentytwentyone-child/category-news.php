<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
------------news------
<?php if ( have_posts() ) : ?>

	<div class="main-banner about-bg mini-banner-bg mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
						<h1>Our Delicious News</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="section mt-0 pt-5">
		<div class="container">
			<div class="row">
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="blog-list">
							<?php $postThumb = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : getPlaceHolderUrl();?>
							<a href="<?php echo get_permalink();?>" class="blog-thumbimage" style="background-image:url('<?php echo $postThumb;?>');"></a>							
							<h4><a href="<?php echo get_permalink();?>"><?php the_title()?></a></h4>
							<p><?php the_excerpt() ?></p>
							
						</div>
					</div>							
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<?php twenty_twenty_one_the_posts_navigation(); ?>
<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>

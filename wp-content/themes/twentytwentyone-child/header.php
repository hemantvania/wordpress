<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header">
        <div class="container">
            <div class="row">
			<?php if ( has_custom_logo() ) : ?>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo" data-aos="fade-up" data-aos-anchor-placement="top-center">
                        <a href="<?php echo get_site_url();?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                </div>
			<?php endif;?>				
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu" data-aos="fade-left">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'menu_class'      => '',
									'container_class' => '',
									'items_wrap'      => '<ul>%3$s</ul>',
									'fallback_cb'     => false,
								)
							);
							?>
					<?php endif; ?>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header">
        <header>
            <div class="logo">
			<?php if ( has_custom_logo() ) : ?>
				<a href="<?php echo get_site_url();?>">
					<?php the_custom_logo(); ?>
				</a>               
			</div>
			<?php endif;?>	           
			<input type='checkbox' id='toggle' style='display:none;' />
            <label class='toggle-btn toggle-btn__cross' for='toggle'>
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </label>
            <nav>
			<?php if ( has_nav_menu( 'mobile-menu' ) ) : ?>
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'mobile-menu',
							'menu_class'      => '',
							'container_class' => '',
							'items_wrap'      => '<ul>%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
					?>
			<?php endif; ?>
            </nav>
          </header>
    </div>
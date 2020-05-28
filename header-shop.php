<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header id="masthead" class="site-header featured-image">

			<div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			</div><!-- .site-branding-container woo loads this-->
				<div class="site-featured-image">
						<figure class="post-thumbnail">
						<img width="1568" height="755" src="http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-1568x755.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-1568x755.jpg 1568w, http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-450x217.jpg 450w, http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-300x144.jpg 300w, http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-768x370.jpg 768w, http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-1024x493.jpg 1024w" sizes="(max-width: 1568px) 100vw, 1568px" data-attachment-id="63" data-permalink="http://ram.heulog.co.uk/sample-page/rebel_no_grad/" data-orig-file="http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad.jpg" data-orig-size="2500,1204" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Rebel_no_grad" data-image-description="" data-medium-file="http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-300x144.jpg" data-large-file="http://ram.heulog.co.uk/wp-content/uploads/2019/10/Rebel_no_grad-1024x493.jpg"></figure>
						<div class="entry-header">	
							<h1 class="entry-title"><?php woocommerce_page_title();?></h1>
						</div>
					</div>
				

		</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage LUDA
 * @since LUDA 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if gt IE 8]>
<html class="ie-modern">
<![endif]-->
<!--[if !IE]><!-->
<html class="not-ie" <?php language_attributes(); ?>>
<!--<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<link rel="icon" type="image/png" href="/favicon.png" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php if(is_front_page() || is_archive()): ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<?php else: ?>
<meta property="og:title" content="<?php echo single_post_title(); ?>" />
<?php endif; ?>
<?php if(is_singular()): ?>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="container">

<?php
// set timezone for site
date_default_timezone_set('America/Chicago');
// get navigation and options info
$logo_svg = get_field('vector_logo', 'options');
$logo = get_field('fallback_logo', 'options');

$primary_nav =
	wp_nav_menu(
		array(
			'theme_location'	=> 'global',
			'sort_column'			=> 'menu_order',
			'container'				=> false,
			'echo'						=> '0',
			'depth'						=> 1,
			'menu_class'			=> 'nav__list nav__list--global'
		)
	);

?>

<header role="banner" class="row--header row bg-black">
	<div class="row--truncated">
		<div class="row__cell row__cell--span12">
			<a class="logo" href="<?php bloginfo('url'); ?>">
				<img src="<?php echo $logo_svg['url']; ?>" onerror="this.onerror=null;this.src='<?php echo $logo['url']; ?>'" alt="<?php echo $logo['alt']; ?>" />
			</a>
			<nav role="navigation" class="global-nav mobile-hide">
				<?php echo $primary_nav; ?>
			</nav>
			<div class="mobile-only mobile-nav--trigger">
				<a href="#mobileNav">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="text">Menu</span>
				</a>
			</div>
		</div><!--.span8-->
	</div><!--.row truncated-->
</header><!--.row-->

<section id="mobileNav" class="row row--mobile-nav mobile-only bg-black">
	<div class="row--truncated">
		<div class="row__cell row__cell--span12">
			<nav class="global-nav--mobile">
				<?php
					echo $primary_nav;
				?>
			</nav>
		</div><!--.mobile-nav-->
	</div><!--.row truncated-->
</section><!--.row-->

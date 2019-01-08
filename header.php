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

$nav_primary =
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

$nav_mobile_menu = $nav_primary;
?>

<header role='banner' class='panel u-bgColorBlack'>
	<div class="container-xl">
		<div class="grid align-middle-xs nowrap-xs">
			<div class="unit-xs-1-2 fit-content-xs">
				<?php get_template_part( 'components/component', 'logo'); ?>
			</div><!--.unit-sm-3-->
			<div class="unit-xs-1-2">
				<?php include( locate_template( 'components/component-nav_primary.php', false, false ) ); ?>
				<?php get_template_part( 'components/component', 'hamburger'); ?>
			</div><!--.unit-sm-9-->
		</div><!--.grid-->
	</div><!--.container-lg-->
</header><!--.panel-->


<?php
	// mobile navigation
	$nav_mobile_container_classes = ' u-bgColorWhite';
	include( locate_template( 'components/component-nav_mobile.php', false, false ) );
?>

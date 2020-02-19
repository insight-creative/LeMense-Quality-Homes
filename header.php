<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package InsightCustom
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="/wp-content/themes/insightcustom/images/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="/wp-content/themes/insightcustom/assets/lity/lity.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<!-- Preconnect to Google Analytics -->
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-13074741-54"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-13074741-54');
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="screenReaderSkipToContent" href="#main-content" tabindex="0">Skip to main content</a>
<a class="screenReaderSkipToContent" href="#footer" tabindex="0">Skip to footer content</a>
<a class="screenReaderSkipToContent" href="#footerNav" tabindex="0">Skip to footer navigation</a>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part('/inc/header/site-branding'); ?>
		<?php get_template_part('/inc/header/sub-nav-menu'); ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">

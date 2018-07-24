<?php
/*
*Displaying The header
*Displays all of the head elements up to the <body> tag
*
*@package Wordpress
*@subpakage Music_Site
*@since Music_Site 0.1
*/
?>

<!DOCTYPE html>
<!-- HTML tag will end in another document -->
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/javascript/pretty.js"></script>
</head

<body>

<!-- Begin Navigation Bar -->
	<div>

		<?php wp_nav_menu( array( 'theme-location' => 'nav-menu' ) ); ?>

	</div>
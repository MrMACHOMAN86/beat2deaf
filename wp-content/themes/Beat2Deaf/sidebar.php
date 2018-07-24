<?php
/**
 * The template for the sidebar containing the main widget area (Soundcloud Sidebar)
 *
 * @package WordPress
 * @subpackage MusicSite
 * @since MusicSite 0.1
 */
?>

<?php if( is_active_sidebar( 'primary' ) ) { ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'primary' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php }; ?>
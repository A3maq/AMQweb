<?php
/**
 * @package GeneratePress
 */
 
// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_article_schema( 'CreativeWork' ); ?>>
	<div class="inside-article">

<div style="float:right;text-align:right;padding-left:15px;">
<?php echo str_replace( 'rel="prev"', 'rel="next"', get_previous_post_link( '%link', _x( '<span class="meta-nav" style="display: block;width: 38px;height: 42px;font-size: 18px;line-height: 42px;border: 1px solid #333;border-top-color: rgb(51, 51, 51);border-right-color: rgb(51, 51, 51);border-bottom-color: rgb(51, 51, 51);border-left-color: rgb(51, 51, 51);text-align: center;color: #333;background-color: #fff;-webkit-transition: color 0.3s ease,background-color 0.3s ease;transition: color 0.3s ease,background-color 0.3s ease;display:inline-block;">&rarr;</span>', 'Next post link' ) ) ); ?>

<?php echo str_replace( 'rel="next"', 'rel="prev"', get_next_post_link( '%link', _x( '<span class="meta-nav" style="display: block;width: 38px;height: 42px;font-size: 18px;line-height: 42px;border: 1px solid #333;border-top-color: rgb(51, 51, 51);border-right-color: rgb(51, 51, 51);border-bottom-color: rgb(51, 51, 51);border-left-color: rgb(51, 51, 51);text-align: center;color: #333;background-color: #fff;-webkit-transition: color 0.3s ease,background-color 0.3s ease;transition: color 0.3s ease,background-color 0.3s ease;display: inline-block;">&larr;</span>', 'Previous post link' ) ) ); ?>
</div>

		<header class="entry-header">
			<?php do_action( 'generate_before_entry_title'); ?>
			<?php if ( generate_show_title() ) : ?>
				<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
			<?php endif; ?>
			<?php do_action( 'generate_after_entry_title'); ?>
		</header><!-- .entry-header -->

<br /><br /><?php do_action( 'generate_before_content'); ?>
		
		<?php do_action( 'generate_after_entry_header'); ?>
		<div class="entry-content" itemprop="text">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		

		<?php do_action( 'generate_after_content' ); ?>
	</div><!-- .inside-article -->
</article><!-- #post-## -->
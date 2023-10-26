<?php
/**
 * Partial template for content in memory-page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php //the_content(); ?>
		<?php 
			$settings = array(
				'post_id'       => 'new_post',
				'post_title' => true,
				'post_content' => true,
				'fields' => array('field_5feb4729382a7'),
				'new_post'      => array(
		            'post_type'     => 'event',
		            'post_status'   => 'publish'
		        ),
		        'return'        => home_url('event'),
		        'submit_value'  => 'Submit'
			);
			if(post_password_required( )){
			    echo get_the_password_form();
			}
			else{
				acf_form($settings);
			}
			

		?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

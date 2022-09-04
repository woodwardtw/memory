<?php
/**
 * Single event partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#editEvent" aria-expanded="false" aria-controls="collapseExample">
		    Edit event
		  </button>
		</p>
	<div class="collapse" id="editEvent">
		<?php 
			if(is_user_logged_in()){
				$post_id = get_the_ID();
				acf_form(array(
		        'post_id'       => $post_id,   
		        'post_title'    => true,
        		'post_content'  => true,   
		        'submit_value'  => __('Update event')
		    )); 

			} else {
				echo "<h2>Please login.</h2>";
				wp_login_form();
			}
		?>
	</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

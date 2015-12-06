<?php
/**
 * @package Academica
*/
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_title( '<h1 class="title-header">', '</h1>' ); ?>

	<div class="entry-content clearfix">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<p class="pages"><strong>' . __( 'Pages:', 'academica' ) . '</strong>',
			'after' => '</p>',
			'next_or_number' => 'number'
		) ); ?>

	</div>

    <div class="entry-meta">
        <?php
        academica_entry_meta(true);
        edit_post_link( __( 'Edit', 'academica' ), '<span class="edit-link"> / ', '</span>' ); ?>
    </div>

</div>
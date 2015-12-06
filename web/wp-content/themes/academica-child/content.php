<?php
/**
 * @package Academica
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

	<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

	<div class="entry-summary"><?php the_content(); ?></div>

    <p class="entry-meta">
        <?php
        academica_entry_meta(true);
        edit_post_link( __( 'Edit', 'academica' ), '<span class="edit-link"><span class="sep"> / </span>', '</span>' ); ?>
    </p>
</div>
<?php
if ( ! isset( $content_width ) ) {
	$content_width = 718;
}
/**
 * display post meta information list
 */
function kanagata_metalist()
{
	?>
	<ul class="list-meta">
		<li class="list-meta__item--date"> <?php echo esc_html( get_the_date() ); ?></li>
		<li class="list-meta__item--link">
			<a href="<?php the_permalink(); ?>">
				<?php _e( 'permalink', 'kanagata' ); ?>
			</a>
		</li>
		<li class="list-meta__item--category"> <?php the_category( ', ' ); ?></li>
		<li class="list-meta__item--tag">&nbsp;
			<?php if ( get_the_tags() ) : ?>
				<?php the_tags( '', ' , ' ); ?>
			<?php else: ?>
				<?php echo _e('no tag', 'kanagata' ); ?>
			<?php endif; ?>
		</li>
		<li class="list-meta__item--comments"> <?php comments_popup_link(
				__( 'Comments (0)', 'kanagata' ),
				__( 'Comments (1)', 'kanagata' ),
				__( 'Comments (%)', 'kanagata' )
			); ?></li>
	</ul><!-- /meta-list -->
<?php
}

/**
 * Get pagetop link
 *
 * @param array $options
 *    dest, classname, text
 * @return string HTML markup
 */
function kanagata_pagetop( $options = array() )
{
	$defaults = array(
		'dest'      => 'header',
		'classname' => 'pagetop',
		'text'      => __( 'page top', 'kanagata' )
	);
	extract( array_merge( $defaults, $options ) );
	echo '<div class="' . esc_attr( $classname ) . '">' .
		'<a href="#' . esc_attr( $dest ) . '">' . esc_html( $text ) . '</a></div>';
	return;
}

/**
 * Get pagetop link
 *
 * @param array $options
 *    dest, classname, text
 * @return string HTML markup
 */
function kanagata_pageback( $options = array() )
{
	$defaults = array(
		'classname' => 'pageback',
		'text'      => __( 'page back', 'kanagata' )
	);
	extract( array_merge( $defaults, $options ) );
	echo '<div class="' . esc_attr( $classname ) . '">' .
		'<a href="#" onclick="history.back(); return false;">' . esc_html( $text ) . '</a></div>';
	return;
}

/**
 * category slag name  display to front page
 */
function kanagata_catnames_to_slugs( $name, $delimiter )
{
	if ( ! isset( $name ) || '' === $name ) {
		return false;
	}
	$catNames = explode( $delimiter, $name );
	// ループ カテゴリー名からカテゴリーID取得
	$catSlugs = array();
	foreach ( $catNames as $catName ) {
		$catId = get_cat_ID( trim( $catName ) );
		if ( 0 !== $catId ) {
			$cat = get_category( $catId );
			array_push( $catSlugs, $cat->slug );
		}
	}
	return $catSlugs;
}

/*
 * filter
 */

/**
 * Set excerpt length
 *
 * @param string $length from wordpress system
 * @return number excerpt length
 */
function kanagata_new_excerpt_mblength( $length )
{
	return 1000;
}

add_filter( 'excerpt_mblength', 'kanagata_new_excerpt_mblength' );

/**
 * Set ..... on excerpt more string
 *
 * @param $more from wordpress system
 * @return string
 */
function kanagata_new_excerpt_more( $more )
{
	return '&middot;&middot;&middot;&middot;&middot';
}

add_filter( 'excerpt_more', 'kanagata_new_excerpt_more' );

/*
 * initialization
 */
require_once( get_template_directory() . '/inc/kanagata-init.php' );

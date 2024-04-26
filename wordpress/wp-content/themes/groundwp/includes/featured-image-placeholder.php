<?php

/**
 * Get SVG icon
 *
 * @since 1.5.7
 *
 * @throws DOMException Throw error.
 * @return string
 */
function groundwp_get_svg_icon( string $slug, int $size = null ): string {
    
	ob_start();
	echo file_get_contents( get_template_directory() . '/assets/svg/svgs.json' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Required to get svg.json.
	$icon_set = json_decode( ob_get_clean(), true );

	$icon = isset( $icon_set[ $slug ] ) ? $icon_set[ $slug ] : '';

	if ( ! $icon ) {
		return '';
	}

	$dom = dom( $icon );
	$svg = get_dom_element( 'svg', $dom );

	if ( ! $svg ) {
		return '';
	}

	$unique_id = 'icon-' . uniqid();

	$svg->setAttribute( 'role', 'img' );
	$svg->setAttribute( 'aria-labelledby', $unique_id );
	$svg->setAttribute( 'data-icon', $slug );

	$label = ucwords( str_replace( '-', ' ', $slug ) ) . __( ' Icon', 'groundwp' );
	$title = $dom->createElement( 'title' );

	$title->appendChild( $dom->createTextNode( $label ) );
	$title->setAttribute( 'id', $unique_id );

	$svg->insertBefore( $title, $svg->firstChild ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase -- Required to access dom element.

	if ( $size ) {
		$svg->setAttribute( 'width', (string) $size );
		$svg->setAttribute( 'height', (string) $size );
	}

	return $dom->saveHTML();

}

/**
 * Render Image Placeholder
 *
 * @since 1.5.7
 *
 * @param string $html Html.
 * @param array  $block Block array.
 *
 * @return string
 */
function groundwp_render_image_placeholder( string $html, array $block ): string {

	$dom    = dom( $html );
	$figure = get_dom_element( 'figure', $dom );
	$img    = get_dom_element( 'img', $figure );

	if ( $img && $img->getAttribute( 'src' ) ) {
		return $html;
	}
	
	$html        = ! $html ? '<figure class="wp-block-image"><img src="" alt=""/></figure>' : $html;
	$dom         = dom( $html );
	$svg         = groundwp_get_svg_icon( 'placeholder', 30 );
	$svg_dom     = dom( $svg );
	$svg_element = get_dom_element( 'svg', $svg_dom );

	if ( ! $svg_element ) {
		return $html;
	}

	$svg_classes = explode( ' ', $svg_element->getAttribute( 'class' ) );

	$svg_classes[] = 'wp-block-image__placeholder-icon';

	$svg_element->setAttribute( 'class', implode( ' ', $svg_classes ) );

	$result = $dom->importNode( $svg_element, true );
	$figure = get_dom_element( 'figure', $dom );

	if ( ! $figure ) {
		return $html;
	}

	$img = get_dom_element( 'img', $figure );

	if ( $img ) {
		$figure->removeChild( $img );
	}

	$figure->appendChild( $result );
	$classes = explode( ' ', $figure->getAttribute( 'class' ) );

	if ( ! in_array( 'is-placeholder', $classes, true ) ) {
		$classes[] = 'is-placeholder';
	}

	if ( $block['align'] ?? null ) {
		$classes[] = 'align' . $block['align'];
	}

	$figure->setAttribute( 'class', implode( ' ', $classes ) );

	return $dom->saveHTML();

}

/**
 * Modifies front end HTML output of block.
 *
 * @since 0.0.1
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 *
 * @return string
 */
function groundwp_render_featured_image_block( string $html, array $block ): string {
	if ( ! $html ) {
		$html = groundwp_render_image_placeholder( $html, $block['attrs'] );
	}
	return $html;
}

add_filter( 'render_block_core/post-featured-image', 'groundwp_render_featured_image_block', 10, 2 );
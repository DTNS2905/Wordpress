<?php
/**
 * Title: One Column Hero Section With Image, Text, Buttons.
 * Slug: groundwp/section-one
 * Categories: groundwp-section
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"tertiary","className":"is-style-default","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-default has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top">
<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top">
<!-- wp:image {"align":"center","id":105,"width":128,"height":128,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-image-one.png'; ?>" alt="sample image" class="wp-image-105" width="128" height="128"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"700"}},"textColor":"main","fontSize":"max-60"} -->
<h2 class="has-text-align-center has-main-color has-text-color has-max-60-font-size" style="font-style:normal;font-weight:700;text-transform:none">Blocks are growing fast. </h2>
<!-- /wp:heading -->
<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"700"}},"textColor":"main","fontSize":"max-60"} -->
<h2 class="has-text-align-center has-main-color has-text-color has-max-60-font-size" style="font-style:normal;font-weight:700;text-transform:none">So can you.</h2>
<!-- /wp:heading -->
<!-- wp:spacer {"height":"34px"} -->
<div style="height:34px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:paragraph {"align":"center","textColor":"main","fontSize":"large"} -->
<p class="has-text-align-center has-main-color has-text-color has-large-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Pellentesque et efficitur tellus, sed elementum nisi.</p>
<!-- /wp:paragraph -->
<!-- wp:spacer {"height":"28px"} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn More </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
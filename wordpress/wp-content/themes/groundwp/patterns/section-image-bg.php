<?php
/**
 * Title: Section With Fixed Image Background.
 * Slug: groundwp/section-image-bg
 * Categories: groundwp-section
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-image-cubes.jpg'; ?>","id":206,"hasParallax":true,"dimRatio":40,"minHeight":846,"minHeightUnit":"px","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="min-height:846px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-206 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-image-cubes.jpg'; ?>)"></div>
<div class="wp-block-cover__inner-container">
<!-- wp:group {"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-text-color">
<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"max-72"} -->
<h2 class="has-text-align-center has-max-72-font-size" style="font-style:normal;font-weight:700">The perfect block theme.</h2>
<!-- /wp:heading -->
<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"max-48"} -->
<h5 class="has-text-align-center has-max-48-font-size" style="font-style:normal;font-weight:600">Built just for you.</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"sen","className":"is-style-fill-base"} -->
<div class="wp-block-button is-style-fill-base"><a class="wp-block-button__link has-sen-background-color has-background wp-element-button">Find Out More Today</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
</div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
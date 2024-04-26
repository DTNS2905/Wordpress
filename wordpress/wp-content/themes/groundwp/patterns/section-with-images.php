<?php
/**
 * Title: Two columns section with texts, and images.
 * Slug: groundwp/section-with-images
 * Categories: groundwp-section
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"0","left":"0"}}},"className":"border-radius-medium"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center border-radius-medium" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0">
<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":1.7,"fontSize":"41px"}},"textColor":"main","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-main-color has-text-color" style="font-size:41px;font-style:normal;font-weight:700;line-height:1.7">Welcome To GroundWP.<br>Build Better Websites.</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"main"} -->
<p class="has-main-color has-text-color" style="font-size:18px">GroundWP comes with beautiful patterns that allows you to build infinite different layouts.<br>And the patterns library is continuously growing.<br>GroundWP will enable you to build any kind of website you want to build with WordPress blocks.</p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">DOWNLOAD</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">Learn More</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile">
<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"align":"right","id":232,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image alignright size-full has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-image-five.jpg'; ?>" alt="" class="wp-image-232" style="border-radius:8px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"id":224,"width":225,"height":150,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-image-four.jpg'; ?>" alt="" class="wp-image-224" style="border-radius:8px" width="225" height="150"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":229,"width":225,"height":400,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample-image-three.jpg'; ?>" alt="" class="wp-image-229" style="border-radius:8px" width="225" height="400"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
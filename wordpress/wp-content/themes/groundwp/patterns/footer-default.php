<?php
/**
 * Title: Footer with text, links.
 * Slug: groundwp/footer-default
 * Categories: groundwp-footer
 * Block Types: core/template-part/footer
 * Keywords: footer
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained","type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:40px;padding-bottom:40px">
<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <a target="_blank" rel="noreferrer noopener nofollow" href="https://groundwp.com/">GroundWP Theme</a> by DotCamp</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
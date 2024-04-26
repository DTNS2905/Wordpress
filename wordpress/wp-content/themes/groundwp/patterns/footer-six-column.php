<?php
/**
 * Title: Six Column Footer with text, links, social icons.
 * Slug: groundwp/footer-six-column
 * Categories: groundwp-footer
 * Block Types: core/template-part/footer
 * Keywords: footer
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"40px"}},"border":{"top":{"color":"#c3c3c3","width":"1px"}}},"backgroundColor":"base","textColor":"main","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-main-color has-base-background-color has-text-color has-background has-small-font-size" style="border-top-color:#c3c3c3;border-top-width:1px;margin-top:40px;padding-top:40px;padding-bottom:40px">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%">
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="has-x-large-font-size">GroundWP</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading -->
<h2>Company</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>About</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Pricing</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Careers</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Downloads</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile">
<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:heading -->
<h2>Company</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>About</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Pricing</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Careers</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Downloads</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading -->
<h2>Services</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul>
<!-- wp:list-item -->
<li>About</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Pricing</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Careers</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Downloads</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading -->
<h2>Resources</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul>
<!-- wp:list-item -->
<li>About</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Pricing</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Careers</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Downloads</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading -->
<h2>Support</h2>
<!-- /wp:heading -->
<!-- wp:list -->
<ul>
<!-- wp:list-item -->
<li>About</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Pricing</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Careers</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Downloads</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:separator {"style":{"color":{"background":"#c3c3c3"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#c3c3c3;color:#c3c3c3"/>
<!-- /wp:separator -->
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <a target="_blank" rel="noreferrer noopener nofollow" href="https://groundwp.com/">GroundWP Theme</a> by DotCamp</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:social-links {"openInNewTab":true,"size":"has-normal-icon-size","align":"right","layout":{"type":"flex"}} -->
<ul class="wp-block-social-links alignright has-normal-icon-size">
<!-- wp:social-link {"url":"https://www.facebook.com/groups/groundwp","service":"facebook"} /-->
<!-- wp:social-link {"url":"https://twitter.com/GroundWP","service":"twitter"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
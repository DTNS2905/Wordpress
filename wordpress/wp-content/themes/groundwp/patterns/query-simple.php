<?php
/**
 * Title: Simple Query With Only Post Titles.
 * Slug: groundwp/query-simple
 * Categories: groundwp-query
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
<!-- wp:group {"align":"wide","layout":{"type":"constrained","type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:query {"queryId":6,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":8},"displayLayout":{"type":"list"},"align":"wide"} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"4em"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:4em">
<!-- wp:post-date {"format":"M j","fontSize":"small"} /-->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"clamp(2.75rem, 6vw, 3.25rem)"}}} /-->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
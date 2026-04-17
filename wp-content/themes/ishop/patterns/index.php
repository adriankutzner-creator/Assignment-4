<?php
/**
 * Title: index
 * Slug: ishop/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:50px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":35,"query":{"perPage":"9","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"blogposts","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"white","layout":{"inherit":false}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"260px"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"j F, Y","style":{"typography":{"fontSize":"13px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","className":"nounderline","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0px","bottom":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"13px","textDecoration":"none"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true,"className":"is-style-default nounderline","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-top is-style-default" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"categories":["theme"],"patternName":"ishop/recentposts-sidebar","name":"Recent Posts Sidebar"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;margin-bottom:24px"><!-- wp:heading {"level":4,"className":"gazettepress-section-header","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"0px","right":"0px"}},"border":{"bottom":{"color":"var:preset|color|vivid-red","width":"5px"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading gazettepress-section-header has-small-font-size" style="border-bottom-color:var(--wp--preset--color--vivid-red);border-bottom-width:5px;padding-top:6px;padding-right:0px;padding-bottom:6px;padding-left:0px"><?php esc_html_e('Latest Post', 'ishop');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:latest-posts {"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":"nounderline","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kindban.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;margin-bottom:24px"><!-- wp:heading {"level":4,"className":"gazettepress-section-header","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"12px","right":"12px"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<h4 class="wp-block-heading gazettepress-section-header has-small-font-size" style="padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px"><?php esc_html_e('Author Profile', 'ishop');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:categories /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
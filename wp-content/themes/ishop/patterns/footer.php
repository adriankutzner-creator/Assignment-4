<?php
/**
 * Title: footer
 * Slug: ishop/footer
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"wc-blocks-footer-pattern has-background-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"top":{"color":"var:preset|color|cyan-bluish-gray","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"backgroundColor":"cyan-bluish-gray","textColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<div class="wp-block-group alignfull wc-blocks-footer-pattern has-background-color has-white-color has-cyan-bluish-gray-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--cyan-bluish-gray);border-top-width:1px;padding-top:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"16px","margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"45%","style":{"spacing":{"padding":{"right":"50px","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-right:50px;padding-left:var(--wp--preset--spacing--30);flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"textColor":"background","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-background-color has-text-color"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('About us', 'ishop');?></h4>
<!-- /wp:heading -->

<!-- wp:group {"style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:site-logo {"width":160,"isLink":false,"className":"is-style-rounded","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"unset"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"21px","style":{"layout":{"flexSize":"21px","selfStretch":"fixed"}}} -->
<div style="height:21px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem"><?php esc_html_e('Over 20,000+ users in over 90+ countries trust our high-quality WordPress themes to create stunning websites that convert.', 'ishop');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"20px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:30%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Tags', 'ishop');?></h4>
<!-- /wp:heading -->

<!-- wp:tag-cloud {"className":"is-style-outline"} /-->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Support', 'ishop');?></h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default","style":{"typography":{"fontSize":"1em"}}} -->
<ul style="font-size:1em" class="wp-block-list is-style-default"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sHome%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAbout us%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTerms & Conditions%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact us%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"blockGap":"16px","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:25%"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Get in Touch', 'ishop');?></h4>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-default","style":{"typography":{"fontSize":"1em"}}} -->
<ul style="font-size:1em" class="wp-block-list is-style-default"><!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sHome%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAbout us%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTerms & Conditions%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact us%2$s', 'ishop' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#878e96"},"spacing":{"padding":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background has-link-color" style="background-color:#878e96;padding-top:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"11px"}},"textColor":"background","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color" style="font-size:11px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
<p style="font-size:15px"><?php esc_html_e('© 2025', 'ishop');?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"style":{"typography":{"fontSize":"15px"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
<p style="font-size:15px"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed by %1$sInsertCart%2$s. Powered by %3$sWordPress%4$s.', 'ishop' ), '<a href="' . esc_url( 'https://www.insertcart.com/product/ishop-pro/' ) . '">', '</a>', '<a href="' . esc_url( 'https://wordpress.org/' ) . '" target="_blank" rel="noreferrer noopener">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"customIconColor":"#6d6161","iconColorValue":"#6d6161","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/insertcart","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com/insertcartcom","service":"twitter"} /-->

<!-- wp:social-link {"url":"d","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://wordpress.org/themes/author/sandy786/","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php
/**
 * Title: Recent Post Section.
 * Slug: fse-business-blocks/most-recent-post-section
 * Categories: posts
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|40","top":"var:preset|spacing|80"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":6,"textColor":"sub-heading-color"} -->
<h6 class="wp-block-heading has-sub-heading-color-color has-text-color"><?php echo esc_html__('BLOG','fse-business-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"52px","lineHeight":"1"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);font-size:52px;font-style:normal;font-weight:500;line-height:1"><?php echo esc_html__('Recent News and Articles', 'fse-business-blocks'); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"18px"}}} -->
<p style="font-size:18px;font-style:normal;font-weight:400"><?php echo esc_html__('Cras tincidunt tellus at mi tristique rhoncus. Etiam dapibus rutrum leo consectetur accumsan. Vivamus viverra ante turpis, dignissim condimentum elit egestas sit amet. Phasellus dignissim condimentum elit egestas sit amet. Phasellus', 'fse-business-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"top":"9px","right":"9px","bottom":"9px","left":"9px"}},"typography":{"fontSize":"20px"}},"className":"is-style-button-hover-secondary-color"} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color" style="font-size:20px"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:9px;padding-right:9px;padding-bottom:9px;padding-left:9px"><?php echo esc_html__('Read More', 'fse-business-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":18,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"sub-heading-color","minHeight":150,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:150px"><span aria-hidden="true" class="wp-block-cover__background has-sub-heading-color-background-color has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"38%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:38%"><!-- wp:cover {"dimRatio":10,"overlayColor":"foreground","minHeight":149,"minHeightUnit":"px","isDark":false,"className":"is-style-fse-business-blocks-cover-round-style","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light is-style-fse-business-blocks-cover-round-style" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:149px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"150px","align":"wide","style":{"border":{"radius":{"topLeft":"10px","topRight":"0px","bottomLeft":"10px","bottomRight":"0px"}},"color":{"duotone":"unset"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /--></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"left":"0","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:post-date {"style":{"typography":{"fontSize":"14px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foreground"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.1},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-title-hover-secondary-color","fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->








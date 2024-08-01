<?php
/**
 * Title: Grid post layout with Excerpt.
 * Slug: fse-business-blocks/grid-for-post-layout-with-excerpt
 * Categories: posts
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|40","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"bottom":"0","top":"0","right":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":1}}} -->
<h6 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1"><?php echo esc_html__('BLOG', 'fse-business-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"typography":{"lineHeight":"1"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60);line-height:1"><?php echo esc_html__('Latest Posts and Articles','fse-business-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":29,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-featured-image {"height":"260px","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"className":"is-style-categories-background-with-round","fontSize":"x-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}},"typography":{"fontSize":"28px","lineHeight":"1.2"}},"textColor":"foreground","className":"is-style-title-hover-secondary-color"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

<!-- wp:paragraph -->
<p>.</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","style":{"typography":{"fontSize":"18px"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->














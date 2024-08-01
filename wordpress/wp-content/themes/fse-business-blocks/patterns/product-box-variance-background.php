<?php
/**
 * Title: Box with image, heading, text, button.
 * Slug: fse-business-blocks/general-product-box-contrast-background
 * Categories: call-to-action
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"backgroundColor":"contrast","textColor":"base","className":"stacked","layout":{"type":"default"}} -->
<div class="wp-block-group stacked has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:image {"id":6003,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/style_800^800.png'; ?>" alt="FSE Business Blocks Theme Sample Image" class="wp-image-6003"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"15px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'FSE Business Blocks WordPress Theme', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5"><?php echo esc_html__( 'To give your site an entirely distinct look and feel, there are numerous style variations.','fse-business-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--large)"><?php echo esc_html__( 'Buy FSE Business Blocks', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

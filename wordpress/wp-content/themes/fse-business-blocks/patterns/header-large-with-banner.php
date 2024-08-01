<?php
/**
 * Title: Top Header with large banner.
 * Slug: fse-business-blocks/header-large-with-banner
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","bottom":"var:preset|spacing|x-large","left":"30px","top":"70px"},"margin":{"top":"0px"},"blockGap":"10px"}},"className":"welcome","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group alignfull welcome" style="margin-top:0px;padding-top:70px;padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:heading {"textAlign":"center","anchor":"we-reimagine-how-to-build-wordpress-websites","style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"bottom":"0px"}}},"className":"wp-block-heading","fontSize":"max-72"} -->
<h2 class="wp-block-heading has-text-align-center has-max-72-font-size" style="margin-bottom:0px;letter-spacing:-1px"><?php echo esc_html__( 'We Create Online Interactions.', 'fse-business-blocks' ); ?></h2>

<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'We think that a successful go-to-market strategy is essential for revenue growth. We can work with you to increase brand recognition and boost company performance.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"30px"}}}} -->
<div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( ' Discover More', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline-background is-style-outline","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size is-style-outline-background is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
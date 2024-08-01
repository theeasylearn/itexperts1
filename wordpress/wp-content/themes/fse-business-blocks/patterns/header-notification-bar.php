<?php
/**
 * Title: Header notification bar with text, button.
 * Slug: fse-business-blocks/header-notification-bar
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"15px","bottom":"15px"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;margin-top:0;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size" style="line-height:1.5"><?php echo esc_html__( 'With its minimal design and powerful feature set, FSE Business Blocks enables agencies to build stylish websites.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontSize":"14px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"15px","right":"15px"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px"><a class="wp-block-button__link wp-element-button" style="padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px"><?php echo esc_html__( 'Explore More', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

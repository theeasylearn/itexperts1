<?php
/**
 * Title: Sample link page.
 * Slug: fse-business-blocks/page-link
 * Categories: page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"left":"0px","top":"var:preset|spacing|large","right":"0px","bottom":"var:preset|spacing|large"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh;margin-top:0px;padding-top:var(--wp--preset--spacing--large);padding-right:0px;padding-bottom:var(--wp--preset--spacing--large);padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","wideSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","id":3489,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/website_800^800.png'; ?>" alt="Sample Image" class="wp-image-3489" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Your Name', 'fse-business-blocks' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Company Name', 'fse-business-blocks' ); ?><br><a href="mailto:name@company.com">name@company.com</a></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000","size":"has-normal-icon-size","align":"center","style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|medium"}}},"className":"has-icon-base-color","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-background-color has-icon-base-color" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"twitter"} /-->
<!-- wp:social-link {"url":"#","service":"dribbble"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--small)">
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Visit My Website', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Read My Blog', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Download My Ebook', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Follow My Newsletter', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link"><?php echo esc_html__( 'Listen to My Podcast', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><a href="https://wordpress.org/themes/fse-business-blocks/"><?php echo esc_html__( 'Made with FSE Business Blocks', 'fse-business-blocks' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
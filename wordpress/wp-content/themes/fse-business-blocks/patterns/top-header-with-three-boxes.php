<?php
/**
 * Title: Top Header with three boxes
 * Slug: fse-business-blocks/top-header-with-three-boxes
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"30px","left":"30px"},"margin":{"top":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:columns {"align":"wide","className":"is-style-columns-reverse"} -->
<div class="wp-block-columns alignwide is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Customize your Site', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"id":1462,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/enhance.png'; ?>"
 alt="" class="wp-image-1462"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p><?php echo esc_html__('Being able to build your pages anyway you want with complete freedom and creative control', 'fse-business-blocks');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Style variances', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"id":1463,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/style.png'; 
?>" alt="" class="wp-image-1463"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p><?php echo esc_html__('To give your site an entirely distinct look and feel, there are numerous style variations.','fse-business-blocks');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Pattern-ready', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:image {"id":1464,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/website.png'; ?>" alt="" class="wp-image-1464"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph -->
<p><?php echo esc_html__('Create a beautiful site by adding patterns quickly and effortlessly.', 'fse-business-blocks')?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

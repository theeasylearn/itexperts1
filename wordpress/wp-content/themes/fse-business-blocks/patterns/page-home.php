<?php
/**
 * Title:  Home page.
 * Slug: fse-business-blocks/page-home
 * Categories: page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","bottom":"var:preset|spacing|x-large","left":"30px","top":"70px"},"margin":{"top":"0px"},"blockGap":"10px"}},"className":"welcome","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group alignfull welcome" style="margin-top:0px;padding-top:70px;padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:heading {"textAlign":"center","anchor":"we-reimagine-how-to-build-wordpress-websites","style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"bottom":"0px"}}},"className":"wp-block-heading","fontSize":"max-72"} -->
<h2 class="wp-block-heading has-text-align-center has-max-72-font-size" style="margin-bottom:0px;letter-spacing:-1px"><?php echo esc_html__( 'We Create Online Interactions.', 'fse-business-blocks' ); ?></h2>

<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'We think that a successful go-to-market strategy is essential for revenue growth. We can work with you to increase brand recognition and boost company performance.
', 'fse-business-blocks' ); ?></p>
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
<p><?php echo esc_html__('Being able to build your pages anyway you want with complete freedom and creative control','fse-business-blocks' );?></p>
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

<!-- wp:pattern {"slug":"fse-business-blocks/about-section"} /-->
<!-- wp:pattern {"slug":"fse-business-blocks/portfolio-projects"} /-->

<!-- wp:group {"align":"full","anchor":"features","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"30px","left":"30px"},"margin":{"top":"0"},"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"960px"}} -->
<div class="wp-block-group alignfull" id="features" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","wideSize":"720px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:heading {"textAlign":"center","anchor":"text-on-left-image-on-right","style":{"typography":{"letterSpacing":"-1px"}},"className":"wp-block-heading","fontSize":"max-60"} -->
<h2 class="wp-block-heading has-text-align-center has-max-60-font-size" id="text-on-left-image-on-right" style="letter-spacing:-1px"><?php echo esc_html__( 'Lets accurately work on your upcoming project.', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
<p class="has-text-align-center" style="line-height:3"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":5489,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/website.png'; ?>" alt="Sample Image" class="wp-image-5489"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Simple and efficient design.', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo','fse-business-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Explore More', 'fse-business-blocks' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}},"className":"is-style-columns-reverse"} -->
<div class="wp-block-columns is-style-columns-reverse" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Style Variations.', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.','fse-business-blocks' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Explore More', 'fse-business-blocks' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":5490,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/style.png'; ?>" alt="Sample Image" class="wp-image-5490"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":5492,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/enhance.png'; ?>" alt="Sample Image" class="wp-image-5492"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Enhance by Patterns
.', 'fse-business-blocks' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'fse-business-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Explore More', 'fse-business-blocks' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>

<!-- wp:paragraph {"align":"center","fontSize":"max-48"} -->
<p class="has-text-align-center has-max-48-font-size"><?php echo esc_html__('Testimonials','fse-business-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"fse-business-blocks/testimonials-with-side-image"} /-->
<!-- wp:pattern {"slug":"fse-business-blocks/most-recent-post-section"} /-->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"0px"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
<h2 class="wp-block-heading has-text-align-left has-max-48-font-size" id="block-patterns" style="margin-bottom:0px"><?php echo esc_html__('Frequently Asked Questions', 'fse-business-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-left" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Below is a list of frequently asked questions.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><strong><?php echo esc_html__( 'Why should I download the FSE Business Blocks WordPress theme?', 'fse-business-blocks' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Full Site Editing in WordPress refers to a feature that allows users to create and edit their website’s entire layout, including the header, footer, and other structural elements, using a visual editor.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><strong><?php echo esc_html__( 'What are the benefits of Full Site Editing in WordPress?', 'fse-business-blocks' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Full Site Editing in WordPress allows users to create and edit their website more efficiently and with more control. It enables users to create unique and custom designs without needing to have advanced coding skills.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><strong><?php echo esc_html__( 'How do I enable Full Site Editing in WordPress?', 'fse-business-blocks' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'To enable Full Site Editing in WordPress, you need to ensure that you are using a compatible WordPress theme that supports Full Site Editing. You will also need to install the latest version of WordPress and enable the Gutenberg editor.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph --></div>

<!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><strong><?php echo esc_html__( 'What are some popular WordPress themes that support Full Site Editing?', 'fse-business-blocks' ); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Some popular WordPress themes that support Full Site Editing include the Kadence Theme, the Qubely Theme, and the GenerateBlocks Theme. These themes have built-in support for Full Site Editing, allowing users to create custom designs without needing to know how to code.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
<div class="wp-block-columns alignwide has-link-color"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="our-company"><?php echo esc_html__( 'Our Company', 'fse-business-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, FSE Business Blocks enables agencies to build stylish and sophisticated WordPress websites.', 'fse-business-blocks' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Explore More', 'fse-business-blocks' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="about-us"><?php echo esc_html__( 'About Us', 'fse-business-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Start Here', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Our Mission', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Brand Guide', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Newsletter', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Accessibility', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="services"><?php echo esc_html__( 'Services', 'fse-business-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Web Design', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Development', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Copywriting', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Marketing', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Social Media', 'fse-business-blocks' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="connect"><?php echo esc_html__( 'Connect', 'fse-business-blocks' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><a href="#">Facebook</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Instagram</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Twitter</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">LinkedIn</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#">Dribbble</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --> 
<!-- /wp:group -->




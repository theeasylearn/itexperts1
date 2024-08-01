<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE Business Blocks
 * @since 1.0.0
 */

/**
 * Enqueue the CSS file.
 *
 * @since 1.0
 * 
 * @return void
 */

if (!defined('FSE_BUSINESS_BLOCKS_VERSION')) {
    define('FSE_BUSINESS_BLOCKS_VERSION', wp_get_theme()->get('Version'));
}
define('FSE_BUSINESS_BLOCKS_URL', trailingslashit(get_template_directory_uri()));

add_action( 'wp_enqueue_scripts', 'fse_business_blocks_enqueue_style_sheet' );
function fse_business_blocks_enqueue_style_sheet() {
wp_enqueue_style( 'fse-business-blocks', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

if ( ! function_exists( 'fse_business_blocks_construct' ) ) {
	function fse_business_blocks_construct() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
		load_theme_textdomain( 'fse-business-blocks', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'fse_business_blocks_construct' );



 //Register block styles.
 
function register_fse_business_blocks_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'columns-reverse' => __( 'Reverse', 'fse-business-blocks' ),
		),
		'core/group' => array(
			'shadow-light' => __( 'Shadow', 'fse-business-blocks' ),
			'shadow-solid' => __( 'Solid', 'fse-business-blocks' ),
		),
		'core/image' => array(
			'shadow-light' => __( 'Shadow', 'fse-business-blocks' ),
			'shadow-solid' => __( 'Solid', 'fse-business-blocks' ),
		),
		'core/list' => array(
			'no-disc' => __( 'No Disc', 'fse-business-blocks' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'fse-business-blocks' ),
		),
		'core/quote' => array(
			'shadow-light' => __( 'Shadow', 'fse-business-blocks' ),
			'shadow-solid' => __( 'Solid', 'fse-business-blocks' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'fse-business-blocks' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'register_fse_business_blocks_block_styles' );


//Register block pattern categories.

function register_fse_business_blocks_categories_for_block_patterns() {

	register_block_pattern_category(
		'page',
		array(
			'label'       => __( 'Page', 'fse-business-blocks' ),
			'description' => __( 'Create a full page with multiple patterns that are grouped together.', 'fse-business-blocks' ),
		)
	);
	register_block_pattern_category(
		'pricing',
		array(
			'label'       => __( 'Pricing', 'fse-business-blocks' ),
			'description' => __( 'Compare features for your digital products or service plans.', 'fse-business-blocks'),
		)
	);

}

add_action( 'init', 'register_fse_business_blocks_categories_for_block_patterns' );


/**
 * Compare page content
 */

add_action('admin_menu', 'FSE_Business_Blocks_themepage');
function fse_business_blocks_themepage(){
  $theme_info = add_theme_page( __('FSE Business Blocks Details','fse-business-blocks'), __('FSE Business Blocks Details','fse-business-blocks'), 'manage_options', 'fse-business-blocks.php', 'fse_business_blocks_page' );
}

function fse_business_blocks_page() {
  $user = wp_get_current_user();
  ?>
  <div class="wrap about-wrap one-pageily-add-css">
    <div>
      <h1>
        <?php echo __('Welcome to FSE Business Blocks!','fse-business-blocks'); ?>
      </h1>

      <div class=" row feature-section two-col">
		<div class="col-md-6">
          <div class="widgets-holder-wrap">
            <h3><?php echo __("Documentation", "fse-business-blocks" ); ?></h3>
            <p><?php echo __("Getting started with a new theme can be difficult, But its installation and customization is so easy", "fse-business-blocks" ); ?></p>
            <p><a target="blank" href="<?php echo esc_url('https://testerwp.com/docs/fse-business-blocks-doc/', 'fse-business-blocks'); ?>" class="button button-primary">
              <?php echo __("Read Documentation", "fse-business-blocks" ); ?>
            </a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="widgets-holder-wrap">
            <h3><?php echo __("Free Theme Demo", "fse-business-blocks" ); ?></h3>
            <p><?php echo __("You can check free theme demo before setup your website if you like demo then install theme", "fse-business-blocks" ); ?></p>
            <p><a target="blank" href="<?php echo esc_url('https://testerwp.com/elementor-wp/fse-business-blocks/', 'fse-business-blocks'); ?>" class="button button-primary">
              <?php echo __("Free Theme Demo", "fse-business-blocks" ); ?>
            </a></p>
          </div>
        </div>
         
      </div>
	  
	  <h2><?php echo __("Free Vs Premium","fse-business-blocks" ); ?></h2>
    <div class="one-pageily-button-container">
      <a target="blank" href="<?php echo esc_url('https://testerwp.com/lp/logitech-preview/', 'fse-business-blocks'); ?>" class="button button-primary">
        <?php echo __("Premium Theme Demo", "fse-business-blocks" ); ?>
      </a>
      <a target="blank" href="<?php echo esc_url('https://testerwp.com/product/logitech/', 'fse-business-blocks'); ?>" class="button button-primary">
        <?php echo __("Buy Now", "fse-business-blocks" ); ?>
      </a>
    </div>


    <table class="wp-list-table widefat">
      <thead>
        <tr>
          <th><strong><?php echo __("Theme Feature", "fse-business-blocks" ); ?></strong></th>
          <th><strong><?php echo __("Basic Version", "fse-business-blocks" ); ?></strong></th>
          <th><strong><?php echo __("Premium Version", "fse-business-blocks" ); ?></strong></th>
        </tr>
      </thead>

      <tbody>
		  <tr>
          <td><?php echo __("Import Demo Content", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          </tr>	
		  <tr>
          <td><?php echo __("Responsive Design", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
			</tr>
			<tr>
          <td><?php echo __("Unlimited Color Option", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
			</tr>
			<tr>
          <td><?php echo __("Header Customization", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          </tr>
		  <tr>
          <td><?php echo __("Footer Customization", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          </tr>
		  <tr>
          <td><?php echo __("Unlimited post/Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          </tr>
			<tr>
          <td><?php echo __("Mulitple Header Layout", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Multiple Home Page", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Page Builder", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Coming Soon Page", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Multiple Blog Layout", "fse-business-blocks" ); ?></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>


        <tr>
          <td><?php echo __("Premium Support", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Portfolio Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Multiple Google Fonts", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Team Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("404 Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Service Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Premium Widgets", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Multiple Footer", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Shortcodes", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Multiple Sidebar", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Multiple Page Layout", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("SEO Friendly", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Slider", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Footer Featured Cusomization", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Contact Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Customize Footer Colors", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        <tr>
          <td><?php echo __("Mega Menu", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr> 
        <tr>
          <td><?php echo __("Pricing Page", "fse-business-blocks" ); ?></td>
          <td><span class="cross"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/cross.png' ); ?>" alt="<?php echo __("No", "fse-business-blocks" ); ?>" /></span></td>
          <td><span class="checkmark"><img src="<?php echo esc_url( get_template_directory_uri() . '/icons/check.png' ); ?>" alt="<?php echo __("Yes", "fse-business-blocks" ); ?>" /></span></td>
        </tr>
        

      </tbody>
    </table>
    <div class="one-pageily-button-container">
      <a target="blank" href="<?php echo esc_url('https://testerwp.com/lp/logitech-preview/', 'fse-business-blocks'); ?>" class="button button-primary">
        <?php echo __("GO PREMIUM", "fse-business-blocks" ); ?>
      </a>
    </div>
	  
    </div>
    <hr>
 
  </div>
  <?php
}

/**
 * Customizer additional settings.
 */
require_once( trailingslashit( get_template_directory() ) . '/custom-addition/class-customize.php' );


function fse_business_blocks_comparepage_css($hook) {
  if ( 'appearance_page_fse-business-blocks' != $hook ) {
    return;
  }
  wp_enqueue_style( 'fse-business-blocks-custom-style', get_template_directory_uri() . '/css/compare.css' );
}
add_action( 'admin_enqueue_scripts', 'fse_business_blocks_comparepage_css' );


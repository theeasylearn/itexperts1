<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class fse_business_blocks_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/custom-addition/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'fse_business_blocks_Customize_Section_Pro' );

		// doc sections.
		$manager->add_section(
			new fse_business_blocks_Customize_Section_Pro(
				$manager,
				'fse-business-blocks',
				array(
					'title'    => esc_html__( 'Upgrade To Pro', 'fse-business-blocks' ),
					'pro_text' => esc_html__( 'Click Here', 'fse-business-blocks' ),
					'pro_url'  => 'https://testerwp.com/lp/logitech-preview/',
					'priority'  => 1
				)
			)
		);
		
		$manager->add_section(
			new fse_business_blocks_Customize_Section_Pro(
				$manager,
				'techp-doc',
				array(
					'title'    => esc_html__( 'Theme Doc', 'fse-business-blocks' ),
					'pro_text' => esc_html__( 'Click Here', 'fse-business-blocks' ),
					'pro_url'  => 'themes.php?page=fse-business-blocks.php',
					'priority'  => 2
				)
			)
		);
	 
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'bizblack-customize-controls', trailingslashit( get_template_directory_uri() ) . '/custom-addition/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'bizblack-customize-controls', trailingslashit( get_template_directory_uri() ) . '/custom-addition/customize-controls.css' );
	}
}
fse_business_blocks_Customize::get_instance();
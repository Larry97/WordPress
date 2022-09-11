<?php
/**
 * General Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Astra_Site_Container_Layout_Configs' ) ) {

	/**
	 * Register Astra Site Container Layout Customizer Configurations.
	 */
	class Astra_Site_Container_Layout_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Astra Site Container Layout Customizer Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since 1.4.3
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_section = 'section-colors-background';

			if ( class_exists( 'Astra_Ext_Extension' ) && Astra_Ext_Extension::is_active( 'colors-and-background' ) && ! astra_has_gcp_typo_preset_compatibility() ) {
				$_section = 'section-colors-body';
			}

			$_configs = array(

				/**
				 * Option: Single Page Content Layout
				 */
				array(
					'name'              => ASTRA_THEME_SETTINGS . '[site-content-layout]',
					'type'              => 'control',
					'control'           => 'ast-radio-image',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_choices' ),
					'section'           => 'section-container-layout',
					'default'           => astra_get_option( 'site-content-layout' ),
					'priority'          => 9,
					'title'             => __( 'Default Layout', 'astra' ),
					'choices'           => array(
						'boxed-container'         => array(
							'label' => __( 'Boxed', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-boxed', false ) : '',
						),
						'content-boxed-container' => array(
							'label' => __( 'Content Boxed', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-content-boxed', false ) : '',
						),
						'plain-container'         => array(
							'label' => __( 'Full Width / Contained', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-full-width-contained', false ) : '',
						),
						'page-builder'            => array(
							'label' => __( 'Full Width / Stretched', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-full-width-stretched', false ) : '',
						),
					),
					'divider'           => array( 'ast_class' => 'ast-bottom-section-divider' ),
				),

				/**
				 * Option: Single Page Content Layout
				 */
				array(
					'name'              => ASTRA_THEME_SETTINGS . '[single-page-content-layout]',
					'type'              => 'control',
					'control'           => 'ast-radio-image',
					'sanitize_callback' => array( 'Astra_Customizer_Sanitizes', 'sanitize_choices' ),
					'section'           => 'section-page-group',
					'default'           => astra_get_option( 'single-page-content-layout', 'default' ),
					'priority'          => 4,
					'title'             => __( 'Container Layout', 'astra' ),
					'choices'           => array(
						'default'                 => array(
							'label' => __( 'Default', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'layout-default', false ) : '',
						),
						'boxed-container'         => array(
							'label' => __( 'Boxed', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-boxed', false ) : '',
						),
						'content-boxed-container' => array(
							'label' => __( 'Content Boxed', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-content-boxed', false ) : '',
						),
						'plain-container'         => array(
							'label' => __( 'Full Width / Contained', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-full-width-contained', false ) : '',
						),
						'page-builder'            => array(
							'label' => __( 'Full Width / Stretched', 'astra' ),
							'path'  => ( class_exists( 'Astra_Builder_UI_Controller' ) ) ? Astra_Builder_UI_Controller::fetch_svg_icon( 'container-full-width-stretched', false ) : '',
						),
					),
					'divider'           => array( 'ast_class' => 'ast-section-spacing ast-bottom-section-divider' ),
				),

				/**
				 * Option: Theme color heading
				 */
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[surface-colors-title]',
					'section'     => $_section,
					'title'       => __( 'Surface Color', 'astra' ),
					'type'        => 'control',
					'control'     => 'ast-group-title',
					'priority'    => 25,
					'responsive'  => true,
					'settings'    => array(),
					'input_attrs' => array(
						'reset_linked_controls' => array(
							'site-layout-outside-bg-obj-responsive',
							'content-bg-obj-responsive',
						),
					),
				),

				/**
				 * Option: Body Background
				 */
				array(
					'name'        => ASTRA_THEME_SETTINGS . '[site-layout-outside-bg-obj-responsive]',
					'type'        => 'control',
					'control'     => 'ast-responsive-background',
					'default'     => astra_get_option( 'site-layout-outside-bg-obj-responsive' ),
					'section'     => $_section,
					'transport'   => 'postMessage',
					'priority'    => 25,
					'input_attrs' => array(
						'ignore_responsive_btns' => true,
					),
					'title'       => __( 'Site Background', 'astra' ),
				),
			);

			$section_content_bg_obj = ( class_exists( 'Astra_Ext_Extension' ) && Astra_Ext_Extension::is_active( 'colors-and-background' ) ) ? 'section-colors-body' : 'section-colors-background';

			if ( astra_has_gcp_typo_preset_compatibility() ) {

				$_configs[] = array(
					'name'        => ASTRA_THEME_SETTINGS . '[content-bg-obj-responsive]',
					'default'     => astra_get_option( 'content-bg-obj-responsive' ),
					'type'        => 'control',
					'control'     => 'ast-responsive-background',
					'section'     => $_section,
					'title'       => __( 'Content Background', 'astra' ),
					'transport'   => 'postMessage',
					'input_attrs' => array(
						'ignore_responsive_btns' => true,
					),
					'priority'    => 25,
					'divider'     => defined( 'ASTRA_EXT_VER' ) && Astra_Ext_Extension::is_active( 'colors-and-background' ) ? array( 'ast_class' => 'ast-bottom-section-divider' ) : array(),
				);
			}

			$configurations = array_merge( $configurations, $_configs );

			// Learn More link if Astra Pro is not activated.
			if ( ! defined( 'ASTRA_EXT_VER' ) ) {

				$config = array(

					array(
						'name'     => ASTRA_THEME_SETTINGS . '[ast-site-layout-button-link]',
						'type'     => 'control',
						'control'  => 'ast-button-link',
						'section'  => 'section-container-layout',
						'priority' => 999,
						'title'    => __( 'View Astra Pro Features', 'astra' ),
						'url'      => astra_get_pro_url( 'https://wpastra.com/pro', 'customizer', 'learn-more', 'upgrade-to-pro' ),
						'settings' => array(),
						'divider'  => array( 'ast_class' => 'ast-top-section-divider' ),
					),
				);

				$configurations = array_merge( $configurations, $config );
			}

			return $configurations;
		}
	}
}

new Astra_Site_Container_Layout_Configs();

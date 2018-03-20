<?php
/**
 * Portum Theme Customizer Fields
 *
 * @package Portum
 * @since   1.0
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register customizer fields
 */

/**
 * General section options
 */
Epsilon_Customizer::add_field(
	'portum_enable_go_top',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Go to top button', 'portum' ),
		'description' => esc_html__( 'Toggle the display of the go to top button.', 'portum' ),
		'section'     => 'portum_header_section',
		'default'     => true,
	)
);
/**
 * Layout section options
 */
Epsilon_Customizer::add_field(
	'portum_layout',
	array(
		'type'     => 'epsilon-layouts',
		'section'  => 'portum_layout_section',
		'layouts'  => array(
			1 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
			2 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/two-column.png',
		),
		'default'  => array(
			'columnsCount' => 2,
			'columns'      => array(
				1 => array(
					'index' => 1,
					'span'  => 8,
				),
				2 => array(
					'index' => 2,
					'span'  => 4,
				),
			),
		),
		'min_span' => 4,
		'fixed'    => true,
		'label'    => esc_html__( 'Blog Layout', 'portum' ),
	)
);
Epsilon_Customizer::add_field(
	'portum_page_layout',
	array(
		'type'     => 'epsilon-layouts',
		'section'  => 'portum_layout_section',
		'layouts'  => array(
			1 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
			2 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/two-column.png',
		),
		'default'  => array(
			'columnsCount' => 2,
			'columns'      => array(
				1 => array(
					'index' => 1,
					'span'  => 8,
				),
				2 => array(
					'index' => 2,
					'span'  => 4,
				),
			),
		),
		'min_span' => 4,
		'fixed'    => true,
		'label'    => esc_html__( 'Page Layout', 'portum' ),
	)
);
/**
 * Typography section options
 */
Epsilon_Customizer::add_field(
	'portum_typography_headings',
	array(
		'type'          => 'epsilon-typography',
		'transport'     => 'postMessage',
		'label'         => esc_html__( 'Headings', 'portum' ),
		'section'       => 'portum_layout_section',
		'description'   => esc_html__( 'Note: Current typography controls will only be affecting the blog.', 'portum' ),
		'stylesheet'    => 'portum-main',
		'choices'       => array(
			'font-family',
			'font-weight',
			'font-style',
			'letter-spacing',
		),
		'selectors'     => array(
			'.post-title',
			'.post-content h1',
			'.post-content h2',
			'.post-content h3',
			'.post-content h4',
			'.post-content h5',
			'.post-content h6',
		),
		'font_defaults' => array(
			'letter-spacing' => '0',
			'font-family'    => '',
			'font-weight'    => '',
			'font-style'     => '',
		),
	)
);
Epsilon_Customizer::add_field(
	'portum_paragraphs_typography',
	array(
		'type'          => 'epsilon-typography',
		'transport'     => 'postMessage',
		'section'       => 'portum_layout_section',
		'label'         => esc_html__( 'Paragraphs', 'portum' ),
		'description'   => esc_html__( 'Note: Current typography controls will only be affecting the blog.', 'portum' ),
		'stylesheet'    => 'portum-main',
		'choices'       => array(
			'font-family',
			'font-weight',
			'font-style',
		),
		'selectors'     => array(
			'.post-content p',
		),
		'font_defaults' => array(
			'font-family' => '',
			'font-weight' => '',
			'font-style'  => '',
		),
	)
);

/**
 * Blog section options
 */
Epsilon_Customizer::add_field(
	'portum_show_single_post_thumbnail',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Post Meta: Thumbnail in content', 'portum' ),
		'description' => esc_html__( 'This option will disable the post thumbnail from the beginning of the post content.', 'portum' ),
		'section'     => 'header_image',
		'default'     => true,
	)
);

Epsilon_Customizer::add_field(
	'portum_show_single_post_categories',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Post Meta: Categories', 'portum' ),
		'description' => esc_html__( 'This will disable the category section at the beggining of the post.', 'portum' ),
		'section'     => 'header_image',
		'default'     => true,
	)
);


Epsilon_Customizer::add_field(
	'portum_enable_author_box',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Post meta: Author', 'portum' ),
		'description' => esc_html__( 'Toggle the display of the author box, at the left side of the post. Will only display if the author has a description defined.', 'portum' ),
		'section'     => 'header_image',
		'default'     => true,
	)
);

Epsilon_Customizer::add_field(
	'portum_show_single_post_tags',
	array(
		'type'        => 'epsilon-toggle',
		'label'       => esc_html__( 'Post Meta: Tags', 'portum' ),
		'description' => esc_html__( 'This will disable the tags zone at the end of the post.', 'portum' ),
		'section'     => 'header_image',
		'default'     => true,
	)
);

/**
 * Footer section options
 */
Epsilon_Customizer::add_field(
	'portum_footer_columns',
	array(
		'type'     => 'epsilon-layouts',
		'section'  => 'portum_footer_section',
		'priority' => 0,
		'layouts'  => array(
			1 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
			2 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/two-column.png',
			3 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/three-column.png',
			4 => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/four-column.png',
		),
		'fixed'    => true,
		'default'  => array(
			'columnsCount' => 4,
			'columns'      => array(
				array(
					'index' => 1,
					'span'  => 3,
				),
				array(
					'index' => 2,
					'span'  => 3,
				),
				array(
					'index' => 3,
					'span'  => 3,
				),
				array(
					'index' => 4,
					'span'  => 3,
				),
			),
		),
		'min_span' => 2,
		'label'    => esc_html__( 'Footer Columns', 'portum' ),
	)
);
/**
 * Google Api KEY
 */
Epsilon_Customizer::add_field(
	'portum_google_api_key',
	array(
		'type'              => 'text',
		'section'           => 'portum_misc_section',
		'sanitize_callback' => 'sanitize_text_field',
		'label'             => esc_html__( 'Google API KEY', 'portum' ),
	)
);

//Translators: Contact forms not found label
$forms[0] = esc_html__( '-- No Contact Forms --', 'portum' );
if ( defined( 'WPCF7_VERSION' ) ) {
	$args = array(
		'post_type' => 'wpcf7_contact_form',
	);

	$posts = new WP_Query( $args );
	wp_reset_postdata();
	if ( $posts->have_posts() ) {
		//Translators: Select contact form label
		$forms[0] = esc_html__( '-- Select a Contact Form --', 'portum' );

		while ( $posts->have_posts() ) {
			$posts->the_post();

			$forms[ get_the_ID() ] = get_the_title();
		}
	}
}

/**
 * Contact Form
 */
Epsilon_Customizer::add_field(
	'portum_contact_form',
	array(
		'type'        => 'select',
		'section'     => 'portum_footer_section',
		'label'       => 'Contact Form',
		'description' => 1 === count( $forms ) ? __( 'To use this section you need to create a contact form with CF7', 'portum' ) : null,
		'default'     => 'no-forms',
		'choices'     => $forms,
	)
);
/**
 * Contact boxes
 */
Epsilon_Customizer::add_field(
	'portum_contact_section',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_contact_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Contact Columns', 'portum' ),
		'button_label' => esc_html__( 'Add new boxes', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'contact_title',
		),
		'fields'       => array(
			'contact_title' => array(
				'label'   => esc_html__( 'Title', 'portum' ),
				'type'    => 'text',
				'default' => esc_html__( 'Headquarters', 'portum' ),
			),
			'contact_icon'  => array(
				'label'   => esc_html__( 'Icon', 'portum' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-map',
			),
			'contact_text'  => array(
				'label'   => esc_html__( 'Text', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => esc_html__( '176 Westmore Mondaile Street Victorian 887 NYC', 'portum' ),
			),
		),
	)
);

/**
 * Theme Content
 */

/**
 * Testimonials
 */
Epsilon_Customizer::add_field(
	'portum_testimonials',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_testimonials_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Testimonials', 'portum' ),
		'button_label' => esc_html__( 'Add new entries', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'testimonial_title',
		),
		'fields'       => array(
			'testimonial_title'    => array(
				'label'   => esc_html__( 'Title', 'portum' ),
				'type'    => 'text',
				'default' => 'Michael Cross',
			),
			'testimonial_subtitle' => array(
				'label'   => esc_html__( 'Position', 'portum' ),
				'type'    => 'text',
				'default' => 'CEO @ Hampybrewry',
			),
			'testimonial_text'     => array(
				'label'   => esc_html__( 'Text', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => '"Maecenas nec maximus magna. Nullam nec metus ullamcorper, scelerisque nulla vel, amus at fermentum ligula Maecenas nec maximus magna. Nullam nec metus ullamcorper, scelerisque nulla vel, amus at fermentum ligula"',
			),
			'testimonial_image'    => array(
				'label'   => esc_html__( 'Portrait', 'portum' ),
				'type'    => 'epsilon-image',
				'size'    => 'portum-testimonial-portrait',
				'default' => esc_url( get_template_directory_uri() . '/assets/images/testimonial-img-01.jpg' ),
			),
		),
	)
);
/**
 * Slides
 */
Epsilon_Customizer::add_field(
	'portum_slides',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_slides_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Slides', 'portum' ),
		'button_label' => esc_html__( 'Add new slides', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'slides_title',
		),
		'fields'       => array(
			'slides_title'       => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Growing your business',
			),
			'slides_description' => array(
				'label'   => esc_html__( 'Description', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => 'FROM ZERO TO HERO ALONG WITH YOU',
			),
			'slides_image'       => array(
				'label'   => esc_html__( 'Portrait', 'portum' ),
				'type'    => 'epsilon-image',
				'size'    => 'portum-main-slider',
				'default' => esc_url( get_template_directory_uri() . '/assets/images/slider-img-01.jpg' ),
			),
		),
	)
);
/**
 * Services
 */
Epsilon_Customizer::add_field(
	'portum_services',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_services_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Services', 'portum' ),
		'button_label' => esc_html__( 'Add new service', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'service_title',
		),
		'fields'       => array(
			'service_title'       => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Business',
			),
			'service_description' => array(
				'label'             => esc_html__( 'Description', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Consultance',
			),
			'service_icon'        => array(
				'label'   => esc_html__( 'Icon', 'portum' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-users',
			),
		),
	)
);
/**
 * Portfolio Items
 */
Epsilon_Customizer::add_field(
	'portum_portfolio',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_portfolio_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Portfolio Items', 'portum' ),
		'button_label' => esc_html__( 'Add new items', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'portfolio_title',
		),
		'fields'       => array(
			'portfolio_title'       => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => esc_html__( 'Project Title', 'portum' ),
			),
			'portfolio_description' => array(
				'label'   => esc_html__( 'Description', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => esc_html__( 'Nullam nec metus ullamcorper, scelerisque null', 'portum' ),
			),
			'portfolio_image'       => array(
				'label'   => esc_html__( 'Image', 'portum' ),
				'type'    => 'epsilon-image',
				'size'    => 'portum-portfolio-image',
				'default' => esc_url( get_template_directory_uri() . '/assets/images/03_projects_01.jpg' ),
			),
			'portfolio_link'        => array(
				'label'             => esc_html__( 'Portfolio Item URL', 'portum' ),
				'type'              => 'url',
				'sanitize_callback' => 'esc_url_raw',
				'default'           => '#',
			),
		),
	)
);
/**
 * Expertise
 */
Epsilon_Customizer::add_field(
	'portum_expertise',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_expertise_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Expertise Items', 'portum' ),
		'button_label' => esc_html__( 'Add new items', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'expertise_title',
		),
		'fields'       => array(
			'expertise_number'      => array(
				'label'             => esc_html__( 'Number', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '01',
			),
			'expertise_title'       => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => esc_html__( 'We can improve your business', 'portum' ),
			),
			'expertise_description' => array(
				'label'   => esc_html__( 'Description', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia velit quis sem dignissim porta.', 'portum' ),
			),
		),
	)
);
/**
 * Counter boxes
 */
Epsilon_Customizer::add_field(
	'portum_counter_boxes',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_counters_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Counter Items', 'portum' ),
		'button_label' => esc_html__( 'Add new items', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'counter_title',
		),
		'fields'       => array(
			'counter_title'        => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'Satisfied Clients',
			),
			'counter_number'       => array(
				'label'             => esc_html__( 'Number', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'absint',
				'default'           => 720,
			),
			'counter_symbol'       => array(
				'label'             => esc_html__( 'Symbol', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '',
			),
			'counter_icon'         => array(
				'label'   => esc_html__( 'Icon', 'portum' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-hdd-o',
			),
			'counter_type'         => array(
				'label'   => esc_html__( 'Counter type', 'portum' ),
				'type'    => 'select',
				'default' => 'normal',
				'choices' => array(
					'normal'   => __( 'Normal', 'portum' ),
					'odometer' => __( 'Odometer', 'portum' )
				),
			),
			'counter_icon_display' => array(
				'label'   => esc_html__( 'Display icon?', 'portum' ),
				'type'    => 'epsilon-toggle',
				'default' => true,
			),
		),
	)
);
/**
 * Progress bars
 */
Epsilon_Customizer::add_field(
	'portum_progress_bars',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_progress_bars_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Progress Bars', 'portum' ),
		'button_label' => esc_html__( 'Add new items', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'progress_bar_title',
		),
		'fields'       => array(
			'progress_bar_title' => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'Satisfaction',
			),
			'progress_bar_value' => array(
				'label'             => esc_html__( 'Number', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'absint',
				'default'           => 55,
			),
			'progress_bar_type'  => array(
				'label'   => esc_html__( 'Type', 'portum' ),
				'type'    => 'select',
				'default' => 'normal',
				'choices' => array(
					'normal'    => esc_html__( 'Normal', 'portum' ),
					'alternate' => esc_html__( 'Alternate', 'portum' )
				),
			),
		),
	)
);
/**
 * Pie charts bars
 */
Epsilon_Customizer::add_field(
	'portum_pie_charts',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_piecharts_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Pie Charts', 'portum' ),
		'button_label' => esc_html__( 'Add new items', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'piechart_title',
		),
		'fields'       => array(
			'piechart_title' => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'Satisfaction',
			),
			'piechart_text'  => array(
				'label'   => esc_html__( 'Text', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => esc_html__( 'Nullam nec metus ullamcorper, scelerisque null', 'portum' ),
			),
			'piechart_value' => array(
				'label'             => esc_html__( 'Value', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'absint',
				'default'           => 55,
			),
			'piechart_size'  => array(
				'label'       => esc_html__( 'Size', 'portum' ),
				'description' => esc_html__( 'In pixels', 'portum' ),
				'type'        => 'epsilon-slider',
				'default'     => 200,
				'choices'     => array(
					'min'  => 100,
					'max'  => 250,
					'step' => 10,
				),
			),
			'piechart_bar_width'  => array(
				'label'       => esc_html__( 'Width', 'portum' ),
				'description' => esc_html__( 'In pixels', 'portum' ),
				'type'        => 'epsilon-slider',
				'default'     => 15,
				'choices'     => array(
					'min'  => 5,
					'max'  => 35,
					'step' => 5,
				),
			),
			'piechart_type'  => array(
				'label'   => esc_html__( 'Type', 'portum' ),
				'type'    => 'select',
				'default' => 'percentage',
				'choices' => array(
					'percentage' => esc_html__( 'Percentage', 'portum' ),
					'icon'       => esc_html__( 'icon', 'portum' ),
				),
			),
			'piechart_icon'  => array(
				'label'   => esc_html__( 'Icon', 'portum' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-hdd-o',
			),
		),
	)
);
/**
 * Client logos
 */
Epsilon_Customizer::add_field(
	'portum_clients',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_clientlists_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Client Logos', 'portum' ),
		'button_label' => esc_html__( 'Add new items', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'client_title',
		),
		'fields'       => array(
			'client_title' => array(
				'label'             => esc_html__( 'Title', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => 'Client',
			),
			'client_logo'  => array(
				'label'   => esc_html__( 'Title', 'portum' ),
				'type'    => 'epsilon-image',
				'default' => esc_url( get_template_directory_uri() . '/assets/images/client-logo.png' ),
			),
			'client_url'   => array(
				'label'             => esc_html__( 'Client Link', 'portum' ),
				'type'              => 'text',
				'sanitize_callback' => 'esc_url_raw',
				'default'           => '#',
			),
		),
	)
);
/**
 * Team Members
 */
Epsilon_Customizer::add_field(
	'portum_team_members',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_team_members_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Team Members', 'portum' ),
		'button_label' => esc_html__( 'Add new member', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'member_title',
		),
		'fields'       => array(
			'member_title'            => array(
				'label'             => esc_html__( 'Name', 'portum' ),
				'type'              => 'text',
				'default'           => __( 'James Austin', 'portum' ),
				'sanitize_callback' => 'wp_kses_post',
			),
			'member_text'             => array(
				'label'   => esc_html__( 'Text', 'portum' ),
				'type'    => 'epsilon-text-editor',
				'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lacinia velit quis sem dignissim porta.', 'portum' ),
			),
			'member_image'            => array(
				'label'   => esc_html__( 'Portrait', 'portum' ),
				'type'    => 'epsilon-image',
				'size'    => 'portum-team-image',
				'default' => esc_url( get_template_directory_uri() . '/assets/images/team-img-01.jpg' ),
			),
			'member_social_facebook'  => array(
				'label'   => esc_html__( 'Facebook', 'portum' ),
				'type'    => 'url',
				'default' => 'https://facebook.com',
			),
			'member_social_twitter'   => array(
				'label'   => esc_html__( 'Twitter', 'portum' ),
				'type'    => 'url',
				'default' => 'https://twitter.com',
			),
			'member_social_pinterest' => array(
				'label'   => esc_html__( 'Pinterest', 'portum' ),
				'type'    => 'url',
				'default' => 'https://pinterest.com',
			),
			'member_social_linkedin'  => array(
				'label'   => esc_html__( 'LinkedIn', 'portum' ),
				'type'    => 'url',
				'default' => 'https://linkedin.com',
			),
		),
	)
);
/**
 * Team Members
 */
Epsilon_Customizer::add_field(
	'portum_price_boxes',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'portum_pricing_section',
		'save_as_meta' => Epsilon_Content_Backup::get_instance()->setting_page,
		'label'        => esc_html__( 'Price Boxes', 'portum' ),
		'button_label' => esc_html__( 'Add new price box', 'portum' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'price_box_title',
		),
		'fields'       => array(
			'price_box_title'    => array(
				'label'             => esc_html__( 'Name', 'portum' ),
				'type'              => 'text',
				'default'           => esc_html__( 'Standard', 'portum' ),
				'sanitize_callback' => 'wp_kses_post',
			),
			'price_box_text'     => array(
				'label'             => esc_html__( 'Text', 'portum' ),
				'type'              => 'text',
				'default'           => esc_html__( 'Get started now! You have the base!', 'portum' ),
				'sanitize_callback' => 'wp_kses_post',
			),
			'price_box_currency' => array(
				'label'   => esc_html__( 'Currency', 'portum' ),
				'type'    => 'text',
				'default' => '$',
			),
			'price_box_price'    => array(
				'label'   => esc_html__( 'Price', 'portum' ),
				'type'    => 'text',
				'default' => '59',
			),
			'price_box_period'   => array(
				'label'   => esc_html__( 'Period', 'portum' ),
				'type'    => 'text',
				'default' => 'mo',
			),
			'price_box_url'      => array(
				'label'             => esc_html__( 'Button URL', 'portum' ),
				'type'              => 'text',
				'default'           => '#',
				'sanitize_callback' => 'wp_kses_post',
			),
			'price_box_features' => array(
				'label'             => esc_html__( 'Features', 'portum' ),
				'type'              => 'epsilon-text-editor',
				'default'           => '<ul><li><span>10GB</span> Disk Space</li><li><span>Free</span> DDoS Protection</li><li><span>Free</span> Daily Backups</li><li>Managed Hosting</li></ul>',
				'sanitize_callback' => 'wp_kses_post',
			),
		),
	)
);

/**
 * Repeatable sections
 */
Epsilon_Customizer::add_field(
	'portum_frontpage_sections',
	array(
		'type'                => 'epsilon-section-repeater',
		'label'               => esc_html__( 'Sections', 'portum' ),
		'section'             => 'portum_repeatable_section',
		'page_builder'        => true,
		'repeatable_sections' => Portum_Repeatable_Sections::get_instance()->sections,
	)
);
/**
 * Color Schemes
 */
Epsilon_Customizer::add_field(
	'portum_color_scheme',
	array(
		'label'       => esc_html__( 'Color scheme', 'portum' ),
		'description' => esc_html__( 'Select a color scheme', 'portum' ),
		'type'        => 'epsilon-color-scheme',
		'priority'    => 0,
		'default'     => 'primary',
		'section'     => 'colors',
		'transport'   => 'postMessage',
		'choices'     => array(
			array(
				'id'     => 'primary',
				'name'   => 'Primary',
				'colors' => array(
					'epsilon_accent_color'        => '#cc263d',
					'epsilon_accent_color_second' => '#364d7c',
					'epsilon_text_color'          => '#777777',
					'epsilon_title_color'         => '#1a171c',
					'epsilon_link_color'          => '#d1d5de',
					'epsilon_footer_background'   => '#18304c',
					'epsilon_footer_text_color'   => '#13b0a5',
					'epsilon_footer_link_color'   => '#13b0a5'
				),
			),
			array(
				'id'     => 'yellow',
				'name'   => 'Yellow',
				'colors' => array(
					'epsilon_accent_color'        => '#f3950f',
					'epsilon_accent_color_second' => '#364d7c',
					'epsilon_text_color'          => '#777777',
					'epsilon_title_color'         => '#1a171c',
					'epsilon_link_color'          => '#d1d5de',
					'epsilon_footer_background'   => '#18304c',
					'epsilon_footer_text_color'   => '#13b0a5',
					'epsilon_footer_link_color'   => '#13b0a5'
				),
			),
			array(
				'id'     => 'green',
				'name'   => 'Green',
				'colors' => array(
					'epsilon_accent_color'        => '#097d3d',
					'epsilon_accent_color_second' => '#364d7c',
					'epsilon_text_color'          => '#777777',
					'epsilon_title_color'         => '#1a171c',
					'epsilon_link_color'          => '#d1d5de',
					'epsilon_footer_background'   => '#18304c',
					'epsilon_footer_text_color'   => '#13b0a5',
					'epsilon_footer_link_color'   => '#13b0a5'
				),
			),
			array(
				'id'     => 'blue',
				'name'   => 'Blue',
				'colors' => array(
					'epsilon_accent_color'        => '#298dd2',
					'epsilon_accent_color_second' => '#364d7c',
					'epsilon_text_color'          => '#777777',
					'epsilon_title_color'         => '#1a171c',
					'epsilon_link_color'          => '#d1d5de',
					'epsilon_footer_background'   => '#18304c',
					'epsilon_footer_text_color'   => '#13b0a5',
					'epsilon_footer_link_color'   => '#13b0a5'
				),
			),
			array(
				'id'     => 'magenta',
				'name'   => 'Magenta',
				'colors' => array(
					'epsilon_accent_color'        => '#ae1062',
					'epsilon_accent_color_second' => '#364d7c',
					'epsilon_text_color'          => '#777777',
					'epsilon_title_color'         => '#1a171c',
					'epsilon_link_color'          => '#d1d5de',
					'epsilon_footer_background'   => '#18304c',
					'epsilon_footer_text_color'   => '#13b0a5',
					'epsilon_footer_link_color'   => '#13b0a5'
				),
			),
		),
	)
);
